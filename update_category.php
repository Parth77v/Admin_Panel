<!DOCTYPE html>
<html>
<body>
<CENTER>
<h2>UPDATE CATEGORY TABLE</h2>
<hr size="8px" background color= "black">
<br>
<form method="post">

  
  <b><label for="cid">Category Id:</label></b></td>
  <input type="text" id="cid" name="cid"><br><br></td>

  <b><label for="cname">Category Name:</label></b></td>
  <input type="text" id="cname" name="cname"><br><br></tD>
  
  <input type="submit" value="Update Category" name="apc">

  </CENTER>
</table>
</form> 
</body>
</html>
<?php
if(isset($_POST['apc']))
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
// $c = $_POST['Pprice'];
// $d = $_POST['Pdescription'];
// $e = $_POST['Pcategory'];
// $f = $_POST['Pimage'];
// $g = $_POST['Pcompany'];
$q="update add_category set cname='$b' where cid='$a'";
      if(mysqli_query($connect,$q))
      {
      	echo "Category Updated Succesfully "; 
      }
      else 
      {
      	echo " Category Not Updated ";
      }
}
?>