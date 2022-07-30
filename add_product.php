<!DOCTYPE html>
<html  >
<head>
  <style>
     body{
      /* background-image: url('1.jpg'); */
      /* background-repeat: no-repeat; */
    /* body, html {
  height: 100%;
}

.bg {
  /* The image used */
  /* background-image: url("img_girl.jpg"); */

  /* Full height */
  /* height: 100%; */

  /* Center and scale the image nicely */
  /* background-position: center; */
  /* background-repeat: no-repeat; */
  /* background-size: cover; */
  /* background-color: coral;
     } */
</style>
</head>
<body >
<CENTER>
<h2>ADD PRODUCT TABLE</h2>
<hr size="8px" color= "black">
<br>
<form method="post">

	<tr>
  <td><b><label for="pid">Product Id:</label></b></td>
  <td><input type="text" id="pid" name="Pid"><br><br></td>
</tr>

<tr>
  <td><b><label for="pname">Product Name:</label></b></td>
  <tr><input type="text" id="pname" name="Pname"><br><br></tD>
 </tr>

 <tr>
  <td><b><label for="price">Product Price:</label></b></td>
  <td><input type="text" id="price" name="Pprice"><br><br></td>
</tr>

<tr>
  <td><b><label for="pdescription">Product Description:</label></b></td>
  <input type="text" id="pdescription" name="Pdescription"><br><br>
  </tr>

  <tr>
  <td><b><label for="pcategory">Product Category:</label></b></td>
  <td><input type="text" id="pcategory" name="Pcategory"><br><br></td>
</tr>

<!-- <tr>
  <td><b><label for="pimage">Product Image:</label></b></td>
  <td><input type="text" id="pimage" name="Pimage"><br><br></td>
</tr> -->

<tr>
  <td><b><label for="pcompany">Product Company:</label></b></td>
  <td><input type="text" id="pcompany" name="Pcompany"></td><br><br>
  </tr>

  <td>
  <input type="submit" value="Add Product" name="ap">
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
$a = $_POST['Pid'];
$b = $_POST['Pname'];
$c = $_POST['Pprice'];
$d = $_POST['Pdescription'];
$e = $_POST['Pcategory'];
// $f = $_POST['Pimage'];
$g = $_POST['Pcompany'];

$query="insert into add_product(Pname,Pprice,Pdescription,Pcategory,Pcompany) values ('$b',$c,'$d','$e','$g')";

if (mysqli_query($connect,$query))
{
	echo "<center> Data Inserted Succesfully </center>"; 
}
else 
{
	echo "<center> Data Not Inserted </center>";
}
}
?>