
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Barang</title>
	<link rel="stylesheet" href="css/style_tambah_data.css">
</head>
<body>
	<!-- container -->
		<div class="container">
			
			<!-- nav -->
				<div class="nav">
					<ul>
						<li><a href="index.php">Home</a></li>
					</ul>
				</div>
			<!-- end nav -->
			<!-- header -->
				<div class="header">
					<h2>Aplikasi Penjualan</h2>
				</div>
			<!-- end header -->
			
			<!-- table -->
				<div class="table">
					
					<div class="add">
						<form action="">
							<button style="width: 150px;padding: 5px;">Daftar Barang</button>		
						</form>
					</div>

					<div class="input_data">
						<div class="header_input_data">
							<h2>Tambah Barang</h2>
						</div>

						 <form action="">
						 	<table>
						 		<tr>
						 			<li>
						 				<label for="kode_barang">Kode Barang <span>*</span></label>
						 			</li>
						 			<li>
						 				<input type="text" name="kode_barang" id="kode_barang">
						 			</li>
						 		</tr>

						 		<tr>
						 			<li>
						 				<label for="nama_barang">Nama Barang <span>*</span></label>
						 			</li>
						 			<li>
						 				<input type="text" name="nama_barang" id="nama_barang">
						 			</li>
						 		</tr>

						 		<tr>
						 			<li>
						 				<label for="harga">Harga <span>*</span></label>
						 			</li>
						 			<li>
						 				<input type="text" name="harga" id="harga">
						 			</li>
						 		</tr>

						 		<tr>
						 			<li>
						 				<label for="persediaan">Persediaan <span>*</span></label>
						 			</li>
						 			<li>
						 				<input type="text" name="persediaan" id="persediaan">
						 			</li>
						 		</tr>

						 		<tr>
						 			<li>
						 				
						 			</li>
						 			<li>
						 				<button>Submit</button>
						 			</li>
						 		</tr>
						 	</table>
						 </form>
					</div>
							

				</div>
			<!-- end table -->
		</div>
	<!-- end container -->
	
</body>
</html>