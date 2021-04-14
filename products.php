<?php 
    require 'dbconnect.php';

    // if (!isset($_SESSION['email'])) {
    //     header('location:login.php');
    // }

    $sql="SELECT*FROM products";
    $result= mysqli_query($db,$sql);
    $products=mysqli_fetch_all($result,1);
    mysqli_close($db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
   
<style>

</style>
</head>


<body>
    <header class="header">

    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Beauty We Care</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php  ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makeup.php">MAKE UP </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">SKIN CARE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BODY CARE</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="product.php">PRODUCTS</a>
                    </li>
                    
                 <!--   <li class="nav-item">
                        <a class="nav-link" href="#">BRANDS</a>
                    </li>


                   

                    <li class="nav-item dropdown">
                        <a href="appoitment.php">
                            <button class="btn btn-outline-dark">Make appointment</button>
                        </a>

                    </li>-->
                </ul>

            </div>
        </div>
    </nav>
</header>

<main>

    <div class="container mt-4">
        <div class="row">
        <?php foreach($products as $product): ?>
            <div class="col-sm-3 shadow-sm m-2">
                <img src="images/cream1.jpg" class="img-fluid" alt="">
                <h3><?= $product['description']?></h3>
                <h3><?= $product['price']?></h3>
                <h3><?= $product['quantity']?></h3>
                <p></p>
            </div>
            <?php endforeach; ?>
            
        </div>
    </div>


</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>