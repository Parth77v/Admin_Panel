<!DOCTYPE html>
<html>
<body>
<CENTER>
<h2>ADD CATEGORY TABLE</h2>
<hr size="8px" background color= "black">
<br>
<form method="post">

	<tr>
  <td><b><label for="cid">Category Id:</label></b></td>
  <td><input type="text" id="cid" name="cid"><br><br></td>
</tr>

<tr>
  <td><b><label for="cname">Category Name:</label></b></td>
  <tr><input type="text" id="cname" name="cname"><br><br></tD>
 </tr>


  <input type="submit" value="Add Category" name="ap">
</td>
  </CENTER>
</form> 
</body>
</html>
<?php
if(isset($_POST['ap']))
{
$connect=mysqli_connect('localhost','root','','admin');
//admin=database name
if(mysqli_connect_errno())
{
echo "Cannot Connect to Database ".mysqli_connect_error();
}
else
$a = $_POST['cid'];
$b = $_POST['cname'];


$query="insert into add_category(cname) values ('$b')";

if (mysqli_query($connect,$query))
{
  echo "<center> Category Added Succesfully </center>"; 
}
else 
{
  echo "<center> Category Not Added </center>";
}
}
?>