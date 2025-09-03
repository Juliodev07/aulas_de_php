<?php
$custo = $_POST['custo'];

if ($custo <= 39999.99) {
    $distribuidor = 0.05;
    $imposto = 0;
} elseif ($custo <= 69999.99) {
    $distribuidor = 0.10;
    $imposto = 0.15;
} else {
    $distribuidor = 0.15;
    $imposto = 0.20;
}

$preco = $custo + ($custo * $distribuidor) + ($custo * $imposto);


echo "<h2>Resultado</h2>";
echo "Custo de fábrica: R$  $preco"; 
?>
