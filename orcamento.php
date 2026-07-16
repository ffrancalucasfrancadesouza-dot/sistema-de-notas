<?php

$cliente = $_POST['cliente'];
$telefone = $_POST['telefone'];
$veiculo = $_POST['veiculo'];
$placa = $_POST['placa'];
$maoObra = $_POST['maoObra'];
$total = $_POST['total'];

?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Orçamento</title>

    <style>
        body {

            font-family: Arial;

            padding: 30px;

        }

        .logo {

            text-align: center;

            font-size: 28px;

            font-weight: bold;

            margin-bottom: 30px;

        }

        table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 20px;

        }

        td {

            padding: 10px;

            border: 1px solid #ccc;

        }

        .total {

            font-size: 22px;

            font-weight: bold;

            margin-top: 25px;

            text-align: right;

        }

        button {

            margin-top: 40px;

            padding: 15px 40px;

            font-size: 18px;

            background: #1565c0;

            color: white;

            border: none;

            cursor: pointer;

        }

        @media print {

            button {

                display: none;

            }

        }
    </style>

</head>

<body>

    <div class="logo">

        🚗 NEGUINHO MECÂNICA AUTOMOTIVA

    </div>

    <table>

        <tr>

            <td><strong>Cliente</strong></td>

            <td><?= $cliente ?></td>

        </tr>

        <tr>

            <td><strong>Telefone</strong></td>

            <td><?= $telefone ?></td>

        </tr>

        <tr>

            <td><strong>Veículo</strong></td>

            <td><?= $veiculo ?></td>

        </tr>

        <tr>

            <td><strong>Placa</strong></td>

            <td><?= $placa ?></td>

        </tr>

        <tr>

            <td><strong>Mão de Obra</strong></td>

            <td>R$ <?= number_format($maoObra, 2, ",", ".") ?></td>

        </tr>

    </table>

    <div class="total">

        TOTAL: R$
        <?= number_format($total, 2, ",", ".") ?>

    </div>

    <button onclick="window.print()">

        🖨 Imprimir / Salvar PDF

    </button>

</body>

</html>