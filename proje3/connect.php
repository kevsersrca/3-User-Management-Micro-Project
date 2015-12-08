<?php
try{
	$db=new PDO("mysql:host=localhost;dbname=proje3","root","");
}
catch(PDOexception $e){
	print $e->getMessage();
}

?>