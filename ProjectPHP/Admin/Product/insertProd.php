<?php
include('connect.php');

// Prepare an insert statement
$sql = "INSERT INTO `products` (p_name,price,dates,quantity,cate_id,img,status) VALUES (?, ?, ?,?,?,?,?)";
mysqli_set_charset($mysqli, 'UTF8');


if($stmt = $mysqli->prepare($sql)){
    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("sisiisi", $pr_name, $pr_price,$pr_date, $pr_quan,$pr_cate,$p_img,$pr_status);
    

    /* Set the parameters values and execute
    the statement to insert a row */
    if (isset($_FILES['fileUpload'])) {
        if ($_FILES['fileUpload']['error'] > 0)
            echo "Upload lỗi rồi!";
        else {
            move_uploaded_file($_FILES['fileUpload']['error'], 'uploads/' . $_FILES['fileUpload']['name']);

        }
    }

    $pr_name = $_POST['p_name'];
    $pr_price = $_POST['p_price'];
    $pr_date = $_POST['p_date'];
    $pr_quan = $_POST['p_quan'];
    $pr_cate = $_POST['p_cate'];
    $p_img = $_FILES['fileUpload']['name'];
    $pr_status = $_POST['p_status'];
    $stmt->execute();
    
     header('Location: addFormProd.php');

} else{
    echo "ERROR: Could not prepare query: $sql. " . $mysqli->error;
    echo '<a href="addFormProd.php">Trở về trang trước</a>';
}

// Close statement
$stmt->close();

// Close connection
$mysqli->close();
?>
