<?php
  
 $db = mysqli_connect('localhost','root','','ato_khobor_ken');
 
 if($db){
 	echo 'Datebase Connection Established!';
 }else{
 	die('Database Connection Error!'.mysqli_error($db));
 }

?>