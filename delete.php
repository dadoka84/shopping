<?php

include 'controller.php'; // Using database connection file here

$personId = $_GET['personId']; // get id through query string
$cartId = $_GET['cartId']; // get id through query string


$del = mysqli_query($db,"delete from tblselected where id = '$cartId'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:proizvod.php"); // redirects to product page
    exit;	
}
else
{
    echo "Greska prilikom brisanja"; // display error message if not delete
}
?>