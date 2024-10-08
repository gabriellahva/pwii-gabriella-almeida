<?php
echo "Cálculo de IMC em PHP";
echo "<br/>";

$peso = 70;
$altura = 1.75;

switch ($imc){
    case ($imc < 18.5);
    echo $imc, "Magreza";
break;

case ($imc >= 18.5 && $imc < 25);
echo $imc = "Classificação: Normal";
break;

case ($imc >= 25 && $imc < 30);
echo $imc = "Classificação: Obesidade Grau I";
break;

case ($imc >= 30 && $imc < 40);
echo $imc = "Classificação: Obesidade Grau II";
break;

case ($imc >=40);
echo $imc = "Classificação: Obesidade Grau III";
break;

default:
echo "Erro";

}