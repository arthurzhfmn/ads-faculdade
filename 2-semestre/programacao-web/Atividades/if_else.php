<?php

$latencia = 100;

if ($latencia == 0) {
    echo "CRÍTICO: Equipamento Inacessível (Time Out)";
} elseif ($latencia <= 50) {
    echo "OK: Conexão Excelente";
} elseif ($latencia <= 150) {
    echo "Aviso: Conexão Aceitável, mas requer atenção";
} else {
    echo "ERRO: Latência Alta! Verifique o link.";
}

?>