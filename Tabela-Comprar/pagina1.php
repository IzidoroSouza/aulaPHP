<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagina2.php" method="POST">
    <table border=1>
        <tr>
        <td>Nome</td>
        <td>
            <input type="text" name="nome" id="nome" required>
        </td>
        </tr>
        <tr>
        <td>Produto</td>
        <td>
        <label><input type="radio" name="opcao" value="Headset HyperX"> Headset HyperX R$ 299,90</label><br>
        <label><input type="radio" name="opcao" value="SSD Kingston 480 GB"> SSD Kingston 480 GB R$ 458,71</label><br>
        <label><input type="radio" name="opcao" value="Teclado Mecânico"> Teclado Mecânico R$ 235,18</label><br>
        </td>
        </tr>
        <tr>
        <td>Forma de pagamento</td>
        <td>
        <select id="opcoes" name="opcoes">
        <option value="À vista">À vista</option>
        <option value="Débito">Débito</option>
        <option value="Crédito">Crédito</option>
        </select>
        </td>
        </tr>
        <tr>
        <td>Detalhes</td>
        <td>
            <input type="checkbox" name="checkPresente" id="" value="Para presente">Para presente <br>
            <input type="checkbox" name="checkGarantia" id="" value="Com garantia estendida">Com garantia estendida <br>
            <input type="checkbox" name="checkSeguro" id="" value="Com seguro">Com seguro <br>
        </td>
        </tr>
        <tr>
        <td>Endereço</td>
        <td><input type="text" name="endereco" id="endereco" required></td>
        </tr>
    </table>
    <button type="submit">Enviar</button>
    <input type="reset" value="Limpar">
</form>
</body>
</html>
