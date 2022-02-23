<?php
    include 'koneksi.php';
	
	if(isset($_GET['id']))
	{
		// select image from db to delete
		$query = $connect->prepare('SELECT obyek_foto FROM obyek WHERE  obyek_id=:id');
		$query->execute(array(':obyek_id'=>$_GET['id']));
		$imgRow=$query->fetch(PDO::FETCH_ASSOC);
		unlink("obyek_foto/".$imgRow['obyek_foto']);
		
		// it will delete an actual record from db
		  $query = $connect->prepare("DELETE FROM obyek WHERE obyek_id=:id");
        $query->bindParam(":id", $_GET["id"]);
        // Jalankan Perintah SQL
        $query->execute();
        // Alihkan ke index.php
        header("location: lihatdata.php");
    }
	
?>
