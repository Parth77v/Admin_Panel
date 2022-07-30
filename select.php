<?php
	$connect=mysqli_connect("localhost","root","","admin");
	if(mysqli_connect_errno())
	{
		echo "cannot connect database".mysqli_connect_errno();
	}	
		$pd =$_GET['p'];
		echo "$pd";
		$se = mysqli_query($connect, "select * from add_product where Pid='$pd'");
		while ($row = mysqli_fetch_assoc($se)){
?>


<html>
<head><br>

<title>UPDATE PRODUCT</title>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet">
</head>
<center>
<body>
<form method='post' >
<table border="2px" height="50%" width="40%" align="center">
<!--bordercolor="green"--> 
<tr>

<td>
<table height="97%" width="98%" align="center" bgcolor="white" cellspacing="4" cellpadding="5" border="2" bordercolor="purple">
<tr>
<th colspan="2" align="center" >
<font size="5" color="purple"><b>UPDATE  PRODUCT</b></font>
</th>
</tr>
<tr>
	<th> Product id :</th>
	<th><input type="text" name="Pid" value="<?php echo $row['Pid'] ?>"></th>
</tr>
<tr>
	<th>Enter New Product Name :</th>
	<th><input type="text" name="Pname" value="<?php echo $row['Pname'] ?>"></th>
</tr>
<tr>

<th>Enter New Price :</th>
<th><input type="text" name="Pprice" value="<?php echo $row['Pprice'] ?>"></th>

</tr>
<tr>

<th>Enter New descreption:</th>
<th><input type="text" name="Pdescription" value="<?php echo $row['Pdescription'] ?>"></th>

</tr>
<tr>

<th>Enter New  Product Category:</th>
<th><input type="text" name="Pcategory" value="<?php echo $row['Pcategory'] ?>"></th>

</tr>

<tr>

<th>Enter new Product company :</th>
<th><input type="text" name="Pcompany" value="<?php echo $row['Pcompany'] ?>"></th>

</tr>

<tr>

<!--<th> </th>-->
<th colspan="2"><input type="submit" value="Update" name="u"  size="10pxl "></th>

</tr>
</table>
</tr>
</td>
</table>

</center>
</form>
<center>

</body>
</center>
</html>
<?php
}
	if(isset($_POST['u']))
{
			$pid=$_POST["Pid"];
			$name=$_POST["Pname"];
			$price=$_POST["Pprice"];
			$desc=$_POST["Pdescription"];
			$category=$_POST["Pcategory"];
			$compny=$_POST["Pcompany"];
			
			$q="update add_product set 	Pname='$name',Pprice='$price',Pdescription='$desc',Pcategory='$category',Pcompany='$compny' where Pid='$pd'";
			
			if(mysqli_query($connect,$q))
		    {
				echo "<center><font color='green'>Data Updated Sucessfully</font></center>";
		    }
		    else
		    {
				echo "<center><font color='red'>Data Not Updated Sucessfully</font></center>";
		    }		
		}
?>