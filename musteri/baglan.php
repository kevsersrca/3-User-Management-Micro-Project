<?php

  	try{
 $db= new PDO("mysql:host=localhost;dbname=musteri","root","");
}
  catch(PDOexception $e){
  print $e->getMessage();
  }
  	
?>