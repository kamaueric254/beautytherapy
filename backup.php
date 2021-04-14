    <?php
    $con= mysqli_connect("localhost","root","","signup");

    if (isset($_POST['register'])) {
        //capture data from the form
        $firstname=mysqli_real_escape_string ($con,$_POST['first_name']);
        $lastname=mysqli_real_escape_string($con,$_POST['last_name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $confpassword=mysqli_real_escape_string($con,$_POST['passConfirm']);

       insertdatatobase($firstname,$lastname,$email,$password);
    }

    //insering data to the database
     function insertdatatobase($firstname,$lastname,$email,$password){
         //connect to database
         
    $con= mysqli_connect("localhost","root","","signup");

        $sql= "INSERT INTO `register`( `first_name`, `last_name`, `email`, `password`) VALUES (?,?,?,?)";

        //prepare the query

        if ($stmt= mysqli_prepare($con,$sql)) {
            //bind values
            mysqli_stmt_bind_param($stmt,"sssi",$param_firstname,$param_lastname,$param_email,$param_password);

            //param variables bind them
            $param_firstname=$firstname;
            $param_lastname=$lastname;
            $param_email=$email;
            $param_password=$password;
            
            //execute query
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<h1>Registered successfully<h1>";
               
            }else {
                echo"something went wrong";
            }
        }
        else {
         echo "something went wrong";
         
        }
        mysqli_close($con);
     }
    
    
    ?>