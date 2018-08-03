<?php session_start();
include_once ('bagianatas.php') ; ?>
	<div class="wrapper-content">
		<div class="wrap-content">
			<div class="content">
			<table border="1">
			<form method="post" action="simpan.php">
			<tr><td><label for="author">Nama : </label></td>
			<td><input type="text" id="author" name="nama" class="required input_field" /><br/><br/></td></tr>
			<tr><td><label for="author">NIM : </label></td>
			<td><input type="text" id="author" name="nim" class="required input_field" /><br/><br/></td></tr>
			<tr><td><label for="author">Jurusan : </label></td>
			<td><select id="email" name="jur" class="stok" >
						     <option value="si">Sistem Informasi</option>
							 <option value="ti">Teknik Informatika</option>
							 <option value="mi">Manajemen Informatika</option>
							 <option value="tk">Teknik Komputer</option>
							 <option value="ka">Komputerisasi Akuntansi</option>
							 </select><br/></td></tr>
			<tr><td><input type="submit" name="simpan" value="Simpan" /></td>
			<td><input type="submit" name="batal" value="Batal" /></td></tr>
			</form>
			</table>
			</div>
		</div>
	</div>
<?php	include_once ('bagianbawah.php') ; ?>
