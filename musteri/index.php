<?php
include("baglan.php");

if (isset($_POST["e-mail"])){
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$tel=$_POST["tel"];
	$email=$_POST["e-mail"];
	$not=$_POST["not"];
	$query = $db->prepare('INSERT INTO `musteri`.`musteri_bilgileri` ( `ad`, `soyad`, `tel`, `e-mail`, `not`) VALUES (?,?,?,?,?);');
	$query->execute(array ($ad, $soyad,$tel,$email,$not));	
}
$users = $db->query('SELECT * FROM musteri_bilgileri');
?>

<meta charset=UTF-8>
<title>Musteri Formu</title>



<form  method="post" action="">
<table align="center" border="0" cellspacing="0" cellpadding="5px" width="100%">
	<tr align="center" valign="top">
		<td><input type="text-area" name="ad" placeholder="Ad" required></td>
	</tr>
	<tr align="center" valign="top">
		<td><input type="text-area" name="soyad" placeholder="Soyad" required></td>
	</tr>
	<tr align="center" valign="top">
		<td><input type="text-area" name="tel" placeholder="Telefon No" required></td>
	</tr>
	<tr align="center" valign="top">
		<td><input type="text-area" name="e-mail" placeholder="Elektronik Posta Adersi" required></td>
	</tr>
	<tr align="center" valign="top">
		<td><input type="text-area" name="not" placeholder="Not" ></td>
	</tr>
	<tr align="center">
		<td><input type="submit" name="gonder" value="Gonder" ></td>
	</tr>	
</table>

</form>
<form id="formara" name="formara" action="" method="post" align="center">
<input type="text"  name="ara" style="padding:15px; " placeholder="İsme göre arama yapınız" />
<input type="submit" style="padding:15px; background:#1371B6; color:white; font-weight:bold;" value="Ara" />
</form>
<?php
if(isset($_POST["ara"])){



$Gelen = $_POST["ara"]; 

if(empty($Gelen)){

echo "<script> alert('ARAMA KİSMİNİ BOS BİRAKMAYİNİZ. ')</script>";

}else{


$Ara   = $db->prepare("SELECT * FROM musteri_bilgileri WHERE ad LIKE ? LIMIT 10"); 

$Ara->execute(array('%'.$Gelen.'%')); 

$Liste   = $Ara->fetchAll(PDO::FETCH_ASSOC); 

if($Ara->rowCount() != "0"){ 

?><table border="1" cellpadding="8" style="background:#3BA4F2;"><?php

   foreach($Liste as $Bas){
   ?> <tr >
<td> <?php  echo $Bas["ad"]; ?></td>
<td> <?php  echo $Bas["soyad"]; ?></td>
<td> <?php  echo $Bas["tel"]; ?></td>
<td> <?php  echo $Bas["e-mail"]; ?></td>
<td> <?php  echo $Bas["not"]; ?></td>
      </tr>
<?php
      

   }
?></table></br></br><?php

}

}}
?>


<table align="center" border="1px" cellspacing="0" cellpadding="10px;" width="50px;">
	<tr align="right" >
		<td>AD</td>
		<td>SOYAD</td>
		<td>TELEFON NO</td>
		<td>EMAIL</td>
		<td>NOT</td>
		<td>GUNCELLE</td>
		<td>SİL</td>
	</tr>
	<?php foreach($users as $row ) {	?>
	<tr style background : yellow;>
	<td><?php echo $row ['ad']; ?></td>
	<td><?php echo $row ['soyad']; ?></td>
	<td><?php echo $row ['tel']; ?></td>
	<td><?php echo $row ['email']; ?></td>
	<td><?php echo $row ['not']; ?></td>
	<td><a href ="guncelle.php?id=<?php echo $row['id']; ?>"<button>Guncelle</button></td>
	<td><a href ="sil.php?id=<?php echo $row['id']; ?>"<butto>Sil</button></td>
	</tr>
	<?php } ?>
</table>
