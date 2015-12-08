<?php
include("connect.php");

if (isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["notlar"])) {
	

$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$not=$_POST["notlar"];
$query = $db->prepare( 'insert into `kullanici_bilgileri`(`ad`, `soyad`, `tel`, `email`, `notlar`) VALUES (?,?,?,?,?)');
$query->execute(array($ad,$soyad,$tel,$email,$not));

}