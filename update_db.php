<?php
include("config.php");
$id=$_POST['id'];
$user=$_POST['name'];
$password=$_POST['pass'];
$contact=$_POST['con_no'];
$address=$_POST['add'];
$sql="update login set name='$user',password='$password',contact_no='$contact',address='$address' where id='$id'";
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