<?php
	$db = mysql_connect('localhost','root','root');
		if(!$db){
			erro_banco();
		}
		if(!mysql_select_db('tcc',$db)){
			erro_banco();
		}

		function listar(){
		$result = mysql_query("SELECT descricao_produto FROM produto WHERE tamanho = 'Grande'");
		
		while($row = mysql_fetch_array($result)){
			echo $row['descricao_produto'];
			echo "<br />";
		}



		}	


mysql_close($db);

?>
