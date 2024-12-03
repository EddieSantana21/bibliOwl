<?php
require_once("../../Model/Conexao.php");
require_once("../../Model/Usuario.php");

if (isset($_POST['emailUsuario']) && isset($_POST['senhaUsuario'])) {
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];

$usuario = new Usuario();
$usuario->setEmailUsuario($emailUsuario);
$usuario->setSenhaUsuario($senhaUsuario);
echo "deu certo até aqui";
foreach ($usuario as $rowUsuario) {
    echo $rowUsuario->listar($usuario);
}
$row = $usuario->listar($usuario);
    if ($emailUsuario === @$row[0]['email_usuario'] && $senhaUsuario === @$row[0]['senha_usuario']) {
        session_start();
        $_SESSION['email_usuario'] = $emailUsuario;
        $_SESSION['senha_usuario'] = $senhaUsuario;
        header("location: ../../pages/home.php");
    } else {
        header("location: ../../pages/login.php");
    } 

}

?>
