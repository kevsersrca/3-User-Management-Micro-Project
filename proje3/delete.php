<?php
include("connect.php");
if(isset($_GET["id"]))
	$id=$_GET["id"];
		
		$musteri=$db->prepare("SELECT * FROM kullanici_bilgileri where id=?");
		$musteri->execute(array($id));
		if($musteri){
			header("location:index.php");
		}
		else
		{
			echo"Silinemedi";
			header("location:index.php");
		}

	