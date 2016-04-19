<?php
if (count($_POST)) {
	// Recebendo valores
	$descricao_produto = $_POST['descricao_produto'];
    $tamanho = $_POST['tamanho'];
    $preco = $_POST['preco'];

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
		$sql = 'INSERT INTO produto(descricao_produto, tamanho, preco) VALUES ('.$descricao_produto .",'". $tamanho . "','" . $preco ."')";
		$rs = mysql_query($sql, $db);

		if (!$rs){
		erro_banco();

		}else{
			echo "</ br><a href = 'paginainseri.html'>Voltar </a>";
		mysql_close($db);
}}
?>



<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
