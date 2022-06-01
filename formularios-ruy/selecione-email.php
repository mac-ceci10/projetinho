<?php
// require "../includess/funcoes-ruy.php";
require "../includess/conecta-ruy.php";
// $email = $_POST['email_instit'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css">
    <title>Histórico de Equipamentos de Tecnologia </title>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=SixkPse1gFAysQ62izJ1t3cSV8bZUsEiHF33sfGV-tnTm82Z0HRztAGsWylSaSMfa6Z9qRTEsf9jq6zh7Y1VnXvmvN1P9K45Eme2UQWZL2Q" charset="UTF-8"></script></head>

<body>
    <header>
    <h1>Sistema de Registro -  Equipamentos de tecnologia</h1>
        <br>
        <hr>

        <h2>Digite seu e-mail Institucional para logar</h2> 
        </header>    
            <section id="corpo-form">
                    <fieldset>
                        <form class="center" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <form class="center" method="POST" action="teste1.php">
        
                        <p><label for="email">E-mail Institucional:</label></p>
                        <p><input type="email" name="email_instit" id="email"  placeholder="Digite seu e-mail Institucional"></p>
    


<?php


function lerUmEmail(mysqli $conexao, int $id, string $email):array {
    // Montagem do comando SQL com o parâmetro id
    $sql = "SELECT id, email_institucional FROM acesso_login WHERE email_institucional = $email";
    
    // Execução do comando e armazenamento do resultado
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // Retornando para fora da função o resultado como array assoc.
    return mysqli_fetch_assoc($resultado);

    // echo $resultado;
}
    ?>
<p><button type="submit" name="buscar"> </button> <a href="teste1.php">Buscar</a></p> 
                          <!-- <p>  Buscar o email_institucional cadastrado </p>

                        <hr>
                         
                        <p><button class="submit" type="submit" name="buscar">Buscar e-mail</p> -->
                            
    
                    </fieldset>
                </section>               
            </form>
        </main>
</body>
</html>