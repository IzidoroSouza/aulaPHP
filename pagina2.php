<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificando se o campo 'nome' foi enviado
    if (isset($_POST['nome'])) {
        $nome = htmlspecialchars($_POST['nome']); // Sanitizando o nome
    }
    // Verificando se o campo 'endereco' foi enviado
    if (isset($_POST['endereco'])) {
        $endereco = htmlspecialchars($_POST['endereco']); // Sanitizando o endereço
    }
    if (isset($_POST['opcao'])) {
        $opcao = htmlspecialchars($_POST['opcao']); // Sanitizando a opção escolhida
    }
}

// Inicializa as variáveis de data e hora
$data = date('d/m/Y'); // Exemplo de data
$hora = date('H:i');   // Exemplo de hora
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Cliente</title>
</head>
<body>
    <h1>Dados do Cliente</h1>
    <table border="1">
        <tr>
            <td>Data</td>
            <td><?php echo $data; ?></td>
        </tr>
        <tr>
            <td>Hora</td>
            <td><?php echo $hora;?></td>
        </tr>
        <tr>
            <td>Nome do cliente</td>
            <td><?php echo $nome;?></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><?php echo $endereco; ?></td>
        </tr>
        <tr>
            <td>Produto Escolhido</td>
            <td><?php   if ($opcao) {
                    echo "Você escolheu: " . $opcao;
                } else {
                    echo "Nenhuma opção foi escolhida.";
                }
                ?></td>
        </tr>
        <tr>
            <td>Imagem</td>
            <td></td>
        </tr>
        <tr>
            <td>Detalhes da Compra</td>
            <td></td>
        </tr>
        <tr>
            <td>Valor da Compra</td>
            <td></td>
        </tr>
    </table>
    
</body>
</html>