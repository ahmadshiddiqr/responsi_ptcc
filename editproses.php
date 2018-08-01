<?php	
    session_start();
	$nama   = $_POST['nama'];
	$nim  = $_POST['nim'];
	$jur = $_POST['jur'];
	$dataValid = "YA";
	if (strlen(trim($nama))==0) {
		echo "Nama Barang Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($jk))==0) {
		echo "Jenis Kelamin Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($alamat))==0) {
		echo "Alamat Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($no_telp))==0) {
		echo "No telepon Barang Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($email))==0) {
		echo "E-mail Barang Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if ($dataValid == "TIDAK") {
		echo "Masih Ada Kesalahan, Silahkan Perbaiki! </br>";
		echo "<input type='button' value='Kembali'
			   onClick='self.history.back()'>";
		exit;
	}
	include "koneksi.php";
	if($size == 0){
			$foto = $foto_lama;
		}
	$sql = "update user set nama_user= '$nama', nim= '$nim', jur= '$jur'
	where id = '".$_SESSION['id']."' ";
	$hasil = mysqli_query($db, $sql);
	
	if (!$hasil) {
		echo "Gagal Simpan, Silahkan Diulangi!<br/>";
		echo mysqli_error($db);
		echo "<br/> <input type='button' value='Kembali'
		onClick='self.history.back()'>";
		exit;
	} else {
		header("Location: index.php");
	}
?>