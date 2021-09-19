
<?php
if(!empty($_POST["register"])) {
	require_once("koneksi.php");
	$sql = "INSERT INTO akun(nama_lengkap,email,nomor_telepon,password) VALUES (:nama_lengkap,:email,:nomor_telepon,:password)";
	$stmt = $pdo_conn->prepare( $sql );
	$result = $stmt->execute( array(':nama_lengkap'=>$_POST['nama_lengkap'],':email'=>$_POST['email'],':nomor_telepon'=>$_POST['nomor_telepon'],':password'=>$_POST['password']) );
  if (!empty($result) ){
	  header('location:index.html');
	}else{
		echo'error';
	}
}
?>