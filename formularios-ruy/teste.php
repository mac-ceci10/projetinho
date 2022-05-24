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
$emai = $_POST['email_instit'];
//testando com echo
echo $emai;
// var_dump($emai);


function lerEmail($conexao, $id, $emai){
        // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT email_institucional FROM acesso_login WHERE email_institucional = $emai";  
        // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) 
                or die(mysqli_error($conexao));
        // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);
    echo $resultado;
}


// var_dump($conexao);
// var_dump($resultado);
    


//     echo $resultado;
//     while($rows_email = mysqli_fetch_array($resultado)){
//         echo "email encontrado: ".$rows_email['email_institucional']."<br>";
//     }
// } 



// $sql = "SELECT email_institucional FROM acesso_login WHERE email_institucional = $emai";
// $result = mysqli_query($conexao, $sql );
// echo $result;










// function lerEmail($conexao, $id, $emai){
//     // Montagem do comando SQL com o parâmetro id
//     $sql = "SELECT id, email_institucional FROM acesso_login WHERE email_institucional = $emai";
    
//     // Execução do comando e armazenamento do resultado
//     $resultado = mysqli_query($conexao, $sql) 
//                 or die(mysqli_error($conexao));

//     // Retornando para fora da função o resultado como array assoc.
//     return mysqli_fetch_assoc($resultado);

//     echo $resultado;

//     while($rows_email = mysqli_fetch_array($resultado)){
//         echo "email encontrado: ".$rows_email['email_institucional'].".";
//     }
// } 


// final lerUmFabricante

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