<?php
require "conecta-ruy.php";


//Buscar o email_institucional cadastrado

$email = $_POST['email_instit'];

function lerEmail($conexao, $id, $email){
    // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT id, email_institucional FROM acesso_login WHERE email_institucional= $email";
    
    // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) 
                or die(mysqli_error($conexao));

    // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);
} // final lerUmFabricante




//Buscar a senha cadastrada
function lerSenha($conexao, $id, $senha){
    // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT id, conf_senha FROM acesso_login WHERE id = $id";
    
    // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);
} // final lerUmFabricante