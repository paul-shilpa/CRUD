<?php
include("config.php");
$user=$_POST['name'];
$password=$_POST['pass'];
$contact=$_POST['con_no'];
$address=$_POST['add'];
$sql="insert into login values(null,'$user','$password','$contact','$address')";
if($conn->connect_error)
{
    die($conn->connect_error);
}
else{
    if($conn->query($sql))
    {
        header('location:welcome.php');
    }
    else
    {
        header('location:update.php');
    }

}
?>