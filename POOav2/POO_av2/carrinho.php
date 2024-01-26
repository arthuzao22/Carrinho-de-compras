<?php
include 'header.php';
include 'produto.class.php';
session_start();
?>

<body>
    <style>
        .imgg {
            width: 170px;
            border-radius: 9px;
        }

        #cardProduto {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .bts {
            display: flex;
            padding: 1px;
        }

        .bts button {
            margin-right: 0.5rem;
            font-size: 0.9rem;
        }

        .bts a {
            margin-left: 0.5rem;
            font-size: 0.9rem;
        }
    </style>
    <?php

    //
    //  echo '<pre>';
    //  print_r($_SESSION['itens']);
    //  echo '</pre>';
    
    // echo $itens->valor_produto;
    // echo $itens->nome_produto;
    
    // echo($_SESSION['itens']);
    
    // echo $_GET['id_produto'];
    // $_SESSION["nome_produto"];
    
    //echo var_dump($nome_produto);
    
    ?>
    <center>
        <h1 style="color: white;">
            Carrinho de compras
            <a class="btn btn-danger" href="excluirtudo.php" data-bs-toggle="modal" data-bs-target="#excluirtd">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                    viewBox="0 0 16 16">
                    <path
                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd"
                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                </svg>
            </a>
        </h1>
        <div style="width: 100%; height: 60px;">

        </div>
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <tbody>
                        <?php if (isset($_SESSION['itens']) > 0) {
                            //inicia a vareavel com o valor nulo, e depois executa ela para fazer a soma total dos produtos com o foreach
                            $qtde_produto = 0;
                            $valortotal = 0;
                            foreach ($_SESSION['itens'] as $chave => $it) { ?>

                        <table style="margin-top: 30px; background-color: white; border-radius: 20px;"
                            class="table border border-dark">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img class="imgg" src="<?php echo 'images/' . $it->img_produto ?>" alt="">

                                        <div class="modal fade" id="exampleModal<?php echo $chave ?>" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        Você deseja excluir este produto do seu carrinho?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Não</button>
                                                        <a class="btn btn-danger"
                                                            href="excluir.php?id_produto=<?php echo $chave ?>">
                                                            Sim</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <td>
                                        <h5 style="margin-left: -200px; margin-top: 30px;"
                                            class="u-text u-text-palette-2-base u-text-2" data-lang-en="​tiramisu cake">
                                            Nome:
                                            <?php echo $it->nome_produto ?>
                                        </h5>
                                        <h5 style="margin-left: -200px;">Valor: R$
                                            <?php echo $it->sub_total ?>
                                        </h5>
                                    </td>
                                    <td>
                                        <a style="margin-top: 40px;" class="btn btn-primary"
                                            href="diminuir.php?id_produto=<?php echo $chave ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                                            </svg>
                                        </a>
                                        <?php
                                $qtde_produto = $it->qtde_produto;
                                        ?>
                                        <span>
                                            <?php echo $qtde_produto ?>
                                        </span>

                                        <a style="margin-top: 40px;" class="btn btn-primary"
                                            href="alterar.php?id_produto=<?php echo $chave ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                            </svg>
                                        </a>
                                        </a>
                                    </td>
                                    <td>
                                        <a style="margin-top: 40px;" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal<?php echo $chave ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg>

                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <?php
                                // calcula o valor total
                                $valortotal += $it->sub_total * 1;
                            }
                        } ?>
                    </tbody>
                </div>
                <div class="col-3">
                    <div style="margin-top: 30px;" class="card border border-dark" style="width: 18rem">
                        <div class="card-body">
                            <h3 class="card-title">Resumo</h3>
                            <hr>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat amet natus minus quasi
                                dolorum vel quod, ratione hic in
                            </p>
                            <p class="card-text">
                            <h6>Frete :R$ 0,00</h6>
                            <?php
                            echo ' <h5>O valor total das compras foi de: R$ ' . $valortotal . '</h5>';
                            ?>
                            </p>
                            <div class="bts" style="margin-left: 1rem;">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Finalizar compra
                                </button>
                                <a href="index.php" class="btn btn-primary">Comprar Mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <!-- Button trigger modal -->


    <!-- Modal -->

    <div class="modal fade" id="exampleModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Logar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="verificacao_login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                    <p>
                </div>
                <div class="modal-footer">

                    <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                        style="cursor: pointer; color: blue; text-decoration: underline;">Cadastrar-se</a>
                </div>
                </p>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login_cliente.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nome completo</label>
                            <input type="text" name="nome_completo" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Username</label>
                            <input type="text" name="usuario" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to
                        first</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal excluirtudo -->
    <div class="modal fade" id="excluirtd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    Você deseja excluir todos produtos do carrinho?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                    <a class="btn btn-danger" href="excluirtudo.php">
                        Sim</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>