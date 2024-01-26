<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cafeteria";
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die ('erro ao tentar se conectar');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else{
        header('Location: index.php');
    }

    $sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha' ";

    $result = mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_cliente'] = $row['cod_atendente'];

        $sql = mysql_query("INSERT INTO $produtos()");

        header('Location: teste.html');
    }else {
        header('Location: dadosincorretos.php');
    }

    mysqli_close($conn);
?>