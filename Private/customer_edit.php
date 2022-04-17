<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Customer</title>
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
            <h3><br>Display all records from the User Database</h3>
            <br>

            <table  border ="2" width = "100%">
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Street</td>
                    <td>Zip Code</td>
                    <td>State</td>
                    <td>Country</td>
                    <td>Delete</td>
                </tr>

                <?php

                include "Part/config.php";

                $sql= "SELECT * FROM users WHERE user_role_id IS NULL";

                $records = mysqli_query($conn, $sql);

                while ($data = mysqli_fetch_array($records)) {
                ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Phone']; ?></td>
                        <td><?php echo $data['Address']; ?></td>
                        <td><?php echo $data['Street']; ?></td>
                        <td><?php echo $data['Zip']; ?></td>
                        <td><?php echo $data['State']; ?></td>
                        <td><?php echo $data['Country']; ?></td>
                        <td><a href="Part/customer_delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
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