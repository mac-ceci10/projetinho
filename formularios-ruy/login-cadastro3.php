<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-form.css">
    <title>Histórico de Equipamentos de Tecnologia </title>
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=U4v28IyCfAOV5yTvkOsQ10fVHYL4jH7BDmTD2QV4ra8Oy6EkR3Q0tuwU0AcmRpZQZGGNO2a1-YRpOpWW0XSyWgnMQUExluY88g9g14CZl1E" charset="UTF-8"></script></head>

<!--  Teste-->
<body>
    <header>
        <h1>Sistema de Registro -  Equipamentos de tecnologia</h1>
        <br>
        <hr>

        <h2>E-mail localizado - Cadastre uma senha</h2> 
        </header>    
            <section id="corpo-form">
                    <fieldset>
                        <form action="processa2.php" method="POST">
    
                        <p><label for="email">E-mail Institucional:</label></p>
                        <p><input type="e-mail" name="e-mail" id="e-mail"></p>
                            
                        <hr>
                        <ul>
                            <li>
                                Ao ser localizado o e-mail institucional no BD ele virá automáticamente, para este campo, <br>
                                habilitando a criação de uma senha.
                                Será realizado um comando SQL SELECT no BD, que caso encontrado e-mail, completará este campo automaticamente.
                            </li>
                        </ul>
                        <br>
                        <hr>
                        
                        <p><label for="senha">Crie uma Senha:</label></p>
                        <p><input type="password" name="senha" id="senha" placeholder="Digite uma senha"></p>

                        <br>

                        <hr>
                        <ul>
                            <li>
                                As senhas precisam ser iguais e apenas o VALOR da caixa de "confirmar senha" <br>
                                será cadastrado no BD.
                                Colocar uma condicional "if" de comparação.
                            </li>
                        </ul>
                        <br>
                        <hr>
                        
                        <p><label for="senha">Confirme sua nova Senha:</label></p>
                        <p><input type="senha" name="senha" id="senha" placeholder="Confirme sua nova senha"></p>
                        <p><button class="submit" type="submit" name="cadastrar"><a href="login-cadastro4.php">Cadastrar senha</a></button></p>
                    
                        <hr>
                        <ul>
                            <li>
                                Ao clicar no botão "cadastrar" será realizado um comando SQL - INSERT para o BD <br>
                                será cadastrado no BD, agora acrescentando uma senha de acesso para o e-mail selecionado.
                                Depois desta ação, o usuário será direcionado para a tela de Login.
                            </li>

                            <li> <a href="login-cadastro4-erro.php">Página de erro</a> </li>
                        </ul>
                        <br>
                        <hr>
                    
                    </fieldset>
                </section>               
            </form>
        </main>
</body>
</html>