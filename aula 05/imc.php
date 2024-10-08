<?php
echo "Cálculo de IMC em PHP";
echo "<br/>";

$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura ** 2);

if ($imc < 18.5) {
    echo "<br/>";
    echo $imc = "Classificação: Magreza";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "<br/>";
    echo $imc = "Classificação: Normal";
} elseif($imc >= 25 && $imc < 30) {
    echo "<br/>";
    echo $imc = "Classificação: Obesidade Grau I";
} elseif ($imc >= 30 && $imc < 40) {
    echo "<br/>";
    echo $imc = "Classificação: Obesidade Grau II";
} elseif ($imc >= 40) {
    echo "<br/>";
    echo $imc = "Classificação: Obesidade Grau III";
}

?>