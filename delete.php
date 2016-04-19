<?php
if (count($_POST)) {
	// Recebendo valores
	$x = $_POST['x'];

	// Recebendo valores
	
	
	//fazendo conexao 
	$db = mysql_connect('localhost','root','root');
		if(!$db){
			erro_banco();
		}
		if(!mysql_select_db('tcc',$db)){
			erro_banco();
		}

		//fazendo a inserção
		$sql = "DELETE FROM produto WHERE descricao_produto=".$x."' "

    	$rs = mysql_query($sql, $db);
		
		if (!$rs){
		erro_banco();

		}else{
			echo "<script language='javascript'>alert('operação efetuada com sucesso')</script>";
			//echo "</ br><a href = 'cadastro.php'>Voltar</a>";
		mysql_close($db);
}}
?>



<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
