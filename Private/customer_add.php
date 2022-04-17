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



<?php

include "Part/config.php";


if (isset($_POST['update']))
{
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $address = $_POST['Address'];
    $street = $_POST['Street'];
    $zip = $_POST['Zip'];
    $state = $_POST['State'];
    $country = $_POST['Country'];



    $sql = "INSERT INTO users (username, email, password, Name, Phone, Address, Street, Zip, State, Country)
					VALUES ('$username','$email', '$password','$name','$phone', '$address','$street', '$zip', '$state', '$country')";
        $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Succesfull')</script>";   
        $username = "";
        $email ="";
        $password ="";
        $name = "";
        $phone ="";
        $address ="";
        $street = "";
        $zip = "";
        $state = "";
        $country = "";
        
      
    
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
        <form method="POST" class="login-email"">
        <p class="login-text" style='font-size:2rem; font-weight:800;'>Add Customer</p>
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

                <button type="submit" class="btn" name="update">Post</button>
            </div>

        </form>

        <button class="btn"><a href="customer_edit.php">Back</a> </button>




    </div>





</div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>