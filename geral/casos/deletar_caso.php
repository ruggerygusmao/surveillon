
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<?php
include "../../conexao/conexao.php";  
try{
	$stmt = $conexao->prepare("delete from caso where codigo = ?");
	$cod_caso= $_GET["codigo"]; 
	$stmt -> bindParam(1,$cod_caso);    
	$stmt->execute(); 

	if($stmt->rowCount() >0){
		echo '<script>
		alert("Caso excluido com sucesso!");
		location.href="../casos/index.php"
	</script>';
}else{
	echo '<script>
	alert("Erro ao excluir Caso!");
	location.href="../casos/index.php"
</script>';
}	
}catch(PDOException $e){
	echo 'ERROR: ' . $e->getMessage();
}
?>

