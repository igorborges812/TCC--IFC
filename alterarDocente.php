<?php
session_start();
require_once('conexao.php');
if (isset($_POST['alterarD'])) {
   
    $SIAPE = $_POST["SIAPE"];
    $nomeCompleto = $_POST["nomeCompleto"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rg = $_POST["rg"];
    $dataDeNascimento = $_POST["dataDeNascimento"];
    $phone = $_POST["phone"];
    $cod =  $_SESSION['codD'];


        $sql = "Update docente set
            SIAPE = '$SIAPE', email = '$email', senha = '$password', nomeD = '$nomeCompleto', rg = '$rg', telefone = '$phone', data_nasc = '$dataDeNascimento'
            WHERE codD = '$cod'";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            $_SESSION['SIAPE'] =  $SIAPE;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            $_SESSION['nomeD'] = $nomeCompleto;
            $_SESSION['rg'] = $rg;
            $_SESSION['telefone'] = $phone;
            $_SESSION['data_nasc'] = $dataDeNascimento;
            echo "<script>window.location.href='src/telaperfilProfessor.php'</script>";
        }
    }

