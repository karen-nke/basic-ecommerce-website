<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Details</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>


    <?php include 'Part/_header.php' ?>


    <?php

    include "Login/config.php";

    $id = $_SESSION['username'];

    $records = mysqli_query($conn, "select * from users where username = '$id'");

    $data = mysqli_fetch_array($records); 

 

    if (isset($_POST['update'])) // when click on Update button
    {
        $name = $_POST['Name'];
        $phone = $_POST['Phone'];
        $address = $_POST['Address'];
        $street = $_POST['Street'];
        $zip = $_POST['Zip'];
        $state = $_POST['State'];
        $country = $_POST['Country'];



        $edit = mysqli_query($conn, "update users set Name='$name', Phone='$phone',Address='$address',Street='$street', Zip='$zip', State='$state', Country='$country' where username='$id'");

        if ($edit) {
            echo "<script>alert('Succesfull')</script>";
            header ('Location: account.php');
        
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }
    ?>


    <div class="page-container">

        <div class="row">
        <?php echo "<h1>" . $_SESSION['username'] . " Details</h1><br>"; ?>

        </div>

        <div class="container">
            <form method="POST" class="login-email">
                <div class="input-group">
                    <input type="text" name="Name" value="<?php echo $data['Name'] ?>" placeholder="Name">
                </div>
                <div class="input-group">
                    <input type="text" name="Phone" value="<?php echo $data['Phone'] ?>" placeholder="Phone">
                </div>
                <div class="input-group">
                    <input type="text" name="Address" value="<?php echo $data['Address'] ?>" placeholder="Address">
                </div>
                <div class="input-group">
                    <input type="text" name="Street" value="<?php echo $data['Street'] ?>" placeholder="Street">
                </div>
                <div class="input-group">
                    <input type="text" name="Zip" value="<?php echo $data['Zip'] ?>" placeholder=" Zip Code">
                </div>
                <div class="input-group">
                    <input type="text" name="State" value="<?php echo $data['State'] ?>" placeholder="State">
                </div> 
                <div class="input-group">
                    <input type="text" name="Country" value="<?php echo $data['Country'] ?>" placeholder="Country">
                </div>
                <div class="input-group">

                    <button type="submit" class="btn" name="update">Update</button>
                </div>

            </form>

            <button class="btn"><a href="../funko_edit.php">Back</a> </button>




        </div>





    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>