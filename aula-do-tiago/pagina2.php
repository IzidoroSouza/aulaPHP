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
}

date_default_timezone_set('America/Sao_Paulo');
// Inicializa as variáveis de data e hora
$data = date('d/m/Y'); // Exemplo de data
$hora = date('H:i:s');   // Exemplo de hora

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['opcao'])) {
        $escolha = htmlspecialchars($_POST['opcao']);
    } else {
        $escolha = "Nenhuma opção selecionada.";
        die;
    }

    // Atribui o valor do produto com base na escolha
    if ($escolha == "Headset HyperX") {
        $valorDaCompra = 299.90;
        $imagem = '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdWHj3aGMU8elucDrtIAwbFWaXmUXXYF_UmA&s" alt="">';
    } else if ($escolha == "SSD Kingston 480 GB") {
        $valorDaCompra = 458.71;
        $imagem = '<img src="https://cdn.awsli.com.br/300x300/1945/1945193/produto/216758902/960-comybi0bqz.jpg" alt="">';
    } else if ($escolha == "Teclado Mecânico") {
        $valorDaCompra = 235.18;
        $imagem = '<img src="https://cdn.awsli.com.br/300x300/1251/1251495/produto/290692007/teclado-mecanico-gamer-redragon-fizz-pro-rgb-preto-switch-marrom-k616-rgb-b-pt-b-a3a2xq31o2.jpg" alt="">';
    }

        if (isset($_POST['checkPresente'])) {
            // Incrementa o valor de $num com a quantidade de checkboxes selecionadas
            $valorDaCompra += 10;
            $resultPresente="Para presente";
        }
        else {
            $resultPresente ="Sem presente";
        }
        if (isset($_POST['checkGarantia'])) {
            // Incrementa o valor de $num com a quantidade de checkboxes selecionadas
            $valorDaCompra += 50;
            $resultGarantia="Com garantia";
        }
        else {
            $resultGarantia ="Sem garantia";
        }
        if (isset($_POST['checkSeguro'])) {
            // Incrementa o valor de $num com a quantidade de checkboxes selecionadas
            $valorDaCompra += 100;
            $resultSeguro="Com seguro";
        }
        else {
            $resultSeguro ="Sem seguro";
        }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcaoSelecionada = $_POST['opcoes'];
    if ($opcaoSelecionada=="À vista"){
        $resultadoDesconto = $valorDaCompra - ($valorDaCompra*(0.05));
    }
    if ($opcaoSelecionada=="Débito"){
        $resultadoDesconto = $valorDaCompra + ($valorDaCompra*(0.1));
    }
    if ($opcaoSelecionada=="Crédito"){
        $resultadoDesconto = $valorDaCompra + ($valorDaCompra*(0.03));
    }
}
function formatarParaDuasCasas($valor) {
    return number_format($valor, 2, '.', '');
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <table border="1">
        <tr>
            <td>Data</td>
            <td><?php echo $data; ?></td>
        </tr>
        <tr>
            <td>HORA</td>
            <td><?php echo $hora;?></td>
        </tr>
        <tr>
            <td>Nome do Cliente</td>
            <td><?php echo $nome;?></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><?php echo $endereco; ?></td>
        </tr>
        <tr>
            <td>Produto Escolhido</td>
            <td><?php echo $escolha; 
                ?></td>
        </tr>
        <tr>
            <td>Imagem</td>
            <td><?php echo $imagem; ?></td>
        </tr>
        <tr>
            <td>Detalhes da Compra</td>
            <td><?php 
            echo $resultPresente."<br>";
            echo $resultGarantia."<br>";
            echo $resultSeguro."<br>";
            ?></td>
        </tr>
        <tr>
            <td>Valor da Compra</td>
            <td><?php echo "R$".formatarParaDuasCasas($resultadoDesconto); ?></td>
        </tr>
    </table>
    
</body>
</html>