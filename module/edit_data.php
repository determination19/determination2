<?php
	include "koneksi.php";
	include "function.php";

	$id = $_POST['id'];
	$cari = $mysqli->query("SELECT * FROM data_barang WHERE id='$id'");
	$dapat = $cari->fetch_object();
	$id_barang = $dapat->id;
	$kode_barang = $dapat->kd_brng;
	$nama_barang = $dapat->nm_brng;
	$harga = $dapat->harga;
	$persediaan = $dapat->persediaan;
?>
<!-- table -->
		<div class="table">			
			<div class="add">
				<form action="home" method="POST">
					<button type="submit" style="width: 120px;padding: 10px;">Daftar Barang</button>		
				</form>
			</div>

			<div class="input_data">
				<div class="header_input_data">
					<h2>Edit Barang</h2>
				</div>

				<form action="tambah_barang" method="POST">
					<table>
						<tr>
						 	<li>
						 		<label for="kode_barang">Kode Barang <span>*</span></label>
						 	</li>
						 	<li>
						 		<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
						 		<input type="text" name="kode_barang" value="<?php echo $kode_barang; ?>" id="kode_barang" disabled>
						 	</li>
						</tr>
						<tr>
						 	<li>
						 		<label for="nama_barang">Nama Barang <span>*</span></label>
						 	</li>
						 	<li>
						 		<input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" id="nama_barang">
						 	</li>
						</tr>
						<tr>
						 	<li>
						 		<label for="harga">Harga <span>*</span></label>
						 	</li>
						 	<li>
						 		<input type="text" name="harga" value="<?php echo $harga; ?>" id="harga">
						 	</li>
						</tr>
						<tr>
						 	<li>
						 		<label for="persediaan">Persediaan <span>*</span></label>
						 	</li>
						 	<li>
						 		<input type="text" name="persediaan" value="<?php echo $persediaan; ?>" id="persediaan">
						 	</li>
						</tr>
						<tr>
						 	<li>			
						 	</li>
						 	<li>
						 		<button type="submit" name="update_data">Update</button>
						 	</li>
						</tr>
					</table>
				</form>
			</div>
		</div>
<!-- end table -->