<?php
if (count($_POST)) {
	// Recebendo valores
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$nome = $_POST['nome'];
	$sexo = $_POST['sexo'];
	$idade = $_POST['idade'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];

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
		$sql = 'INSERT INTO usuario(Cpf_Usuario, Rg_Usuario, Nome_Usuario, Sexo_Usuario, Idade_Usuario, Telefone_Usuario, Senha_Usuario) VALUES ('.$cpf .",'". $rg . "','" . $nome ."','". $sexo . "','". $idade . "','". $telefone . "','". $senha . "')";
		$rs = mysql_query($sql, $db);
		
		if (!$rs){
		erro_banco();

		}else{
			echo "</ br><a href = 'index.html'>Voltar A Pagina Inicial </a>";
		mysql_close($db);
}}
?>



<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
