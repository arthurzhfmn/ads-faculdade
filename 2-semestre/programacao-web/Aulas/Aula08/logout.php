<?php 
session_start();

// Limpar os caches da sessão
session_unset();

// Encerrar a session
session_destroy();
echo "Sessão encerrada com sucesso!";
// Redireciona depois de 2 segundos
header("Refresh: 2; url=index.php");