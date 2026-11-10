<?php
session_start();
require_once "functions.php";

if (!isset($_SESSION['ativa']) || $_SESSION['nivel'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    deleteProduto($conexao, $_GET['id']);
} else {
    header("Location: admin.php");
    exit();
}
?>