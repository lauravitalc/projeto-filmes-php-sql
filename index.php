<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form method="POST">
                <label>Nome</label>
                <input type="text" name="nome">
                <label>Data</label>
                <input type="date" name="dataExibicao">
                <label>Descrição</label>
                <input type="text" name="descricao">
                <button>Enviar</button>
            </form>
        </div>
        <div class="box">
            <?php echo $_POST['nome'] . "\n"; 
            echo $_POST['dataExibicao'] . "\n";
            echo $_POST['descricao'];
            ?>
        </div>
    </div>
</body>
</html>