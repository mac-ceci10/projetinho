<?php 

// require "../includess/funcoes-ruy.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>Histórico de Equipamentos de Tecnologia </title>
    
</head>


<body>
    <header>
        <h1>Registro de Manutenção de Equipamentos TEC <br>
        </h1>

        <hr>

        <br>

       <h2> Selecione o público de atendimento</h2> 

    </header>  
    
<main>
    <section>
            <fieldset>
                <form action="teste1.php" method="POST">

                <p><label for="equipamento">Seleção</label></p>

        <p> ----------------------------------------------------------</p>
<div class="selec">
    <br>
        <button class="submit" type="submit" name="cadastrar"><a href="./formularios-ruy/formulario-doc.php">Docente</button>
        <button class="submit" type="submit" name="cadastrar"><a href="./formularios-ruy/formulario-estu.php">Estudante</button>
        <p> ----------------------------------------------------------</p>
    <br>
</div>

            </fieldset>
        </section>
        
    </form>
        </main>
</body>
</html>