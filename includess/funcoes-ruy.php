<?php
require "conecta-ruy.php";
// require "conecta-ruyBD.php";

function buscarEquipamentos(mysqli $conexao){
    // 1) Montar a string do comando SQL
    $sql = "SELECT id, n_serie, fonte FROM docentes";

    // 2) Executar o comando
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    // 3) Criar um array vazio para receber os resultados
    $equipamentosEst = [];  // ARRAYZÃO

    // 4) Loop iterando em cada resultado, e a cada fabricante que for localizado, ele é acrescentado ao array fabricantes.
    while( $equipamento = mysqli_fetch_assoc($resultado) ){
        // array_push(nome do array principal, nome do array individual)
        array_push($equipamentosEst, $equipamento);
    }

    // 5) Retornando para fora da função todos os resultados localizados no BD
    return $equipamentosEst; // Lista de n_serie BD (Matriz)
    }

    // var_dump(buscarEquipamentos($conexao)); Funcionou
    // var_dump(lerFabricantes($conexao)); 


    function buscarEquipamentosEst(mysqli $conexao){
        // 1) Montar a string do comando SQL
        $sql = "SELECT id, n_serie FROM estudantes";
    
        // 2) Executar o comando
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
        // 3) Criar um array vazio para receber os resultados
        $equipamentosEst = [];  // ARRAYZÃO
    
        // 4) Loop iterando em cada resultado, e a cada fabricante que for localizado, ele é acrescentado ao array fabricantes.
        while( $equipamento = mysqli_fetch_assoc($resultado) ){
            // array_push(nome do array principal, nome do array individual)
            array_push($equipamentosEst, $equipamento);
        }
    
        // 5) Retornando para fora da função todos os resultados localizados no BD
        return $equipamentosEst; // Lista de n_serie BD (Matriz)
        }
    
        // var_dump(buscarEquipamentosEst($conexao)); 
        
        // Também Funcionou
    
        // var_dump(lerFabricantes($conexao)); 
    


    function inserirOcorrencia($conexao, $nome, $preco, $quantidade, $descricao, $fabricanteId){
        //em cima a gente cria os nomes
        $sql = "INSERT INTO produtos(nome, preco, quantidade, descricao, fabricante_id) VALUES('$nome', $preco, $quantidade, '$descricao', $fabricanteId)";
        //na descrição do comando, oberva-se que as variáveis com textos estão com aspas, as numéricas não.
        
        mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    }
