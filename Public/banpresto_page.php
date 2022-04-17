<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <title>Banpresto</title>
        <meta name="vieport" content="width=device-width, initial-scale =1.0">
        <link rel="stylesheet" href="private.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

        <?php require_once 'Part/_header.php' ?>

        <?php require_once 'Part/session.php' ?>

        <div class="container">
                <div class="navbar">


                        <div class="dropdown">
                                <button class="dropbtn">Sort By
                                        <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                        <a href="banpresto_page.php?sort=az">Alphabetically A-Z</a>
                                        <a href="banpresto_page.php?sort=za">Alphabetically Z-A</a>
                                        <a href="banpresto_page.php?sort=lh">Price Low to High</a>
                                        <a href="banpresto_page.php?sort=hl">Price High to Low</a>
                                        <a href="banpresto_page.php?sort=no">Date New to Old</a>
                                        <a href="banpresto_page.php?sort=on">Date Old to New</a>
                                </div>
                        </div>

                        <div class="dropdown">
                                <button class="dropbtn">Category
                                        <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                        <a href="banpresto_page.php?type=preorder">Pre-Order</a>
                                        <a href="banpresto_page.php?type=backorder">Back-Order</a>
                                        <a href="banpresto_page.php?type=instock">Ready Stock</a>

                                </div>
                        </div>



                </div>

        </div>


        <!-------------- Our Featured Products -------------->
        <?php
        switch ($_GET["type"]) {
                case "preorder": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Preorder</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' AND product_type='Preorder'");
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


                                </div>

                        </div>
                        <?php break; ?>

                <?php
                case "instock": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Purchase</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto'AND product_type='Instock'");
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




                                </div>
                        </div>
                        <?php break; ?>

                <?php
                case "backorder": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Backorder</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto'AND product_type='Backorder'");
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




                                </div>
                        </div>
                        <?php break; ?>
                <?php
                case "all": ?>
                        <div class="product-container">
                                <h2 class="title"><br>Browse Banpresto</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto'");
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




                                </div>



                        </div>

        <?php
        }
        ?>
         <?php
        switch ($_GET["sort"]) {
                case "az": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Purchase</h2>
                                <div class="row">


                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' ORDER BY product_name ASC");
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



                                </div>
                        </div>
                        <?php break; ?>

                <?php
                case "za": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Purchase</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' ORDER BY product_name DESC");
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




                                </div>
                        </div>
                        <?php break; ?>
                <?php
                case "lh": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Funko Pop For Banpresto</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto'ORDER BY product_price ASC");
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




                                </div>
                        </div>
                        <?php break; ?>
                <?php
                case "hl": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Purchase</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' ORDER BY product_price DESC");
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




                                </div>



                        </div>
                        <?php break; ?>

                        <?php
                case "no": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Purchase</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' ORDER BY product_id DESC");
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




                                </div>



                        </div>
                        <?php break; ?>
                        <?php
                        case "on": ?>
                        <div class="product-container">
                                <h2 class="title"><br>New Banpresto For Purchase</h2>
                                <div class="row">

                                        <?php

                                        require_once("Part/dbcontroller.php");
                                        $db_handle = new DBController();
                                        $product_array = $db_handle->runQuery("SELECT * FROM Product where Brand ='Banpresto' ORDER BY product_id ASC");
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




                                </div>



                        </div>
                        <?php break; ?>


        <?php
        }
        ?>


        <hr>


        <?php require_once 'Part/_footer.php' ?>









</body>

</html>