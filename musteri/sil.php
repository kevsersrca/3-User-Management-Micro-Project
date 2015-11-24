<?php 
 include("baglan.php");
$gelenid=$_GET['id'];
echo $gelenid;
 if($count = $db->exec('DELETE FROM musteri_bilgileri WHERE id = '.$gelenid.' ')){
    echo $count . ' Kullanıcı silindi';
    header("location:index.php");
}
else { echo "silinemedi";}
?>