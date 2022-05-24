<?php

// Parâmetros do servidor de BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "workserv_antonio_ruy_computadores";

// Conectando ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Habilitando o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/* Teste (provisório) */
// if($conexao){
//     echo "Tudo ok!";
// }

//pesquisar

// $pesquisar = $_POST['email_instit'];
// echo $pesquisar;

    // ConLogin.ConnectionString = "DRIVER={MySQL ODBC 8.0 Unicode Driver};" _
    // & "SERVER=54.39.102.210;Port=3306;" _
    // & "DATABASE=workserv_cadastro;" _
    // & "UID=workserv_ceci10;" _
    // & "PASSWORD=HOSTING@ceci10"


    // Con4.ConnectionString = "DRIVER={MySQL ODBC 5.3 Unicode Driver};" _
    // & "SERVER=54.39.102.210;Port=3306;" _
    // & "DATABASE=workserv_cadastro;" _
    // & "UID=workserv_ceci10;" _
    // & "PASSWORD=HOSTING@ceci10"

    // Servidor: localhost:3306
    // Banco de dados: workserv_antonio_ruy_computadores
    // Tabela: acesso_login
?>