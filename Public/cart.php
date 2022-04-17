<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: Login/login.php");
}
require_once("Part/session.php");

require_once("Part/dbcontroller.php");
$db_handle = new DBController();
//Get method for adding/remove item to Cart
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM Product WHERE code='" . $_GET["code"] . "'");
                //get the first data only with index [0]
                $itemArray = array($productByCode[0]["code"] => array(
                    'product_name' => $productByCode[0]["product_name"],
                    'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"],
                    'product_price' => $productByCode[0]["product_price"], 'image' => $productByCode[0]["image"]
                ));

                if (!empty($_SESSION["cart_item"])) {
                    //checking new add item with currect Cart
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {

                            if ($productByCode[0]["code"] == $k) {
                                //if the quantity  is empty, starting the quantity from Zero
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                //if the item already in the Cart, add the quantity
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                            }
                        }
                    }
                    //if current item is not in the cart, add the item
                    else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    //if the session is empty, start the new session.
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    // if no more item in cart, empty the session
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link rel="stylesheet" href="cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

</body>
<?php require_once('Part/_header.php') ?>
<div class="container">
    <div class="page-container">
        <div class="row">
            <h2 class="title"><br>Shopping Cart</h2>


        </div>


        <div class="row">
            <div class="shopping-cart">

                <?php
                if (isset($_SESSION["cart_item"])) {
                    $total_quantity = 0;
                    $total_price = 0;
                ?>


                    <!-- This table is the shopping cart.  -->
                    <table class="tbl-cart">
                        <tbody>

                            <tr>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Code</th>
                                <th width="5%">Quantity</th>
                                <th width="10%">Unit Price</th>
                                <th width="10%">Price</th>
                                <th width="5%">Remove</th>
                            </tr>

                            <?php
                            foreach ($_SESSION["cart_item"] as $item) {
                                $item_price = $item["quantity"] * $item["product_price"];
                            ?>
                                <tr>
                                    <td><img src="<?php echo $item["image"]; ?> " width="200" height="200"></td>
                                    <td><?php echo $item["product_name"]; ?></td>
                                    <td><?php echo $item["code"]; ?></td>
                                    <td><?php echo $item["quantity"]; ?></td>
                                    <td><?php echo "RM " . $item["product_price"]; ?></td>
                                    <td><?php echo "RM " . number_format($item_price, 2); ?></td>
                                    <td>
                                        <!-- Get method to remove item in Cart -->
                                        <a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction">
                                            <img src="Image/icon-delete.png" alt="Remove Item" /></a>
                                    </td>

                                </tr>
                            <?php
                                $total_quantity += $item["quantity"];
                                $total_price += ($item["product_price"] * $item["quantity"]);
                            }
                            ?>



                            <tr>
                                <td colspan="3" style="text-align:right;">Total:</td>
                                <td><?php echo $total_quantity; ?></td>
                                <td colspan="2"><strong><?php echo "RM " . number_format($total_price, 2); ?></strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="row">
                        <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
                        <a id="btnCO" href="cart.php?action=empty">Checkout</a>
                    </div>

            </div>

        </div>



        <?php
                    } else {
        ?>
            <!-- When cart is empty  -->
            <div class="no-records">Your Cart is Empty</div>
        <?php
                    }
        ?>


    </div>


   
</div>
<?php require_once('Part/_footer.php') ?>




</body>

</html>