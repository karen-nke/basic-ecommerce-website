<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
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
            <h3><br>Please select a category or function </h3>

        </div>

        <div class="row">
            <h3>Product</h3>
            <button class="btn"><a href="product_add.php">Add Product</a> </button>
            <button class="btn"><a href="product_edit.php">Edit or Delete Product</a> </button>

        </div>

    
        <hr>

        <div class="row">
            <h3>Customers' Account</h3>
            <button class="btn"><a href="customer_add.php">Add Customer</a> </button>
            <button class="btn"><a href="customer_edit.php">Edit or Delete Customer</a> </button>

        </div>

        <hr>

        <div class="row">
            <h3>Forum Question</h3>
            <button class="btn"><a href="question.php">Check Questions</a> </button>

        </div>

        <hr>

        <div class="row">
            <h3>Check Customer Enquiry</h3>
            <button class="btn"><a href="customer_enquiry.php">Check Enquiry</a> </button>

        </div>

        <hr>

        <div class="row">
            <h3>Customer's Testimonial</h3>
            <button class="btn"><a href="customer_testimonial.php">Check Testimonial</a> </button>

        </div>

        <hr>



    </div>


    <?php include 'Part/_footer.php' ?>

</body>

</html>