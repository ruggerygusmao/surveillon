<?php

 



  
try{
$conexao = new PDO('mysql:host=localhost;dbname=visa','root',''); 
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
 

} 

?>
  
