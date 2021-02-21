<?php
include("config.php");
$id=$_GET['id'];
$sql="delete from login where id='$id'";
if($conn->connect_error)
{
    die($conn->connect_error);
}
else{
    if($conn->query($sql))
    {
        header('location:welcome.php');
    }
    else{
        header('location:welcome.php');
    }
}
?>