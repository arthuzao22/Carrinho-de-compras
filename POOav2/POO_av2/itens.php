<?php
    include 'produto.class.php';
    session_start();

    $_SESSION['itens'][] = $_SESSION['produtos'][$_GET['id_produto']];
    header("Location: carrinho.php");
?>