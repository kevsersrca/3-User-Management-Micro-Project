<meta charset="utf-8">
<?php
include("connect.php");

$id=$_GET['id'];

if(isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["tel"]) && isset($_POST["email"]) && isset($_POST["notlar"])){

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$not=$_POST['notlar'];

$guncelle=$db->prepare(" UPDATE kullanici_bilgileri set ad=? , soyad=?, tel=?, email=?, notlar=? where id= '$id'");
$guncelle->execute(array($ad,$soyad,$tel,$email,$not));

if($guncelle){
	header("location:index.php"); 
}

}
if($users=$db->query(" SELECT * from kullanici_bilgileri where id= '$id'")){

	foreach($db->query(" SELECT * from kullanici_bilgileri where id= '$id'") as $row)
	{
		?>
		<form action="" method="post">
			<table>
				<tr>
					<td>GÜNCELLEME SAYFASI</td>
				</tr>
				<tr>
					<td>ADINIZ:</td>
					<td><input type="text" 	name="ad" value="<?php echo $row["ad"]; ?>"></td>
				</tr>
				<tr>
					<td>SOYADINIZ:</td>
					<td><input type="text" name="soyad" value="<?php echo $row["soyad"]; ?>"></td>
				</tr>
				<tr>
					<td>TELEFON:</td>
					<td><input type="text" name="tel" value="<?php echo $row["tel"]; ?>"></td>
				</tr>
				<tr>
					<td>EMAİL:</td>
					<td><input type="text" name="email" value="<?php echo $row["email"]; ?>"></td>
				</tr>
				<tr>
					<td>NOT:</td>
					<td><input type="textarea" name="not" value="<?php echo $row["notlar"]; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" value="GÜNCELLE" name="submit"></td>
				</tr>
			</table>
		</form>
		<?php
	}
	
}

?>