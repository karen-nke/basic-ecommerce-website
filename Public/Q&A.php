<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forum</title>
    <meta name="vieport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="private.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
</head>

<body>


    <?php include 'Part/_header.php' ?>
    <?php require_once 'Part/session.php' ?>


    <div class="page-container">

        <div class="row">
            <h2 class="title">Q&A</h2>
            <button class="btn"><a href="post_question.php">Post Your Own Question</a> </button>


        </div>
        <div class="question-container">

            <?php

            include 'Part/_product_config.php';

            $sql = "SELECT * FROM forum ORDER BY id ASC";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $questions = $row['questions'];
                $time = $row['time'];
                $reply = $row['replies'];

                echo '

    
    <h3>Question from ' . $name . '</h3>
    <p> Date posted: ' . $time . ' </p>
    <p>' . $questions . '</p>

    
    ';



                if ($row['replies'] === '') {

                    echo 'No replies yet';
                } else {
                    echo '

        <p><b>Admin Replies</b></p>
        <p>' . $reply . '</p>

         <hr>

    


        
        ';
                }
            }








            ?>
        </div>








    </div>



    <?php include 'Part/_footer.php' ?>

</body>

</html>