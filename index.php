<?php
	error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penjualan</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style_tambah_data.css">
</head>
<body>
	<!-- container -->
		<div class="container">
			
			<!-- nav -->
				<div class="nav">
					<ul>
						<li><a href="">Home</a></li>
					</ul>
				</div>
			<!-- end nav -->
			<!-- header -->
				<div class="header">
					<h2>Aplikasi Penjualan</h2>
				</div>
			<!-- end header -->
			
			<?php
				if($_GET['module']=="tambah_barang"){
					include "module/tambah_data.php";
				}else if($_GET['module']=="edit_barang"){
					include "module/edit_data.php";
				}else{
					include "module/tampil_data.php";
				}
			?>
		</div>
	<!-- end container -->
	
</body>
</html>