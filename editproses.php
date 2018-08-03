<?php	
    session_start();
	$nama   = $_POST['nama'];
	$nim  = $_POST['nim'];
	$jur = $_POST['jur'];
	$dataValid = "YA";
	if (strlen(trim($nama))==0) {
		echo "Nama Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($nim))==0) {
		echo "NIM Harus Diisi! <br/>";
		$dataValid = "TIDAK";
	}

	if (strlen(trim($jur))==0) {
		echo "Jurusan Harus Diisi! <br/>";
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
	$sql = "update mhs set nama= '$nama', nim= '$nim', jur= '$jur'
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
