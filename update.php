<html>
<head>
<title>
CRUD
</title>
</head>
<body>
<?php
include("config.php");
$id=$_GET['id'];
$sql="select * from login where id='$id'";
if($conn->connect_error)
{
    die($conn->connect_error);
}
else{
    if($res=$conn->query($sql))
    {
        $row=$res->fetch_assoc();
        ?>
        <form action ="update_db.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">

        
        Name:<input type="text" name="name" value="<?php echo $row['name'];?>">
        <br>
        Password:<input type="text" name="pass" value="<?php echo $row['password'];?>">
        <br>
        Contact No:<input type="text" name="con_no" value="<?php echo $row['contact_no'];?>">
        <br>
        Adress:<input type="text" name="add" value="<?php echo $row['address'];?>">
        <br>
        <input type="submit" name="submit" value="update">
        </form>
        <?php
    }
    else{
        header('location:update.php');
    }
}
?>
</body>
</html>