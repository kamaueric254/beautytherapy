<?php include('register/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="alert alert-primary bg-pink">
        <h1 class="text-center">Beauty We Care</h1>
    </div>

  <div class="container mt-4 shadow">
        <div class="signup-form">
    <form action="register.php" method="post">
      	<?php include('register/errors.php'); ?>

		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
            	

        <div class="form-group mt-2 mb-3">
			<div class="row ">
				<div class="col"><input type="text" class="form-control" name="firstname" placeholder="First Name" required="required" value="<?php echo $firstname; ?>"></div>
				<div class="col"><input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required" value="<?php echo $lastname; ?>"></div>
			</div>        	
        </div>

         <div class="form-group mt-2 mb-3">
        	<input type="text" class="form-control" name="username" placeholder="username" required="required" value="<?php echo $username; ?>">
        </div>

        <div class="form-group mt-2 mb-3">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo $email; ?>">
        </div>
		<div class="form-group mt-2 mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
		<div class="form-group mt-2 mb-3">
            <input type="password" class="form-control" name="password_1" placeholder="Confirm Password" required="required">
        </div>
        <!--<div class="form-group mt-2 mb-3">
            <input type="file" name="file" required>
             <input type="submit" name="upload" value="Upload" class="btn"> -->
                
        <div class="form-group mt-2 mb-3">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group mt-2 mb-3">
            <button type="submit" name="register" class="btn btn-success btn-lg btn-block text-uppercase text-bold" style="background-color:pink; border:0;">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>

  </div>
	
</div>
</body>
</html>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>