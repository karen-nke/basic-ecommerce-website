<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Testimonial</title>
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
            <h3><br>Display all records of Customers' Testimonial</h3>
            <br>

            <table  border ="2" width = "100%">
             

                <div class="container">

                <tr>

                    <td>Testimonial ID</td>
                    <td>Customer Name</td>
                    <td>Item Purchase</td>
                    <td>Comment</td>
                    <td>Delete</td>
                </tr>

                </div>
                    

                <?php

                include "Part/config.php";

                $records = mysqli_query($conn, "select * from testimonial");

                while ($data = mysqli_fetch_array($records)) {
                ?>
                <div class="container">

                <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['customer_name']; ?></td>
                        <td><?php echo $data['item_purchase']; ?></td>
                        <td><?php echo $data['comment']; ?></td>
                        <td><a href="Part/testimonial_delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
                    </tr>

                </div>
                    
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