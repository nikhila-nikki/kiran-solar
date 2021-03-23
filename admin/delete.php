<?php
$db = mysqli_connect("localhost","root","","kiran-solar");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_GET['no']; // get id through query string

$del = mysqli_query($db,"delete from agent where no = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:agent.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>