<?php 
    include 'produto.class.php';
    session_start();

    $chave = $_GET['id_produto'];
    
    $_SESSION['itens'][$chave]->qtde_produto += 1;

    $_SESSION['itens'][$chave]->sub_total = $_SESSION['itens'][$chave]->qtde_produto * $_SESSION['itens'][$chave]->valor_produto;
    header('Location: carrinho.php');
?>
