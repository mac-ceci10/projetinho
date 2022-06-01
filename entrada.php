<!--  -->
<!-- // require "teste.php";
// página index

// require '../includess/funcoes-ruy.php';
// require '../includess/conecta-ruy.php';

// Capturar o parâmetro id da URL
// $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


// Chamamos a função que irá retornar o email institucional
// $email = lerUmEmail($conexao,$id,$email);


// Detectando o acionamento do botão entrar
// ?> -->



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

        <h2>Digite seu e-mail Institucional e sua senha para logar.</h2> 
        </header>    
            <section id="corpo-form">
                    <fieldset>
                        <form class="center" method="POST" action="teste1.php" action="funcoes-ruy.php">
        
                        <p><label for="email">E-mail Institucional:</label></p>
                        <p><input type="text" name="email_instit" id="email"  placeholder="Digite seu e-mail Institucional"></p>
                        
                        <hr>

                        <ol>
                            <li> Usuário digita seu e-mail institucional, que já deverá estar no BD. </li>
                            <li> Comando SQL selectUsuário. </li>
                        </ol>
                        <hr>
                       
                        <p><label for="senha">Digite sua Senha:</label></p>
                        <p><input type="password" name="senha" id="senha" placeholder="Digite uma senha"></p>
                        
                        <ol>
                            <li>
                                Usuário digita sua senha já cadastrada.
                            </li>
                        </ol>
                        <hr>
 
                        <p><button class="submit" type="submit" name="entrar"><a href="login-cadastro4.php">Entrar no Sistema</a></button></p>
                   
                        <ol>
                            <li>
                                Usuário clica no botão e: <br>
                                <ul>
                                    <li>
                                        Se e-mail e senha corretos, entram no Sistema para registrar uma nova ocorrência.
                                        <a href="">Página de Registro de Ocorrência	</a>
                                    </li>
                                    <li>
                                        Se e-mail e senha NÃO estiverem corretos - mensagem de advertência para verificação de digitação
                                    </li>
                                    <li>
                                        Se usuário ainda NÃO tiver um CADASTRO (apenas de senha, pois, entende-se que seu e-mail já esteja na Base de Dados)
                                       
                                        <a href="login-cadastro2.php">Página de Cadastro de SENHA.	</a>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                        <hr>
                   
                    </fieldset>
                </section>               
            </form>
        </main>
</body>
</html>
