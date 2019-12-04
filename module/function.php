<?php
	function tampil($mysqli){
		$cari = $mysqli->query("SELECT * FROM data_barang");
		$no=1;
		while ($dapat = $cari->fetch_object()) {
			$id = $dapat->id;
			$kode_barang = $dapat->kd_brng;
			$nama_barang = $dapat->nm_brng;
			$harga = $dapat->harga;
			$persediaan = $dapat->persediaan;

			echo"
				<tr>
					<td>$no</td>
					<td>$kode_barang</td>
					<td>$nama_barang</td>
					<td>$harga</td>
					<td>$persediaan</td>
					<td>
			";
?>
						<form action="edit_barang" method="POST">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<button type="submit">Edit</button>
						</form>
						<form action="tambah_barang" method="POST">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<button type="submit" name="hapus_data">Delete</button>
						</form>
<?php
			echo"
					</td>
				</tr>
			";
		$no++;
		}
	}

	function input($kode_barang,$nama_barang,$harga,$persediaan,$mysqli){
		$input = $mysqli->query("INSERT INTO data_barang(kd_brng,nm_brng,harga,persediaan) VALUES ('$kode_barang','$nama_barang','$harga','$persediaan')");
	}

	function delete($id,$mysqli){
		$delete = $mysqli->query("DELETE FROM data_barang WHERE id='$id'");
	}

	function update($id,$nama_barang,$harga,$persediaan,$mysqli){
		$update = $mysqli->query("UPDATE data_barang SET nm_brng='$nama_barang',harga='$harga',persediaan='$persediaan' WHERE id='$id'");
	}
?>