<?php 
session_start();

include 'config.php';
$koneksi = new koneksi();
$conn =  $koneksi->get_connection();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

if($role == '1'){

$login = mysqli_query($conn,"select * from user_pegawai where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);


if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="1"){

		$_SESSION['username'] = $username;
		$_SESSION['id_penduduk'] = $data['id_penduduk'];
		$_SESSION['level'] = "admin";
		header("location:../view/index.php");

	// }else if($data['level']=="2"){
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['id_penduduk'] = $data['id_penduduk'];
	// 	$_SESSION['level'] = "masyarakat";
	// 	header("location:../view/index.php");

	}else if($data['level']=="3"){
		$_SESSION['username'] = $username;
		$_SESSION['id_penduduk'] = $data['id_penduduk'];
		$_SESSION['level'] = "pegawai";
		header("location:../view/index.php");

	}else{
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

} else {
	$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
	$cek = mysqli_num_rows($login);
	
	
	if($cek > 0){
	
		$data = mysqli_fetch_assoc($login);
	
		if($data['level']=="1"){
	
			$_SESSION['username'] = $username;
			$_SESSION['id_penduduk'] = $data['id_penduduk'];
			$_SESSION['level'] = "admin";
			header("location:../view/index.php");
	
		}else if($data['level']=="2"){
			$_SESSION['username'] = $username;
			$_SESSION['id_penduduk'] = $data['id_penduduk'];
			$_SESSION['level'] = "masyarakat";
			header("location:../view/index.php");
	
		}else if($data['level']=="3"){
			$_SESSION['username'] = $username;
			$_SESSION['id_penduduk'] = $data['id_penduduk'];
			$_SESSION['level'] = "pegawai";
			header("location:../view/index.php");
	
		}else{
			header("location:login.php?pesan=gagal");
		}	
	}else{
		header("location:login.php?pesan=gagal");
	}

}

?>