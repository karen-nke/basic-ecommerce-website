<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Funko</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="../private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>

<body>


    <?php include '_header2.php' ?>
    <?php include 'Part/session_part.php' ?>

    <?php

    include "config.php";

    $id = $_GET['id']; // get id through query string

    $qry = mysqli_query($conn, "select * from forum where id='$id'"); // select query


    if (isset($_POST['update'])) // when click on Update button
    {
        $question = $_POST['questions'];

        $reply = $_POST['replies'];



        $edit = mysqli_query($conn, "update forum set replies='$reply' where id='$id'");

        if ($edit) {
            mysqli_close($conn); // Close connection
            echo "<script>alert('Successful')</script>";
            header("location:../question.php"); // redirects to all records page
            exit;
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
            <form method="POST" class="login-email">
                <p class="login-text" style='font-size:2rem; font-weight:800;'>Reply</p>
                <?php echo $data['questions'] ?>
                <div class="input-group">
                    <input type="text" name="replies" value="<?php echo $data['replies'] ?>" placeholder="reply">
                </div>
                <div class="input-group">

                    <button type="submit" class="btn" name="update">Update</button>
                </div>

            </form>

            <button class="btn"><a href="../funko_edit.php">Back</a> </button>




        </div>





    </div>

    

  



    <?php include '_footer.php' ?>

</body>

</html>