<?php
$aluno = $_REQUEST['nome'];
$disciplina = $_REQUEST['disciplina'];
$nota1 = $_REQUEST['nota1'];
$nota2 = $_REQUEST['nota2'];

$media = ($nota1 + $nota2) / 2;

echo "<h1>Resultado final:</h1>";
echo "Aluno: $aluno <br>";
echo "disciplina $disciplina <br>";
echo "Media final: $media";

?>
