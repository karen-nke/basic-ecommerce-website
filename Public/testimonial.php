<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shipping Policy</title>
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


    <div class="testimonial-container">
                <h2 class="title"><br>Testimonial From Facebook</h2>

        <!----------Slide--------------->
        <div class="container">

<div class="slideshow-container">

        <div class="mySlides fade"><br>
                <div class="numbertext">1 / 7</div>
                <img src="Image/Review/Review.png" style="width:100%">

        </div>

        <div class="mySlides fade"><br>
                <div class="numbertext">2 / 7</div>
                <img src="Image/Review/Review1.png" style="width:100%">

        </div>

        <div class="mySlides fade"><br>
                <div class="numbertext">3 / 7</div>
                <img src="Image/Review/Review2.png" style="width:100%">

        </div>  
        
        <div class="mySlides fade"><br>
                <div class="numbertext">4 / 7</div>
                <img src="Image/Review/Review3.png" style="width:100%">

        </div>
        <div class="mySlides fade"><br>
                <div class="numbertext">5 / 7</div>
                <img src="Image/Review/Review4.png" style="width:100%">

        </div>

        <div class="mySlides fade"><br>
                <div class="numbertext">6 / 7</div>
                <img src="Image/Review/Review5.png" style="width:100%">

        </div>
        <div class="mySlides fade"><br>
                <div class="numbertext">7 / 7</div>
                <img src="Image/Review/Review6.png" style="width:100%">

        </div>




</div>


<div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
</div>

<script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                        slideIndex = 1
                }
                for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 8000);
        }
</script>


</div>

                <div class="row">
                <h2 class="title"><br>Testimonial From Website</h2>

                        <?php
                        $sql = "SELECT * FROM `testimonial`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {

                                $name = $row['customer_name'];
                                $item = $row['item_purchase'];
                                $com = $row['comment'];


                                echo '
           
               
                        
                        <div class="column">
                                <img src="https://source.unsplash.com/100x100/?profile" class="img">
        
    
                                <br>
                                <h4><b>Customer Name: ' . $name . ' </b></h4>
                                <p>Item Purchase : ' . $item . '</p>
                                <p> <i> ' . $com . '</i> </p>

           


                                
                        </div>
                        
                      
            

     
            
            ';
                        }


                        ?>
                        <button class="btn" style="color:white"><a href="post_review.php">Post A Review</a> </button>



                </div>

                

        </div>


    


    <?php include 'Part/_footer.php' ?>

</body>

</html>