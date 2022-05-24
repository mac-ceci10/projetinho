<?php
// require "teste.php";
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
                        <form class="center" method="POST" action="teste1.php" action="funcoes-ruy.php">
        
                        <p><label for="email">E-mail Institucional:</label></p>
                        <p><input type="text" name="email_instit" id="email"  placeholder="Digite seu e-mail Institucional"></p>
                        
                        <hr>
                        <ol>
                            <li>
                                Usuário digita seu e-mail institucional, que já deverá estar no BD.
                            </li>
                            <li>
                                Será realizado um comando SQL INSERT na base de dados para ler se já exite o e-mail na base.
                                O retorno será tratado com a condicional "if": <br>
                                <ul>
                                    <li>
                                    Se encontrado, mostra a página de acesso ao cadastro de uma senha para se logar.
                                    </li>
                                    <li>
                                    Se NÃO encontrado, mostra página de "ERRO" possíveis sugestões.
                                    </li>
                                </ul>
                                    
                            </li>
                        </ol>
                        <hr>
 
                        <p><button class="submit" type="submit" name="buscar">
                            
                        <!-- <a href="login-cadastro3.php">Buscar e-mail</a> -->
                        <!-- <a href="teste.php"> -->
                            Buscar e-mail</a> </button></p>

                            <?php
                        // Detectando o acionamento do botão atualizar
                        if( isset($_POST['buscar']) ){
                            $buscEmail = filter_input(INPUT_POST, 'email_instit', FILTER_SANITIZE_SPECIAL_CHARS);

                            echo $buscEmail;
                            // var_dump($buscEmail);
                            // atualiza($conexao, $id, $nome);
                            // header("location:login-cadastro3.php");
                        }
                        ?>
                    </fieldset>
                </section>               
            </form>
        </main>
</body>
</html>