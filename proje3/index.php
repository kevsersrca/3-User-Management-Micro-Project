<?php
include("connect.php");
?>
    <script>
    function a(){
      
      return confirm("Silmek istediğinize emin misiniz?");}
    </script>
    
<div>
	<form action="#" method="POST">
	<h1>Müşteri Ekle </h1>
		<table >
			<tr>
				<td><input type="text" style="padding:5px; " name="ad" id="ad" placeholder="AD" required></td>
			</tr>
			<tr>
				<td><input type="text" style="padding:5px;" name="soyad" id="soyad" placeholder="SOYAD" required></td>
			</tr>
			<tr>
				<td><input type="text" style="padding:5px;" name="tel" id="tel" placeholder="TELEFON" required></td>
			</tr>
			<tr>
				<td><input type="text" style="padding:5px;" name="email" id="email" placeholder="EPOSTA" required></td>
			</tr>
			<tr>
				<td><input type="textarea" style="padding:5px;" name="notlar" id="not" placeholder="NOT" required></td>
			</tr>
			<tr>
				<td><input type="submit"  style="padding:15px; background:purple; color:white; font-weight:bold;" value="Gönder"></td>
			</tr>
		</table>
	</form>
</div>
<?php
///Veri ekleme 
include("insert.php");
?>

<?php
//ARAMA KISMI
?>
<h1 style="font-weight:bold;">ARAMA</h1>
<form action="" method="post" name="formm">
  <table>
    <input type="text"  name="ara" style="padding:15px;" placeholder="İsme göre arama yapınız" />
    <input type="submit" style="padding:15px; background:purple; color:white; font-weight:bold;" value="Ara" />
  </table>
</form>
<?php 
include("search.php");


///Veri görüntüleme

    
    if($_POST["ara"]){
      if(!empty($_POST["ara"])){
      $gelen=$_POST["ara"];  
        ?>
        <table>
        <h1 style="font-weight:bold;">ARAMA SONUCLARI</h1>
    <div>
      <table>
        <tr>
          <td>AD</td>
          <td>SOYAD</td>
          <td>TEL</td>
          <td>EMAİL</td>
          <td>NOT</td>
          <td>GÜNCELLE</td>
          <td>SİL</td>
        </tr>
   
      <?php 
        foreach($liste as $row ){
        ?>
        
        <tr>
      <td><?=$row["ad"]; ?></td>
      <td><?=$row["soyad"]; ?></td>
      <td><?=$row["tel"]; ?></td>
      <td><?=$row["email"]; ?></td>
      <td><?=$row["notlar"]; ?></td>
      <td><a href="update.php?id=<?=$row["id"]; ?>"<button>Güncelle</button></td>
      <td><a href="delete.php?id=<?=$row["id"]; ?>"<button onclick=" return a()">SİL</button></td>
    </tr>
                
        <?php
      }
      ?>
    </table>
    <?php
    }
    else
    {
      alert("lütfen aranacak karakter giriniz!");
    }
  }

    else
    {
      if($users = $db->query('SELECT * FROM kullanici_bilgileri ')){
    ?>
    <h1 style="font-weight:bold;">Veri Listeleme</h1>
    <div>
      <table>
        <tr>
          <td>AD</td>
          <td>SOYAD</td>
          <td>TEL</td>
          <td>EMAİL</td>
          <td>NOT</td>
          <td>GÜNCELLE</td>
          <td>SİL</td>
        </tr>
   <?php
   foreach ($db ->query('SELECT * FROM kullanici_bilgileri ') as $row) {
    ?>
    <tr>
      <td><?=$row["ad"]; ?></td>
      <td><?=$row["soyad"]; ?></td>
      <td><?=$row["tel"]; ?></td>
      <td><?=$row["email"]; ?></td>
      <td><?=$row["notlar"]; ?></td>
      <td><a href="update.php?id=<?php echo $row['id']; ?>"<button>Güncelle</button></td>
      <td><a href="delete.php?id=<?php echo $row['id']; ?>"<button onclick=" return a()">SİL</button></td>
    </tr>
    <?php   

   }
   ?>
      </table>
    </div>
    <?php
    }
}

