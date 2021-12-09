<?php
session_start();
require_once('conexao.php');
if (isset($_POST['alterarA'])) {
   
    $matricula = $_POST["matricula"];
    $nomeCompleto = $_POST["nomeCompleto"];
    $curso = $_POST["curso"];
    $turma = $_POST["turma"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rg = $_POST["rg"];
    $dataDeNascimento = $_POST["dataDeNascimento"];
    $phone = $_POST["phone"];
    $codA =  $_SESSION['codA'];


        $sql = "Update aluno set
            matricula = '$matricula', email = '$email', senha = '$password', nome = '$nomeCompleto', rg = '$rg', telefone = '$phone', data_nasc = '$dataDeNascimento', curso = '$curso', turma = '$turma'
            WHERE codA = '$codA'";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            $_SESSION['matricula'] =  $matricula ;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $password;
            $_SESSION['nome'] = $nomeCompleto;
            $_SESSION['curso'] = $curso;
            $_SESSION['turma'] = $turma;
            $_SESSION['rg'] = $rg;
            $_SESSION['telefone'] = $phone;
            $_SESSION['data_nasc'] = $dataDeNascimento;
            echo "<script>window.location.href='src/telaperfilAluno.php'</script>";
        }
    }

