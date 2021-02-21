<html>
<head>
<title>
CRUD
</title>
</head>
<body>
<?php
include("config.php");
$sql="select * from login";
if($conn->connect_error)
{
    die($conn->connect_error);
}
else
{
    $res=$conn->query($sql);
    ?>
    <h1> employee table </h1>
    <table>
    <tr>
    <th>Name </th>
    <th>Contact No </th>
    <th>Addsress </th>
    </tr>
    <?php
    if($res->num_rows>0)
    {
        while($row=$res->fetch_assoc())
        {
?>
<tr>
<td> <?php echo $row['name'];?></td>
<td> <?php echo $row['contact_no'];?></td>
<td> <?php echo $row['address'];?></td>
<td> <a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
<td> <a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
</tr>

<?php
        }
    }
    ?>
    </table>
    <form action ="create.php" method="post">
        

        
        Name:<input type="text" name="name">
        <br>
        Password:<input type="text" name="pass">
        <br>
        Contact No:<input type="text" name="con_no">
        <br>
        Adress:<input type="text" name="add">
        <br>
        <input type="submit" name="submit" value="insert">
        </form>
        
    <?php
}
?>
</body>
</html>