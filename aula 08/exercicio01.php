<?php

$valorProduto1 = 200;
$valorProduto2 = 500;

$descProduto1 = 0.08;
$descProduto2 = 0.11;

$desconto1 = $valorProduto1 * $descProduto1;
$desconto2 = $valorProduto2 * $descProduto2;

$valorTotal1 = $valorProduto1 * $desconto1;
$valorTotal2 = $valorProduto2 * $desconto2;

$valorTotal = $valorTotal1 + $valorTotal2;

echo "O valor final do primeiro produto é R$: $valorTotal1", "<br>";
echo "O valor final do segundo produto é R$: $valorTotal2", "<br>";
echo "O valor total a ser pago é R$: $valorTotal", "<br>";

?>