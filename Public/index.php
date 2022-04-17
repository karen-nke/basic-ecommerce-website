<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title>PopHolic Collectibles</title>
        <meta name="vieport" content="width=device-width, initial-scale =1.0">
        <link rel="stylesheet" href="private.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


        <?php require_once 'Part/_header.php' ?>

        <?php require_once 'Part/session.php' ?>








        <!----------Slide--------------->
        <div class="container">

                <div class="slideshow-container">

                        <div class="mySlides fade"><br>
                                <div class="numbertext">1 / 3</div>
                                <img src="Image/Index_Slide1.png" style="width:100%">

                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext">2 / 3</div>
                                <img src="Image/Index_Slide2.png" style="width:100%">

                        </div>

                        <div class="mySlides fade">
                                <div class="numbertext">3 / 3</div>
                                <img src="Image/Index_Slide3.png" style="width:100%">

                        </div>

                </div>


                <div style="text-align:center">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                </div>

                <script>
                        var slideIndex = 0;
                        showSlides();

                        function showSlides() {
                                var i;
                                var slides = document.getElementsByClassName("mySlides");
                                var dots = document.getElementsByClassName("dot");
                                for (i = 0; i < slides.length; i++) {
                                        slides[i].style.display = "none";
                                }
                                slideIndex++;
                                if (slideIndex > slides.length) {
                                        slideIndex = 1
                                }
                                for (i = 0; i < dots.length; i++) {
                                        dots[i].className = dots[i].className.replace(" active", "");
                                }
                                slides[slideIndex - 1].style.display = "block";
                                dots[slideIndex - 1].className += " active";
                                setTimeout(showSlides, 8000);
                        }
                </script>


        </div>

        <!-------------- Our Featured Products -------------->
        <div class="product-container">
                <h2 class="title"><br>New Funko Pop For Purchase</h2>
                <div class="row">

                        <?php

                        require_once("Part/dbcontroller.php");
                        $db_handle = new DBController();
                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Funko' ORDER BY product_id DESC LIMIT 4 ");
                        if (!empty($product_array)) {
                                foreach ($product_array as $key => $value) {


                        ?>
                                        <div class="column">

                                                <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                                        <img src="<?php echo $product_array[$key]["image"]; ?>" style="width:100%"></a>

                                                        <h4><?php echo $product_array[$key]["product_name"] ?></h4>
                                                        <p>Category: <?php echo $product_array[$key]["product_category"] ?></p>
                                                        <p>Price : RM <?php echo $product_array[$key]["product_price"] ?></p>
                                                        <p> Type : <?php echo $product_array[$key]["product_type"] ?></p>
                                                        <p> <?php echo $product_array[$key]["product_description"] ?></p>
                                                        <input type="text" class="product-quantity" name="quantity" value="1" size="2" />


                                                        <button type="submit" class="btn my-3" name="add">Add to Cart </button>

                                        </div>



                                        </form>

                        <?php

                                }
                        }
                        ?>
                        <button class="btn"><a href="funko_page.php?type=all">Shop More Funko</a> </button>



                </div>

        </div>

        <hr>

        <div class="product-container">
                <h2 class="title"><br>Shop Funko By Category</h2>
                <div class="row">


                        <div class="column">

                                <a href="funko_page.php?type=preorder"><img src="Image/Preorder.png" style="width:100%"></a>

                                <button class="btn"><a href="funko_page.php?type=preorder">Click Me</a> </button>

                        </div>

                        <div class="column">

                                <a href="funko_page.php?type=backorder"><img src="Image/Backorder.png" style="width:100%"></a>

                                <button class="btn"><a href="funko_page.php?type=backorder">Click Me</a> </button>

                        </div>

                        <div class="column">

                                <a href="funko_page.php?type=instock"><img src="Image/instock.png" style="width:100%"></a>

                                <button class="btn"><a href="funko_page.php?type=instock">Click Me</a> </button>

                        </div>
                </div>

        </div>


        <hr>

        <div class="product-container">
                <h2 class="title"><br>New Banpresto For Purchase</h2>
                <div class="row">

                        <?php

                        require_once("Part/dbcontroller.php");
                        $db_handle = new DBController();
                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' ORDER BY product_id DESC LIMIT 4");
                        if (!empty($product_array)) {
                                foreach ($product_array as $key => $value) {


                        ?>
                                        <div class="column">

                                                <form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                                                        <img src="<?php echo $product_array[$key]["image"]; ?>" style="width:100%"></a>

                                                        <h4><?php echo $product_array[$key]["product_name"] ?></h4>
                                                        <p>Category: <?php echo $product_array[$key]["product_category"] ?></p>
                                                        <p>Price : RM <?php echo $product_array[$key]["product_price"] ?></p>
                                                        <p> Type : <?php echo $product_array[$key]["product_type"] ?></p>
                                                        <p> <?php echo $product_array[$key]["product_description"] ?></p>
                                                        <input type="text" class="product-quantity" name="quantity" value="1" size="2" />


                                                        <button type="submit" class="btn my-3" name="add">Add to Cart </button>

                                        </div>



                                        </form>

                        <?php

                                }
                        }
                        ?>
                        <button class="btn" style="color:white"><a href="banpresto_page.php?type=all">Shop Banprestos</a> </button>



                </div>

        </div>

        <hr>

        <div class="product-container">
                <h2 class="title"><br>Shop Banpresto By Category</h2>
                <div class="row">


                        <div class="column">

                                <a href="banpresto_page.php?type=preorder"><img src="Image/Preorder.png" style="width:100%"></a>

                                <button class="btn"><a href="banpresto_page.php?type=preorder">Click Me</a> </button>

                        </div>

                        <div class="column">

                                <a href="banpresto_page.php?type=backorder"><img src="Image/Backorder.png" style="width:100%"></a>

                                <button class="btn"><a href="banpresto_page.php?type=backorder">Click Me</a> </button>

                        </div>

                        <div class="column">

                                <a href="banpresto_page.php?type=instock"><img src="Image/instock.png" style="width:100%"></a>

                                <button class="btn"><a href="banpresto_page.php?type=instock">Click Me</a> </button>

                        </div>
                </div>

        </div>

  

        <?php require_once 'Part/_footer.php' ?>









</body>

</html>