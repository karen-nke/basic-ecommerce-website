<?php

include 'Part/session_part.php'
?>

<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from testimonial where id = '$id'"); // delete query

if($del)
{
    echo"<script>alert('Succesfully Deleted Testimonial')</script>";
    mysqli_close($conn); // Close connection
    header("location:../customer_testimonial.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error Deleting Record"; // display error message if not delete
}
?>


