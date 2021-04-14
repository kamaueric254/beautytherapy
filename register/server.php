<?php
session_start();

// initializing variables
$firstname = "";
$lastname    = "";
$username="";
$email="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "firstname is required"); }
  
  if (empty($lastname)) { array_push($errors, "lastname is required"); }
  if (empty($username)) { array_push($errors, "username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_1) {
    array_push($errors, "The two passwords do not match");
    }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' OR username = '$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

   //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password, PASSWORD_BCRYPT);//encrypt the password before saving in the database

  	$query = "INSERT INTO users(firstname, lastname, username, email, password) 
  			  VALUES('$firstname', '$lastname','$username','$email', '$password')";
    
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
     header('location:index.php');
  }
}

  
  
  // LOGIN USER
  
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
  	array_push($errors, "email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }  
  $query = "SELECT * FROM users WHERE email='$email'";
  $results = mysqli_query($db, $query);

  if (mysqli_num_rows($results) > 0) {
    while ($row= mysqli_fetch_array($results))
    {
       if (password_verify($password ,$row["password"]))
        {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location:index.php');
  	     
        }
    }
  	 }else {
  		array_push($errors, "Wrong username/password combination");
  	}
    
}

?>