<?php

require ("../includes-ruy/conecta-ruy.php");

$ema = $_POST['email_instit'];


echo $ema;

function selecionEmail($conexao, $ema){

        $sql = "SELECT email_institucional FROM acesso_login WHERE email_institucional = $ema";

        $conn = mysqli_query($conexao, $sql) or die (mysqli_error($conexao, $sql));

        return mysqli_fetch_assoc($conn);

}
?>  
<p><button class="submit" type="submit" name="cadastrar"> <a href="login-cadastro3.php">Caso, e-mail localizado</a></button></p>              
<p><button class="submit" type="submit" name="cadastrar"> <a href="login-cadastro4-erro.php">Caso, e-mail NÃO localizado</a></button></p>              

