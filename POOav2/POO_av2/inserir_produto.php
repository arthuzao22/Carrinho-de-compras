<?php
    include 'produto.class.php';
    session_start();
    unset($_SESSION['produtos']);

    $pd = new produto;
    $pd->valor_produto='10';
    $pd->nome_produto='TIRAMISU';
    $pd->img_produto='1.jpg';
    $pd->qtde_produto='1';
    $pd->sub_total=10;
    $_SESSION['produtos'][] = $pd;

    $pd1 = new produto;
    $pd1->valor_produto='8';
    $pd1->nome_produto='CHIA';
    $pd1->img_produto="2.jpg";
    $pd1->qtde_produto='1';
    $pd1->sub_total=8;
    $_SESSION['produtos'][] = $pd1;

    $pd2 = new produto;
    $pd2->valor_produto='7';
    $pd2->nome_produto='CHEESECAKE';
    $pd2->img_produto="4.jpg";
    $pd2->qtde_produto='1';
    $pd2->sub_total=7;
    $_SESSION['produtos'][] = $pd2;

    $pd3 = new produto;
    $pd3->valor_produto='7';
    $pd3->nome_produto='CHOCOLATE CAKE';
    $pd3->img_produto="677u.jpg";
    $pd3->qtde_produto='1';
    $pd3->sub_total=7;
    $_SESSION['produtos'][] = $pd3;

    $pd4 = new produto;
    $pd4->valor_produto='7';
    $pd4->nome_produto='CHEESE';
    $pd4->img_produto="7.jpg";
    $pd4->qtde_produto='1';
    $pd4->sub_total=7;
    $_SESSION['produtos'][] = $pd4;

    $pd5 = new produto;
    $pd5->valor_produto='10';
    $pd5->nome_produto='ORANGE CAKE';
    $pd5->img_produto="ORANGECAKE.JPG";
    $pd5->qtde_produto='1';
    $pd5->sub_total=10;
    $_SESSION['produtos'][] = $pd5;
?>