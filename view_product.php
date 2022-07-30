 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css"  rel="stylesheet">
	<title> Select </title>
 </head>
  
<center><h1><u> -: View product :- </u></h1> </center>
 </html>
<?php
	
			$connect=mysqli_connect("localhost","root","","admin");
			if(mysqli_connect_errno())
			{
				echo "Cannot connect  Database".mysqli_connect_error();
			} 
			else
			{
				/*if(isset($_REQUEST['pid']))
				{
					$del = $_REQUEST['pid'];
					$delete="delete from add_product where P_id='$del'";
					mysqli_query($connect,$delete);
				}*/
				
				$q ="select * from add_product";
				$result=mysqli_query($connect,$q);	
				//echo "<br><br><br><br><br><br><br>";
				echo "<table align='center'  border='3' width='40%' height='50%' cellpadding='15' cellspacing='7' class='table'>
				
					<tr>
							<th>P_id</th>
							<th>P_name</th>
							<th>P_price</th>
							<th>P_description</th>
							<th>P_category</th>
							<th>P_image</th>
							<th>P_company</th>
							
					</tr>";
				while($row=mysqli_fetch_object($result))
				{	
			?>
					<tr>
							<td align='center'><?= $row->P_id ?></td>
							<td align='center'><?= $row->P_name?></td>
							<td align='center'><?= $row->P_price?></td>
							<td align='center'><?= $row->P_description?></td>
							<td align='center'><?= $row->P_category?></td>
							 <td align='center'><img src='./move/<?= $row->P_image?>' alt='error' width='100px' height='150px'></td>  
							<td align='center'><?=$row->P_company?></td>
							
					</tr>
					<?php
				}	
				echo "</table >";
			}
?>
