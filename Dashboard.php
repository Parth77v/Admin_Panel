<!DOCTYPE html>
<html>
<head>
<style>
a{
  text-decoration: none;
}

body {
  height: 1000px;
  background: linear-gradient(to bottom, #00ccff 0%, #ffccff 100%); 
}

p {
  vertical-align: middle;
}

.button:hover {
  color: RED;
  border-top: 6px solid orange;
  border-bottom: 6px solid orange;
  border-left: 6px solid blue;
  border-right: 6px solid blue;
  background: linear-gradient(to bottom, #00ccff 0%, #ffccff 100%); 
}

.button {
  background-color: white; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  cursor: pointer;
  height:140px;
  width:140px;
  font-weight: bold;
  border: 6px double black;
  border-radius: 20px; 
}

.heading {
  color: rgba(288,0,133,0.911);
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}


</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#Project Managemen">Project Management</a></li>
  <li><a href="#User Management">User Management</a></li>
  <li><a href="#Order Management">Order Management</a></li>
</ul>
<hr background color= "black">
<center>
<div class="btn-group">
<h1 class="heading">My Dashboard</h1>
<a class="button" href="add_product.php"><p class="align">Add<br>Product</p></a>
<a class="button" href="update_product1.php"><p class="align">Update<br>Product</p></a>
<a class="button" href="delete_product.php"><p class="align">Delete<br>Product</p></a><br>
<a class="button" href="add_category.php"><p class="align">Add<br>Category</p></a>
<a class="button" href="update_category.php"><p class="align">Update<br>Category</p></a>
<a class="button" href="delete_category.php"><p class="align">Delete<br>Category</p></a><br>
<a class="button" href="user_management.php"><p class="align">User<br>Management</p></a>
<a class="button" href="view_orders.php"><p class="align">View<br>Orders</p></a>
<a class="button" href="billing_details.php"><p class="align">Billing<br>Details</p></a>
</center>
</div>
</body>
</html>