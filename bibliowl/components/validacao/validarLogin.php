<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
        include_once("../../Model/Conexao2.php");


        $sql = "SELECT * FROM tbUsuarios WHERE email_usuario = '$email' and senha_usuario = '$senha'";
        $result = $conexao->query($sql);
       
        if(mysqli_num_rows($result) < 1)
        {
            header("location: ../../pages/login.php");
        } else {
            header("location: ../../home.php");
        }


    

?>