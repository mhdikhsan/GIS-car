<?php
  require_once "koneksi.php";
  
  session_start();
  
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
	$username = $_POST['pengguna_nama'];
	$password = md5($_POST['pengguna_password']);
		$sql = $connect->prepare('SELECT * FROM pengguna WHERE pengguna_nama = :username and pengguna_password = :password');
		$sql->execute(array(
							':username' => $username,
							':password' => $password
							));
		$row = $sql->fetch(PDO::FETCH_ASSOC);
		if(empty($row['pengguna_nama'])){
			echo "<script>alert('Username atau Password Salah !',document.location.href='index.php')</script>";
		}else{
			$_SESSION['pengguna_nama'] = $_POST['pengguna_nama'];
			
			header("location: admin.php");
		}
	}
?>