<?php
session_start();
require_once('conexao.php');
if (isset($_POST['cadastro'])) {
   
    $matricula = $_POST["matricula"];
    $nomeCompleto = $_POST["nomeCompleto"];
    $curso = $_POST["curso"];
    $turma = $_POST["turma"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rg = $_POST["rg"];
    $dataDeNascimento = $_POST["dataDeNascimento"];
    $phone = $_POST["phone"];
    $foto = $_POST["foto"];

    $testaEmail = $mysqli->query("SELECT COUNT(*) FROM aluno where email = '{$email}'");
    $linha = $testaEmail->fetch_row();
    if ($linha[0] > 0) {
        echo "<script>alert('Email já cadastrado')</script>";
        echo "<script>window.location.href='src/aluno.php'</script>";
    } else {
        $sql = "insert into aluno(matricula, email, senha, nome, rg, foto, telefone, data_nasc, curso, turma ) values ('$matricula','$email','$password','$nomeCompleto','$rg', '$foto','$phone','$dataDeNascimento', '$curso','$turma')";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            echo "<script>window.location.href='src/login.php'</script>";
        }
    }
}
if (isset($_POST['professor'])) {
   
    $matricula = $_POST["SIAPE"];
    $nomeCompleto = $_POST["nomeCompleto"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rg = $_POST["rg"];
    $dataDeNascimento = $_POST["dataDeNascimento"];
    $phone = $_POST["phone"];
    $foto = $_POST["foto"];

    $testaEmail = $mysqli->query("SELECT COUNT(*) FROM docente where email = '{$email}'");
    $linha = $testaEmail->fetch_row();
    if ($linha[0] > 0) {
        echo "<script>alert('Email já cadastrado')</script>";
        echo "<script>window.location.href='src/aluno.php'</script>";
    } else {
        $sql = "insert into docente(SIAPE, email, senha, nome, rg, foto, telefone, data_nasc) values ('$matricula','$email','$password','$nomeCompleto','$rg', '$foto','$phone','$dataDeNascimento')";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            echo "<script>window.location.href='src/login.php'</script>";
        }
    }
}

if (isset($_POST['servidor'])) {
   
    $matricula = $_POST["SIAPE"];
    $nomeCompleto = $_POST["nomeCompleto"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rg = $_POST["rg"];
    $dataDeNascimento = $_POST["dataDeNascimento"];
    $phone = $_POST["phone"];
    $foto = $_POST["foto"];

    $testaEmail = $mysqli->query("SELECT COUNT(*) FROM servidor where email = '{$email}'");
    $linha = $testaEmail->fetch_row();
    if ($linha[0] > 0) {
        echo "<script>alert('Email já cadastrado')</script>";
        echo "<script>window.location.href='src/aluno.php'</script>";
    } else {
        $sql = "insert into servidor(SIAPE, email, senha, nome, rg, foto, telefone, data_nasc) values ('$matricula','$email','$password','$nomeCompleto','$rg', '$foto','$phone','$dataDeNascimento')";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            echo "<script>window.location.href='src/login.php'</script>";
        }
    }
}
?>