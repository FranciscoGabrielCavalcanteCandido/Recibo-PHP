<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="recibosheet" href="./recibo.css">

<body>

    <?php
    $valor = $_POST['valorInput'];
    $mes = $_POST['mesRef'];
    $ano = $_POST['anoInput'];
    $residente = $_POST['inquilino'];
    $cpfCnpjInquilino = $_POST['cpfCnpj'];
    $proprietario = $_POST['propi'];
    $cpfCnpjProprietario = $_POST['cpfCnpjPro'];
    $rua = $_POST['ruaImovel'];
    $complementoI = $_POST['complementoInput'];
    $num = $_POST['numeroImovel'];
    $bairroImovel = $_POST['bairro'];
    $cidade = $_POST['cidadeImovel'];
    $estado = $_POST['estadoImovel'];
    ?>

    <?php
    echo "Recebemos do Inquilino " .$residente."<br>"; 
    echo "O pagamento do aluguel de um(a), " .$complementoI. "<br>";
    echo "No valor de ".$valor. "<br>";
    echo "Referente ao mes de " .$mes. "<br>";
    echo "Ano " .$ano. "<br>";
    ?>

</body>