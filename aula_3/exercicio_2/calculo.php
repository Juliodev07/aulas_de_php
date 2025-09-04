<?php
$valor = $_GET['valor'];
$tipo = $_GET['tipo'];

if ($tipo ==1 ){
    $valorCorrigido = $valor + ($valor * 0.03);
    echo "investimento: Poupança <br>";
} else{
    $valorCorrigido = $valor + ($valor * 0.04);
    echo "investimento: Fundo de renda fixa <br>";
}

echo "Valor inicial:R$ $valor <br>";
echo"valor corrigido: R$ $valorCorrigido <br>";

?>