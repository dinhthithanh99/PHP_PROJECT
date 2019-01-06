<?php 
require_once('connect.php'); 
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql     = "DELETE FROM products WHERE id='$id'";

	if ($mysqli->query($sql) === TRUE) {
    //Nếu kết quả kết nối thành công, trở về trang view.
		header('Location: listProd.php');
	}}

// Close connection
	$mysqli->close();
	?>
