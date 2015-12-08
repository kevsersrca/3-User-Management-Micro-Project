<?php
include("connect.php");
	$gelenid=$_GET["id"];
		if($count=$db->exec('DELETE FROM kullanici_bilgileri WHERE id='.$gelenid.''))
{
	header("location:index.php");
}

	