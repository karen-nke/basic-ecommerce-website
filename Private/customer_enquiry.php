<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Enquiry</title>
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
            <h3><br>Display all records of Customers' Enquiry</h3>
            <br>

            <table  border ="2" width = "100%">
             

                <div class="container">

                <tr>

                <td>Enquiry ID</td>
                    <td>Customer Name</td>
                    <td>Customer Email</td>
                    <td>Customer Contact</td>
                    <td>Message</td>
                    <td>Reply</td>
                    <td>Delete</td>
                </tr>

                </div>
                    

                <?php

                include "Part/config.php";

                $records = mysqli_query($conn, "select * from contact_form");

                while ($data = mysqli_fetch_array($records)) {
                ?>
                <div class="container">

                <tr>
                        <td><?php echo $data['enquiry_id']; ?></td>
                        <td><?php echo $data['customer_name']; ?></td>
                        <td><?php echo $data['customer_email']; ?></td>
                        <td><?php echo $data['customer_phone']; ?></td>
                        <td><?php echo $data['message']; ?></td>
                        <td><a href="mailto:<?php echo $data['customer_email']?>">Reply</a></td>
                        <td><a href="Part/enquiry_delete.php?id=<?php echo $data['enquiry_id']; ?>">Delete</a></td>
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