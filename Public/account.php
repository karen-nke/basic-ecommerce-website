<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'Part/_header.php' ?>
    <?php require_once 'Part/session.php' ?>

    <div class="container">
        <div class="row my-10 ml-3">
            <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1><br>"; ?>
     
            <table class ="acc-tbl">
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Street</td>
                    <td>Zip Code</td>
                    <td>State</td>
                    <td>Country</td>

                </tr>

                <?php

                include "Login/config.php";

                $id = $_SESSION['username'];

                $records = mysqli_query($conn, "select * from users where username = '$id'");

                while ($data = mysqli_fetch_array($records)) {
                echo "<h3>Email: " . $data['email'] . "</h3><br>"; 
                ?>

                <h3>Account Details</h3>
                    <tr>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Phone']; ?></td>
                        <td><?php echo $data['Address']; ?></td>
                        <td><?php echo $data['Street']; ?></td>
                        <td><?php echo $data['Zip']; ?></td>
                        <td><?php echo $data['State']; ?></td>
                        <td><?php echo $data['Country']; ?></td>



                    </tr>
                <?php
                }
                ?>
            </table>




            <button class="btn"><a href="account_details.php">Edit</a> </button>



        </div>


    </div>




    <?php include 'Part/_footer.php' ?>

</html>