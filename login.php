<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$customerId = $_POST['customerId'];
$name = $_POST['name'];
$contactNo = $_POST['contactNo'];
$city = $_POST['city'];

// database insert SQL code
$sql = "INSERT INTO `login` (`cust_id
`, `cust_name`, `contactno`, `city`) VALUES ( '$customerId', '$name', '$contactNo', '$city')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>