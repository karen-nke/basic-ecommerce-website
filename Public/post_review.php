<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Review</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>


    <?php include 'Part/_header.php' ?>
    <?php require_once 'Part/session.php' ?>


    <?php

    include 'Part/_product_config.php';


    if (isset($_POST['submit'])) {
        $name = $_POST['customer_name'];
        $item = $_POST['item_purchase'];
        $com = $_POST['comment'];
        


        $sql = "INSERT INTO testimonial (customer_name, item_purchase, comment)
					VALUES ('$name','$item','$com')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Posted')</script>";
            $name = "";
            $item ="";
            $com ="";

  
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }
    ?>






    <div class="page-container">

        <div class="row">
            <h1 style="color:#376189">Post a Review</h1>

        </div>

        <div class="container">
            <form action="" method="POST" class="login-email">
               
                <div class="input-group">
                    <input type="text" placeholder="Name" name="customer_name" value="<?php echo $name; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Item Purchased" name="item_purchase" value="<?php echo $item; ?>" required>
                </div>

                <div class="input-group">
                    <input type="text" placeholder="Comment" name="comment" value="<?php echo $com; ?>" required>
                </div>
                
                <div class="input-group">
                    <button name="submit" class="btn">Post</button>
                </div>

            </form>

            <button class="btn"><a href="testimonial.php">Back</a> </button>




        </div>





    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>