<html >
<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>User Management</title>
	<style>
				.parth{
					font-color:white;
				}
				a{
					text-decoration:none;
					color:black;
				}
				/* body {
					  background:url(parth.jpg);
					  background-repeat:no-repeat;
					  background-size:100% 100%;
					  align-top:50;
					 }	 */
	</style>
</head>

	<br>
<center>
<form method="post">
<div class="parth">
<h2><b>USER MANAGEMENT</b></h2>
<hr size="8px" color= "black"></hr>
    <!-- Button trigger modal 
	<button type="button" class="btn btn-primary btn-lg btn-success mx-auto parth" data-bs-toggle="modal" data-bs-target="#exampleModal">
       Insert
    </button> 

     Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
					<div class="input-group mb-3 flex-nowrap">
				  <span class="input-group-text" id="addon-wrapping">@</span>
				  <input type="text" name="user_name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
				</div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password"  name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                </div> -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="insert">Insert</button>
                </div> -->
            </div>
        </div>
    </div>
	&nbsp;           
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script> 
		
	</center>
</body>	

<?php
	$connect=mysqli_connect("localhost","root","","admin");
	if(mysqli_connect_errno())
	{
		echo "cannot connect database".mysqli_connect_errno();
	}
	else
	{
		if(isset($_POST['insert']))
		{
			$unm=$_POST["user_name"];
			$ml=$_POST["email"];
			$pass=$_POST["password"];
			
			$q=("insert into login (user_name,email,password) values('$unm','$ml',$pass)");
			
		   if(mysqli_query($connect,$q))
		   {
				echo "<center><font color='green'>Data Inserted Sucessfully</font></center>";
				
		   }
		  else
		  {
				echo "<center><font color='red'>Data Not Inserted Sucessfully</font></center>";
		  }	
		} 
				if(isset($_REQUEST['cid']))
				{
					$del = $_REQUEST['cid'];
					$delete="delete from login where user_id='$del'";
					mysqli_query($connect,$delete);
				}	
				$qu ="select * from login";
				$result=mysqli_query($connect,$qu);	
				//echo "<br><br><br><br><br><br><br>";
				echo "<div class='row mt-5'>";
				echo "<table align='center'  border='3'  class=' p-5 col-8' >
						<thead>
					<tr class='text-center'>
							<th scope='col'>user_id</th>
							<th scope='col'> user_name</th>
							<th scope='col'>email</th>
							<th scope='col'>password</th>
							<th scope='col'>Delete</th>		
					</tr>
					</thead>";
				while($row=mysqli_fetch_object($result))
				{	
			?>
			 <tbody>
					<tr>
							<td align='center'><?= $row->user_id ?></td>
							<td align='center'><?= $row->user_name ?></td>
							<td align='center'><?= $row->email?></td>
							<td align='center'><?= $row->password?></td>
							<!--<td align='center'><a href="<?php echo 'user_management.php?cid='.$row->user_id; ?>">Delete</a></td>-->
							<td align='center'>
							  <button type="submit" class="btn btn-danger parth" name="inserts"><a href="<?php echo 'user_management.php?cid='.$row->user_id; ?>">Delete</a></button>
							</td>
					</tr>
					</tbody>
					<?php
				}	
				echo "</table >
				</div>";
	}
?>