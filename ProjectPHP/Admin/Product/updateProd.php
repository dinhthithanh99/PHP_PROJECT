<?php
include('connect.php');

$id          = $_POST['p_id'];
$ten          = $_POST['p_name'];
$gia          = $_POST['p_price'];
$date          = $_POST['p_date'];
$sl         = $_POST['p_quan'];
$cate = $_POST['p_cate'];
$status     = $_POST['p_status'];
$img = $_POST["link"];
   if (empty($_FILES['fileUpload']['name'])) {
   	$p_img = $img;
   }else {
   	$p_img = $_FILES['fileUpload']['name'];
}


//Code xử lý, update dữ liệu vào table dựa theo điều kiện WHERE tại id = 1
$sql = "UPDATE products SET p_name='$ten', price='$gia',dates = '$date', quantity='$sl',cate_id = '$cate',img = '$p_img',status='$status' WHERE id=$id";

if ($mysqli->query($sql) === TRUE) {
    //Nếu kết quả kết nối thành công, trở về trang view.
    header('Location: listProd.php');
} else {
    //Nếu kết quả kết nối không được thì trở về update.php đồng thời gán giá trị error=1, dựa theo giá trị này trang update.php có thể thông báo lỗi cần thiết.
    header('Location: editFormProd.php?error=1');
}

// Close connection
$mysqli->close();
?>
