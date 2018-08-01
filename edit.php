<?php	
session_start();
	$id = $_GET["id_user"];
	include "koneksi.php";
	$sql = "select * from user where id_user ='$id'";
	$hasil = mysqli_query($db,$sql);
	if (!$hasil) die ("gagal query...");

	$data = mysqli_fetch_array($hasil);
	$nama = $data["nama_user"];
	$ttl = $data["ttl"];
	$jk = $data["jk"];
	$almt = $data["alamat"];
	$tlp = $data["no_telp"];
	$email = $data["email"];
	$pass = $data["password"];
	$foto = $data["foto"];
include_once ('bagianatas.php') ; ?>
	<div class="wrapper-content">
		<div class="wrap-content">
			<div class="content">
			<table border="0">
					<form action="editproses.php" method="post" enctype="multipart/form-data" >
					<tr>
					<td>
					<tr><td><label for="author">Nama : </label></td>
					<td><input type="text" id="author" name="nama" class="required input_field" value="<?php echo $nama; ?>"/><br/></td>
					<tr><td><label for="author">Nama : </label></td>
					<td><input type="text" id="author" name="nama" class="required input_field" value="<?php echo $nama; ?>"/><br/></td>
					</tr><tr>
					<td>Tanggal Lahir: </td>
					<td><select id="email" name="tgl" class="stok" >
						     <option value="tgl">tgl</option>
							 <?php for($m=1; $m<=31; $m++){ ?>
									<option value = "<?php echo $m?>"><?php echo $m?></option>
							 <?php } ?>
							 </select>
							</td>
					</tr><tr>
					<td><input type="submit" name="simpan" value="SIMPAN"/></td>
					<td><input type="submit" name="batal" value="BATAL"/></td>
					</tr>
			</table>
			</div>
		</div>
	</div>
<?php include_once ('bagianbawah.php') ; ?>