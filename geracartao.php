<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomEvento = $_POST['nome'];
    $dataEvento = $_POST['data'];
    $horaEvento = $_POST['hora'];
    $localEvento = $_POST['local'];
    $descricaoEvento = $_POST['descricao'];
    $corEvento = $_POST['cor'];
    $temaEvento = $_POST['tema'];
    $nomContato = $_POST['nomecont'];
    $emailContato = $_POST['emailcont'];
    $telContato = $_POST['telcont'];

    if (isset($_FILES["arquivoEnviado"]) && $_FILES["arquivoEnviado"]["error"] == UPLOAD_ERR_OK) {
        $nomeArquivo = $_FILES["arquivoEnviado"]["name"];

        echo "<h2>Nome do Arquivo Enviado:</h2>";
        echo "<p>" . htmlspecialchars($nomeArquivo) . "</p>";
    } else {
        echo "<h2>Erro no upload do arquivo.</h2>";
        if (isset($_FILES["arquivoEnviado"])) {
            echo "<p>Erro: " . $_FILES["arquivoEnviado"]["error"] . "</p>";
        }
    }
} else {
    echo "<h2>Por favor, envie o formulário.</h2>";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="geracartao.css">
    <title>Convite</title>
</head>

<body>
    <h2>Convite</h2>
    <p>Nome do evento: <?php echo $nomEvento; ?></p>
    <p>Data: <?php echo $dataEvento; ?></p>
    <p>Hora: <?php echo $horaEvento; ?></p>
    <p>Local: <?php echo $localEvento; ?></p>
    <p>Descrição: <?php echo $descricaoEvento; ?></p>
    <p>Cor: <?php echo $corEvento; ?></p>
    <p>Tema: <?php echo $temaEvento; ?></p>
    <p>Nome do contato: <?php echo $nomContato; ?></p>
    <p>Email do contato: <?php echo $emailContato; ?></p>
    <p>Telefone do contato: <?php echo $telContato; ?></p>
</body>

</html>