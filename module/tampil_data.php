<?php
	include "koneksi.php";
	include "function.php";
?>
<!-- table -->
	<div class="table">
		<table border="1" cellpadding="5" cellspacing="0">
			<div class="add">
				<form action="tambah_barang" method="POST">
					<button style="width: 200px;">Tambah Barang</button>
				</form>
			</div>
			<h2>Daftar Barang</h2>
			<thead>
				<tr>
					<th>NO</th>
					<th>KODE BARANG</th>
					<th>NAMA BARANG</th>
					<th>HARGA</th>
					<th>PERSEDIAAN</th>
					<th>OPSI</th>
				</tr>	
			</thead>
			<tbody>
				<?php
					tampil($mysqli);
				?>
			</tbody>
		</table>
	</div>
<!-- end table -->