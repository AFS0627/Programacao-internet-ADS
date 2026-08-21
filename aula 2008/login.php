<?php 
require "conexao.php";

$login = $_POST["login"] ?? "";
$senha = $_POST["senha"] ?? "";

$sql = "select * from usuarios where login like '$login' and senha_hash like '$senha'";

$result = $conexao->query($sql);
if($result->fetch_assoc()){
    echo "login feito";
}else{
    echo "acesso negado";
}


?>
<form method="post">
    <input type ="text" name ="login">
    <input type="password name="senha">
    <input type="submit">
</form>