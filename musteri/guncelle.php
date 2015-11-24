<meta charset="utf-8">

<?php 
 include("baglan.php");
$gelenid=$_GET['id'];

if(isset($_POST["email"])){
  $ad=$_POST["ad"];
  $soyad=$_POST["soyad"];
  $tel=$_POST["tel"];
  $email=$_POST["e-mail"];
  $not=$_POST["not"];

$guncelle = $db->prepare("UPDATE musteri_bilgileri SET ad=?,soyad=?,tel=?,email=?,not=? WHERE id = ".$gelenid."");

$guncelle->execute(array($ad, $soyad,$tel ,$email, $not));
if($guncelle) {
  echo "güncelleme işlemi başarılı";
   header("location:index.php");
}else{
  echo"hata";
}

}

if($users = $db->query('SELECT * FROM musteri_bilgileri WHERE id='.$gelenid.''))
{ 

  foreach($db->query('SELECT * FROM musteri_bilgileri WHERE id='.$gelenid.'') as $row) {
?>
<form id="form1" method="post"  action=""  >
<table width="50%" height="%50" border="0" style="margin:auto; background-color:#F8BBD0;">
    <tr>
          <td ></td>
          <td ></td>
          <td  ><div style="font-size:36px;font-weight: bold;font-family: sans-serif;"> Güncelleme Sayfası</div></td>
    </tr>
    <tr>
          <td height="46">&nbsp;</td>
          <td> Adınız:</td>
          <td><label for="kulad"></label>
          <input type="text" name="ad"  value="<?php echo $row["ad"]; ?>" />
          </td>
          <td>&nbsp;</td>
    </tr>
    <tr>
          <td height="50">&nbsp;</td>
          <td>Soyadınız:</td>
          <td><input type="text" name="soyad" value="<?php echo $row["soyad"]; ?>" /></td>
          <td>&nbsp;</td>
    </tr>
    <tr>
          <td height="47">&nbsp;</td>
          <td>Numaranız:</td>
          <td><input type="text" name="tel"  value="<?php echo $row["tel"]; ?>" /></td>
          <td>&nbsp;</td>
    </tr>
    <tr>
          <td height="47">&nbsp;</td>
          <td>Epostanız:</td>
          <td><input type="text" name="email"  value="<?php echo $row["email"]; ?>" /></td>
          <td>&nbsp;</td>
    </tr>
    <tr>
          <td height="47">&nbsp;</td>
          <td>Notunuz:</td>
          <td><input type="text" name="not"  value="<?php echo $row["not"]; ?>" /></td>
          <td>&nbsp;</td>
    </tr>
    <tr>
          <td height="74">&nbsp;</td>
          <td>&nbsp;</td>
          <td>
            <input type="submit" name="Submit" id="kaydet" value="Güncelle" />
         </td>
          <td>&nbsp;</td>
    </tr>
      </table>
    </form>

<?php 
}}
?>