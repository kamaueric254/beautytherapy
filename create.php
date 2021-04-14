<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="background-image:url(images/blackskincare.png);">
    <div class="row justify-content-start m-4 p-3">
    <div class="col-sm-6">
    <h3 class="text-center p-3">Create product</h3>
    <form action="createproduct.php" method="post" class="gx-3 mt-4 p-3 shadow-lg bg-white">
        <div class="form-group">
        <label for="name" class="mt-2">Name</label>
        <input name="name" type="text" placeholder="Name" class="form-control p-3">
        </div>
        <div class="form-group">
        <label for="description">description</label>
        <input name="description" type="text" placeholder="description" class="form-control">
        </div>
        <div class="form-group">
        <label for="quantity">quantity</label>
        <input type="number" min="1" name="quantity" placeholder="quantity" class="form-control">
        </div>
        <div class="form-group">
        <label for="price">price</label>
        <input type="number"min="1" name="price" placeholder="price" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-info" name="createproduct">create</button>
    
    </form>

    </div>
    </div>
    </div>
    
</body>
</html>