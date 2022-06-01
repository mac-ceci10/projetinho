
<?php
// require "projeto/cadastro-ruy/formularios-ruy/includes-ruy/funcoes-ruy.php";
// require "../includes-ruy/funcoes-ruy.php";

// $listaEmails = lerEmail($conexao);
// // $listasenha = lerSenha($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css">
    <title>Histórico de Equipamentos de Tecnologia </title>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=iefP01_KF-ZhVgMcJMeCyBrnk82cT3ucK5IzoYUNhvSZhQMneVju_UVNjmeaQvZk6jqAKIvpDdtx3XoVckb8XcKzLl99y3uFEw3DoNuro58" charset="UTF-8"></script></head>


<body>
    <header>
        <h1>Sistema de Registro -  Equipamentos de tecnologia</h1>
        <p>1º acesso do usuário</p>
        <p>SELECT (EMAIL_institucional no banco de dados) Busca e-mail cadastrado.</p>
        <p>Se encontra:
            <ol>
                <li>abre a página de cadastro de senha de Acesso ao Sistema.</li>
                <li>direciona para pagina de login.</li>
            </ol>
        </p>
        <p>Se não encontra: 
            <ol>
                <li>pede para entrar em contato com o adminstrador do sistema</li>
            </ol>       
        </p>
        <hr>
        <p> SELECT (SENHA no banco de dados)   Busca SENHA cadastrada.</p>
        <p>Se encontra:
            <ol>
                <li>abre a tela de REGISTRO DE OCORRÊNCIAS</li>
            </ol>
        </p>
        <p>Se não encontra:
            <ol>
                <li>mostra mensagem de erro, e pede para entrar em contato com o adminstrador do SISTEMA</li>
            </ol>
        </p>


        <h2>Acesso ao sistema</h2> 
        </header>  
            <section id="corpo-form">
                    <fieldset>
                        <!-- <form action="processa2.php" method="POST"> -->
        
                        <p><label for="email">E-mail Institucional:</label></p>

                            
                        <br>
                        
                        <p><label for="senha">Senha:</label></p>
                        <p><input type="password" name="senha" id="senha" placeholder="Digite sua senha"></p>
 
                        <p><button class="submit" type="submit" name="cadastrar"><a href="formulario-acao.php">Entrar</a></button></p>

                        <!-- <p><a href="login-cadastro2.php">Cadastrar Acesso</a></p> -->
                    </fieldset>
                </section>               
            </form>
        </main>
</body>
</html>





