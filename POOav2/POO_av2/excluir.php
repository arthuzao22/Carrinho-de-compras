<?php
include 'header.php';
include 'produto.class.php';
session_start();

unset($_SESSION['itens'][$_GET['id_produto']]);

header('Location: carrinho.php');
?>