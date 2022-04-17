<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Funko</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="../private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>


    <?php include '_header2.php' ?>

    <?php

include 'Part/session_part.php'
?>

    <?php

    include "config.php";

    $id = $_GET['id']; // get id through query string

    $qry = mysqli_query($conn, "select * from Product where product_id='$id'"); // select query

    $data = mysqli_fetch_array($qry); // fetch data

 

    if (isset($_POST['update'])) // when click on Update button
    {
        $name = $_POST['product_name'];
        $code = $_POST['code'];
        $brand = $_POST['brand'];
        $cat = $_POST['product_category'];
        $price = $_POST['product_price'];
        $des = $_POST['product_description'];
        $type = $_POST['product_type'];
        $img = $_POST['image'];



        $edit = mysqli_query($conn, "update Product set product_name='$name',code='$code', brand='$brand', product_category='$cat',product_price='$price', product_description='$des',product_type='$type', image='$img' where product_id='$id'");

        if ($edit) {
            mysqli_close($conn); // Close connection
            header("location:../product_edit.php"); // redirects to all records page
            exit;
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }
    ?>


    <div class="page-container">

        <div class="row">
            <h1 style="color:#376189">Admin Control Panel</h1>

        </div>

        <div class="container">
            <form method="POST" class="login-email">
                <p class="login-text" style='font-size:2rem; font-weight:800;'>Edit A Funko Product</p>
                <div class="input-group">
                    <input type="text" name="product_name" value="<?php echo $data['product_name'] ?>" placeholder="Product Name">
                </div>
                <div class="input-group">
                    <input type="text" name="brand" value="<?php echo $data['brand'] ?>" placeholder="Product Brand">
                </div>
                <div class="input-group">
                    <input type="text" name="code" value="<?php echo $data['code'] ?>" placeholder="Product Code">
                </div>
                <div class="input-group">
                    <input type="text" name="product_category" value="<?php echo $data['product_category'] ?>" placeholder="Product Category">
                </div>
                <div class="input-group">
                    <input type="text" name="product_price" value="<?php echo $data['product_price'] ?>" placeholder="Product Price">
                </div>
                <div class="input-group">
                    <input type="text" name="product_description" value="<?php echo $data['product_description'] ?>" placeholder="Product Description">
                </div>
                <div class="input-group">
                    <input type="text" name="product_type" value="<?php echo $data['product_type'] ?>" placeholder="Product Type">
                </div>
                <div class="input-group">
                    <input type="text" name="image" value="<?php echo $data['image'] ?>" placeholder="Image">
                </div>
                <div class="input-group">

                    <button type="submit" class="btn" name="update">Update</button>
                </div>

            </form>

            <button class="btn"><a href="../product_edit.php">Back</a> </button>




        </div>





    </div>


    <?php include '_footer.php' ?>

</body>

</html>