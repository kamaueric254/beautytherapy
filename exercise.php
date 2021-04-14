<?php
session_start();

$raw_username   = "kobiebrant";

$raw_email           = "kobiebrant@gmail.com";
$raw_secretword      = "myheadisfullofbasketball";
$raw_age             = "40";
$raw_fullname        = "Kobie Breant";
$raw_address         = "New york";
$raw_customercomplaint = "my card declined twice today";

$c_username     = filter_var($raw_username,  FILTER_SANITIZE_STRING);

$c_email        =filter_var($raw_email , FILTER_SANITIZE_EMAIL);

$c_age          =filter_var($raw_age ,  FILTER_VALIDATE_INT);

$c_secretword   =filter_var($raw_secretword ,   FILTER_SANITIZE_STRING );

$c_fullname     =filter_var($raw_fullname,  FILTER_SANITIZE_STRING);

$c_address      =filter_var($raw_address,  FILTER_SANITIZE_STRING);

$c_customercomplaint= filter_var($raw_customercomplaint,   FILTER_SANITIZE_STRING);


$_SESSION['customerinfo'] = array
(
    'username' => "$c_username",
    'email'   => "$c_email"
);

echo "the user name is " .$_SESSION['customerinfo']['username']; echo "<br><br>";
echo "this is email " .$_SESSION['customerinfo']['email'];

echo "<br><br>";

 function minimumlenghtsecretword($c_secretword){
     $counted_secretword= strlen($c_secretword);

     if ($counted_secretword >= 8) {
         echo"your secret word is " .$c_secretword . "its correct";
     }else {
         echo "your secret word is " .$c_secretword . "cannot be less than 8 characters";
     }
 }
 minimumlenghtsecretword($c_secretword);

 $all_customers_data = array(
     
    'username' => "$c_username", 
    'useremail' =>"$c_email" , 
    'userage' => "$c_age", 
    'usercomplaint' => "$c_customercomplaint", 
    'userfullname' => "$c_fullname", 
    'userAddress' =>"$c_address"
);
 
function display_all_customers($all_customers_data){
echo "the company is seen live data";
   foreach ($all_customers_data as $customer_data ) {
     echo $customer_data ."<br>";
   }

}
display_all_customers($all_customers_data);