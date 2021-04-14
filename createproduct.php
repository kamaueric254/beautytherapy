<?php
require 'dbconnect.php';

$name="";
$description="";
$quantity="";
$price="";

//create
if (isset($_POST["createproduct"])) {
    $name= mysqli_real_escape_string($db, $_POST["name"]);
    $description= mysqli_real_escape_string($db, $_POST["description"]);
    $quantity= mysqli_real_escape_string($db, $_POST["quantity"]);
    $price= mysqli_real_escape_string($db, $_POST["price"]);

    $query= "INSERT INTO products(name,description,quantity,price)
                            VALUES('$name','$description','$quantity','$price')";
            
    mysqli_query($db,$query);
    
    header('location:products.php');
}