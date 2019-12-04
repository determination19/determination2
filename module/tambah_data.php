<?php
	include "koneksi.php";
	include "function.php";

// SIMPAN DATA
	if (isset($_POST['tambah_data'])) {
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$persediaan = $_POST['persediaan'];

		input($kode_barang,$nama_barang,$harga,$persediaan,$mysqli);
?>
<script type="text/javascript">
	document.location = "http://localhost/determination2/home";
</script>
<?php
	}
// BATAS SIMPAN DATA

// HAPUS DATA
	if (isset($_POST['hapus_data'])) {
		$id = $_POST['id'];

		delete($id,$mysqli);
?>
<script type="text/javascript">
	document.location = "http://localhost/determination2/home";
</script>
<?php
	}
// BATAS HAPUS DATA

// UPDATE DATA
	if (isset($_POST['update_data'])) {
		$id = $_POST['id_barang'];
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$persediaan = $_POST['persediaan'];

		update($id,$nama_barang,$harga,$persediaan,$mysqli);
?>
<script type="text/javascript">
	document.location = "http://localhost/determination2/home";
</script>
<?php
	}
// BATAS UPDATE DATA
?>

<!-- table -->
		<div class="table">			
			<div class="add">
				<form action="home" method="POST">
					<button type="submit" style="width: 150px;padding: 5px;">Daftar Barang</button>		
				</form>
			</div>

			<div class="input_data">
				<div class="header_input_data">
					<h2>Tambah Barang</h2>
				</div>

				<form action="tambah_barang" method="POST">
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
						 		<button type="submit" name="tambah_data">Add</button>
						 	</li>
						</tr>
					</table>
				</form>
			</div>
		</div>
		
<!-- end table -->