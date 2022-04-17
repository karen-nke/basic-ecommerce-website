<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>


    <?php include 'Part/_header.php' ?>
    <?php require_once 'Part/session.php' ?>
    <?php require_once 'Part/_product_config.php' ?>

    <?php

    if (isset($_POST['submit'])) {
        $name = $_POST['customer_name'];
        $email = $_POST['customer_email'];
        $phone = $_POST['customer_phone'];
        $msg = $_POST['message'];



        $sql = "INSERT INTO contact_form (customer_name, customer_email, customer_phone, message)
					VALUES ('$name', '$email', '$phone', '$msg')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Succesfully Sent')</script>";
            $name = "";
            $email = "";
            $phone = "";
            $msg = "";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }


    ?>


    <div class="page-container">

        <div class="row">
            <h1 style="color:#376189">Contact Us</h1>
            <p>If you are wondering about our products, orders, website or service. Please do not hesitate to contact us through the channel below or filled in the form. You could also check out our <a href="faq.php">FAQs</a> that might answer your questions. </p>

            <div class="row-2">
                <ul>
                    <li>Email: <a href="mailto:popholic2020@gmail.com">popholic2020@gmail.com</a></li>
                    <li>Phone Number: <a href="tel:+601156463584">+601156463584</a></li>
                    <li><a href="">Whatsapp</a></li>
                    <li><a href="https://www.instagram.com/popholic.collectibles">Instagram</a></li>
                    <li><a href="https://www.facebook.com/popholic.collectibles">Facebook</a></li>
                </ul>

            </div>
        </div>

        <div class="container">


            <form action="" method="POST" class="login-email">
                <p class="login-text" style='font-size:2rem; font-weight:800;'>Leave us a message</p>
                <div class="input-group">
                    <input type="text" placeholder="Full Name" name="customer_name" value="<?php echo $name; ?>" required>
                </div>

                <div class="input-group">
                    <input type="email" placeholder="Email Address" name="customer_email" value="<?php echo $email; ?>" required>
                </div>

                <div class="input-group">
                    <input type="text" placeholder="Phone Number" name="customer_phone" value="<?php echo $phone; ?>" required>
                </div>

                <div class="input-group">
                    <input type="text" placeholder="Subject" name="message" value="<?php echo $msg; ?>" required>
                </div>


                <div class="input-group">
                    <button name="submit" class="btn">Send</button>

                </div>
            </form>   








        </div>




    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>