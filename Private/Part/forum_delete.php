<?php include 'Part/session_part.php' ?>
<?php

include "config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"delete from forum where id = '$id'"); // delete query

if($del)
{
    echo"<script>alert('Succesfully Deleted Product')</script>";
    mysqli_close($conn); // Close connection
    header("location:../question.php"); // redirects to all records page
    exit;	
}
else
{
    echo "<script>alert('Error Deleting Record')</script>"; // display error message if not delete
}
?>


