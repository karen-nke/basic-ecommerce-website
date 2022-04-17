<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Questions</title>
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
        $name = $_POST['name'];
        $question = $_POST['questions'];
        $reply = $_POST['replies'];
        


        $sql = "INSERT INTO forum (name, questions, replies)
					VALUES ('$name','$question','$reply')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Posted')</script>";
            $name = "";
            $questions ="";
            $reply ="";

  
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }
    ?>






    <div class="page-container">

        <div class="row">
            <h1 style="color:#376189">Post a Question</h1>

        </div>

        <div class="container">
            <form action="" method="POST" class="login-email">
               
                <div class="input-group">
                    <input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="input-group">
                    <input type="text" placeholder="Questions" name="questions" value="<?php echo $question; ?>" required>
                </div>
                
                <div class="input-group">
                    <button name="submit" class="btn">Post</button>
                </div>

            </form>

            <button class="btn"><a href="Q&A.php">Back</a> </button>




        </div>





    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>