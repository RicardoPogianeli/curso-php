<div class="titulo">Variáveis</div>

<?php
$numeroA= 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel, '<br>';

$variavel = "Agora sou uma string!";
echo '<b>' . $variavel;

//Nome de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida';
//$6var = 'invalida';
//$%var7 = 'invalida';
//$8var% = 'invalida';

echo '<br>';
var_dump($_SERVER ["HTTP_HOST"]);

