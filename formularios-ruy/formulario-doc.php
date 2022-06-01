<?php 

require "../includess/funcoes-ruy.php";

$listarEquipamentos = buscarEquipamentos($conexao);

// var_dump($listarEquipamentos); // teste


// if( isset($_POST['cadastrar']) ){
// $nSerie = filter_input(INPUT_POST,'n_serie', FILTER_SANITIZE_SPECIAL_CHARS );
// $fonte = filter_input(INPUT_POST,'fonte', FILTER_SANITIZE_SPECIAL_CHARS );
// $descricao = filter_input(INPUT_POST,'descricao', FILTER_SANITIZE_SPECIAL_CHARS );


// inserirProduto ($conexao, $nome, $preco, $quantidade, $descricao, $fabricanteId);
// header("location:listar.php"); // redirecionamento
// } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Histórico de Equipamentos de Tecnologia </title>
    
</head>


<body>
    <header>
        <h1>Registro de Manutenção de Equipamentos TEC <br>
        </h1>

        <hr>

        <h2>Nova <br>
        Ocorrência</h2> 

    <hr>
    </header>  
    
<main>
    <section>
            <fieldset>
                <form action="teste1.php" method="POST">

                <p><label for="equipamento">Equipamento - Docentes</label></p>

                 <p> ----------------------------------------------------------</p>

                <select name="equipamento" id="equipamento" required>

                    <option value=""> *** SELECIONE UM EQUIPAMENTO *** </option>
                    <!-- Obs: Nesta parte estamos resgatando os dados da tabela FABRICANTES para se completar as informações do formulário de produtos. -->
                    
                    <?php 

                    foreach ($listarEquipamentos as $equip) { ?>

                    <option value="<?=$equip['id']?>">  <?=$equip['n_serie']?>  </option>

                    <?php }  ?>     

                </select>
                    
                           
<!-- 
                    // switch (int $equip['id'] > 0) {
                    //     case :
                    //         break; -->

                  

                    <p><label for="preco">Nº Fonte</label></p>
                    <p> <i>Será preenchido automaticamente a partir do ID selecionado</i></P>
                    <input value="<?=$equip['id']?>" type="text" name="fonte" id="fonte"> <?$equip['fonte']?>

                    <p> ----------------------------------------------------------</p>
                
                <p><label for="data">Data da Ocorrência:</label></p>  
                <p><input type="date" name="data" id="data"></p>
            
            <div>
                <p><label for="descric">Descrição:</label></p>
                <p><textarea placeholder="Escreva aqui sua mensagem" name="descric" id="descric" cols="100" rows="16" > </textarea></p>
                <br>   
            </div>
                
                    <p><label for="preco">Colaborador:</label></p>
                    <P> <i>Será preenchido automaticamente a partir do Login Acessado </i></P>
                    <p><input type="text" name="colabor" id="colabor"></p>
                    <br>

                <p><label for="quant">Contato - E-mail Institucional:</label></p>
                <P> <i>Será preenchido automaticamente a partir do Login Acessado </i></P>
                <p><input type="email" name="email" id="email"></p>
                <br>

                <p><button class="submit" type="submit" name="cadastrar"> Cadastrar registro</button></p>
            </fieldset>
        </section>
        
    </form>
        </main>
</body>
</html>