<?php
    $cpf = $_POST['cpf'];
    $entrar = $_POST['entrar'];
    $senha = $_POST['senha'];
    $connect = mysql_connect('localhost','root','root');
    $db = mysql_select_db('tcc');



        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM usuario WHERE Cpf_Usuario = '$cpf' AND Senha_Usuario = '$senha'") or die("erro ao selecionar");
               
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.html';</script>";
                    die();
                    //erro_banco();
                }else{
                    setcookie("senha",$senha);
                    header("Location:pagina2.html");
                }
        }
?>


<?php
function erro_banco(){
    echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
