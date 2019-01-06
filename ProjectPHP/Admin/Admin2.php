<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="/projectPHP/CSS/Admin2.css">
</head>
<body>
	<div class="container-fluid">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title" style="text-align: center;"><marquee>Wellcome to Admin</marquee></h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<div class="vertical-menu">
							<a href="#" class="active">Menu</a>
							<div class="group">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý người dùng <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="./listUser.php">List User </a></li>
									<li><a href="#">Add User </a></li>
								</ul>
							</div>
							<div class="group">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý thể loại <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="./Category/listCate.php">List Category</a></li>
									<li><a href="./Category/addFormCate.php">Add Category</a></li>
								</ul>
							</div>
							<div class="group">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Quản lý sản phẩm <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="./Product/listProd.php">List Products</a></li>
									<li><a href="./Product/addFormProd.php">Add Products</a></li>
								</ul>
							</div>
							<a href="#">Quản lý đơn hàng</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>