<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome_cliente"];
    $valor_compra = $_POST["valor_compra"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $desconto = 0;

    if ($forma_pagamento == "cartao") {
        $desconto = 0;
        $mensagem = "Olá $nome, sua compra de R$ $valor_compra foi realizada com cartão de crédito. Não há desconto.";
    } elseif ($forma_pagamento == "boleto") {
        $desconto = $valor_compra * 0.08; 
         $valorfinal = $valor_compra - $desconto;

        $mensagem = "Olá $nome, sua compra de R$ $valor_compra foi realizada com boleto. Seu desconto é de R$ $desconto, valor final do pagamento: $valorfinal.";
    } elseif ($forma_pagamento == "deposito") {
        $desconto = $valor_compra * 0.1; 
         $valorfinal = $valor_compra - $desconto;

        $mensagem = "Olá $nome, sua compra de R$ $valor_compra foi realizada com depósito. Seu desconto é de R$ $desconto, valor final do pagamento: $valorfinal.";
    } else {
        $mensagem = "Forma de pagamento inválida.";
    }

    $valorfinal = $valor_compra - $desconto;

$valor_compra_formatado = number_format($valor_compra, 2, ',', '.');
$desconto_formatado = number_format($desconto, 2, ',', '.');
$valorfinal_formatado = number_format($valorfinal, 2, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoção Madeira e Cia</title>


    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }


        body {

            font-family: Arial, Helvetica, sans-serif;

            background: #f2f5f4;

            color: #333;
        }

        header {

     
        background: #683904;

            color: white;

            text-align: center;
             padding: 30px 20px; 
        }


        header h1 {

            font-size: 28px;

            margin-bottom: 8px;
        }


        header p {

            font-size: 15px;

            opacity: 0.9;
        }

        main {

            min-height: calc(100vh - 130px);

            display: flex;

            justify-content: center;

            align-items: center;

            padding: 30px 15px;
        }

        .formulario {

            background: white;

            width: 100%;

            max-width: 550px;

            padding: 35px;

            border-radius: 12px;

            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
        }


        .formulario h2 {

            color: #683904;

            margin-bottom: 25px;

            text-align: center;
        }


        .mensagem {

            background: #f8f5f1;

            border-left: 5px solid #683904;

            padding: 15px;

            margin-bottom: 25px;

            line-height: 1.5;
        }


        .resultado {

            margin-bottom: 25px;
        }


        .resultado p {

            padding: 12px 0;

            border-bottom: 1px solid #ddd;

            font-size: 17px;
        }


        .resultado p:last-child {

            border-bottom: none;

            font-size: 20px;

            color: #683904;
        }

        .botao {

            display: block;

            width: 100%;

            padding: 13px;

            border: none;

            border-radius: 6px;

            background-color: #683904;

            color: white;

            font-size: 17px;

            font-weight: bold;

            text-align: center;

            text-decoration: none;

            cursor: pointer;

            transition: 0.3s;
        }


        .botao:hover {

            background-color: #4d2903;
        }

            header h1 {

                font-size: 22px;
            }

        

    </style>

</head>


<body>


    
    <header>

        <h1> PROMOÇÃO MADEIRA E CIA LTDA </h1>

        <p> Resultado da sua compra </p>

    </header>



    <main>

        <div class="formulario">

            <h2>
                Resultado da Compra
            </h2>
            <div class="mensagem"> 
            <?php echo $mensagem;?>

            </div>



            <div class="resultado">

                <p> <strong>Valor da compra: R$ </strong> R$<?php echo $valor_compra_formatado; ?> </p>


                <p> <strong> Desconto: R$ </strong> R$ <?php echo $desconto_formatado; ?> </p>


                <p> <strong> Valor final: R$ </strong> R$ <?php echo $valorfinal_formatado;?> </p>

            </div>

            <a href="Agenda03.html" class="botao"> Voltar ao formulário </a>


        </div>

    </main>


</body>

</html>
