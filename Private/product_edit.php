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






    <div class="page-container">

        <div class="row">
            <h1 style="color:#376189">Admin Control Panel</h1>
            <h3><br>Display all records from the Product Database</h3>
            <br>

            <table border ="2" width = "100%">
                <tr>
                    <td>Product ID</td>
                    <td>Product Name</td>
                    <td>Brand</td>
                    <td>Product Category</td>
                    <td>Product Price</td>
                    <td>Product Description</td>
                    <td>Product Type</td>
                    <td>Image</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>

                <?php

                include "Part/config.php";

                $records = mysqli_query($conn, "select * from Product");

                while ($data = mysqli_fetch_array($records)) {
                ?>
                    <tr>
                        <td><?php echo $data['product_id']; ?></td>
                        <td><?php echo $data['product_name']; ?></td>
                        <td><?php echo $data['brand']; ?></td>
                        <td><?php echo $data['code']; ?></td>
                        <td><?php echo $data['product_category']; ?></td>
                        <td><?php echo $data['product_price']; ?></td>
                        <td><?php echo $data['product_description']; ?></td>
                        <td><?php echo $data['product_type']; ?></td>
                        <td><?php echo $data['image']; ?></td>
                        <td><a href="Part/product_edit.php?id=<?php echo $data['product_id']; ?>">Edit</a></td>
                        <td><a href="Part/product_delete.php?id=<?php echo $data['product_id']; ?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>

            <button class="btn"><a href="admin_page.php">Back</a> </button>

        </div>



    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>