<?php
include 'header.php';
include 'produto.class.php';
session_start();

unset($_SESSION['itens']);

header('Location: carrinho.php');
?>