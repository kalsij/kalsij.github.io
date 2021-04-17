<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Macaroni</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Styles/newStyle.css" />
</head>

    <body>
        <!--nav bar-->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="background-color: blue;">
            <h1 style="margin-top:0mm;color:white; font-size:50px;font-style:italic; font-weight:bold; margin-right:1cm;">
                GSO</h1>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li><a href="GroceryStore-1.html">Home</a></li>

                    <li><a href="#">Aisles</a>
                        <ul>
                            <li><a href="Fruits and vegetables.html">Fruits and Vegetables</a></li>
                            <li><a href="Meat.html">Meat</a></li>
                            <li><a href="Dairy.html">Dairy</a></li>
                            <li><a href="Bread.html">Bread</a></li>
                            <li><a href="drinks.html">Drinks</a></li>
                            <li><a href="pasta.html">Pasta</a></li>
                            </a>


                    </li>

                </ul>

                <li><a href="#">Account</a>
                    <ul>
                        <li><a href="SignUp.html">Sign up</a></li>
                        <li><a href="SignIn.html">Sign in</a></li>
                    </ul>
                </li>
            </div>

            <a href="ShoppingCart.html"><img src="../Media/cart_logo.png" alt="Shopping Cart" width="50px" height="50px"
                    style="float:right"></a>
        </nav>

        <!--description product sheet-->
        <h1> </h1>
                <div class="container shadow-lg" >
            <div class="row">
                <div class="col-md-6 "  >
                    <img class="picture" name="macaroniImage" src="../Media/pexels-klaus-nielsen-6287380.jpg" alt="macaroni" style="width:90%; display: block; margin: 0 auto; margin-bottom: 20px;">
                </div>

                <div class="description col-md-5 " style = "margin-right: 50px">
                    <h4 ><b>Macaroni</b></h4>
                    <div>
                        <br/>
                    <h3  style="color:red">
                        CAD 1.66$
                    </h3>
                    <p>
                          0.11$/10g
                    </p>
                    <br/>

                    <!-- Add to Cart Button-->
                    <form action = "ShoppingCart.php" method = "POST">
                        <input class = "product-quantity ml-2 mr-2" type = "number" name = "quantity" id="totalMacaroni" value="1">
                        <!-- <p id="quantityMacaroni" name="quantity" style="display: inline;"  > 1</p> -->
                        <div class="btn"  >
                            <button type="submit" name ="submit" value="item" onclick="addMacaroniCart()">Add to cart</button>
                        </div>
                        
                        <?php
                        $_SESSION["ProductName"]="Macaroni";
                        $_SESSION["ImageSrc"]="../Media/pexels-klaus-nielsen-6287380.jpg";
                        $_SESSION["price"]="CAD 1.66$";
                        $_SESSION["pricePerUnit"]="0.11$/10g";
                        ?>
                    </form>

                    <br/>
                    <div style="padding-top: 20px;">
                    <button class="dropbtn">Product description</button>
                        <div class="content">
                            <p>Made from Italy's No.1 durum, these macaroni go perfectly with one of the most famous Canadian dishes, macaroni & cheese.</p>
                        </div>
                    </div>
                    <script type = "text/javascript" src="../Javascript/script.js"></script>
                </div>
                </div>
            </div> 
        </div>
        
        <!--Display of other products from same aisle-->
        <h1 class="ProductTitle">Pasta</h1>
            <div class=" justify-content-md-center row">

                <div class="col-md-auto">
                    <div class="penne">
                        <a href="penne.html">
                        <img src="../Media/pexels-klaus-nielsen-6287336.jpg" alt="penne" style="width:100%; max-height:200px;">
                        </a>
                        <h1 style="margin-top: auto; color:rgb(75, 75, 75);">Penne</h1>
                        <p class="price" style="color:rgb(75, 75, 75);">$1.66<br/>(454 g)</p>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="spaghetti">
                        <a href="spaghetti.html">
                        <img src="../Media/spaghetti.jpg" alt="spaghetti" style="width:100%;max-height:200px;">
                        </a>
                        <h1 style="margin-top: auto; color:rgb(75, 75, 75);">Spaghetti</h1>
                        <p class="price" style="color:rgb(75, 75, 75);">$1.66<br/>(500 g)</p>
                    </div>
                </div>
            </div>
     <!---------footer----------->
    <footer class="container py-4">
        <div class="row">
            <div class="col-12 col-md">
                <small class="d-block mb-3 text-muted">&copy; 2021-2022 </br> </small>
            <ul class="list-unstyled text-small">
                <li><a href="BackstoreProductList.html"class="text-muted">Backstore</a></li></ul>
            </div>
            <div class="col-6 col-md">
                <h5>Team</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted">Fatema Akther</a></li>
                <li><a class="text-muted">Julie Trinh</a></li>
                <li><a class="text-muted">Jasmit Kalsi</a></li>
                <li><a class="text-muted">Dzmitry Fiodarau</a></li>
                <li><a class="text-muted">Alice Chen</a></li>
                <li><a class="text-muted">Georgia Pitic</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Promotions</h5>
                <ul class="list-unstyled text-small">
                <li><a class="text-muted">Newsletter</a></li>
                <li><a class="text-muted">Gift cards</a></li>
                <li><a class="text-muted">Contests</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                <li><a href="Contact Us.html" class="text-muted">Contact us</a></li>
                <li><a class="text-muted">Our story</a></li>
                <li><a class="text-muted">FAQ</a></li>
                </ul>
            </div>
        </div>
    </footer>

    </body>

</html>