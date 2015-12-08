<meta charset="utf-8">
<?php 
include("connect.php");



if(isset($_POST["ara"])){

	$gelen=$_POST["ara"];

	if(empty($gelen)){

		echo "<script> alert(' Lütfen aranacak bir karakter giriniz. ') </script>";
	}
	else{
		$ara=$db->prepare(' SELECT * FROM  kullanici_bilgileri WHERE ad LIKE ? or soyad LIKE ? or tel LIKE ? or email LIKE ? or notlar LIKE ?' );
		$ara->execute(array('%'.$gelen.'%','%'.$gelen.'%','%'.$gelen.'%','%'.$gelen.'%','%'.$gelen.'%',));
		$liste =$ara->fetchAll(PDO::FETCH_ASSOC);
		
	
		

		}
		}
