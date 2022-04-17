<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Product</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>


    <?php include 'Part/_header2.php' ?>

    <?php include 'Part/session.php'?>

    <?php

    include 'Part/config.php';


    if (isset($_POST['submit'])) {
        $name = $_POST['product_name'];
        $code = $_POST['code'];
        $brand = $_POST['brand'];
        $cat = $_POST['product_category'];
        $price = $_POST['product_price'];
        $des = $_POST['product_description'];
        $type = $_POST['product_type'];
        $img = $_POST['image'];


        $sql = "INSERT INTO Product (product_name, code, brand, product_category, product_price, product_description, product_type, image)
					VALUES ('$name','$code', '$brand','$cat', '$price', '$des', '$type','$img')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Succesfully Registered Product')</script>";
            $name = "";
            $code ="";
            $brand ="";
            $cat = "";
            $price = "";
            $des = "";
            $type = "";
            $img ="";
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
            <form action="" method="POST" class="login-email">
                <p class="login-text" style='font-size:2rem; font-weight:800;'>Register A Product</p>
                <div class="input-group">
                    <input type="text" placeholder="Product Name" name="product_name" value="<?php echo $name; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Product Brand" name="brand" value="<?php echo $brand; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Product Code" name="code" value="<?php echo $code; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Product Category" name="product_category" value="<?php echo $cat; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Product Price" name="product_price" value="<?php echo $price; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Product Description" name="product_description" value="<?php echo $des; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Product Type" name="product_type" value="<?php echo $type; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Image Path" name="image" value="<?php echo $img; ?>"required>
                </div>
                <div class="input-group">
                    <button name="submit" class="btn">Post</button>
                </div>

            </form>

            <button class="btn"><a href="admin_page.php">Back</a> </button>




        </div>





    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>