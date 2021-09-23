<?php
session_start();
require_once('conexao.php');
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = $mysqli->query("SELECT * FROM aluno WHERE email = '{$email}' and senha = '{$password}'");
    $linhas = mysqli_num_rows($sql);
    $sqlP = $mysqli->query("SELECT * FROM docente WHERE email = '{$email}' and senha = '{$password}'");
    $linhasP = mysqli_num_rows($sqlP);
    $sqlS = $mysqli->query("SELECT * FROM servidor WHERE email = '{$email}' and senha = '{$password}'");
    $linhasS = mysqli_num_rows($sqlS);
    if ($linhas > 0) {
        $resultUsu = "SELECT * FROM aluno WHERE email = '{$email}'";
        $resultadoUsu = mysqli_query($mysqli, $resultUsu);
        $linhaUsu = mysqli_fetch_assoc($resultadoUsu);
        $_SESSION['cod']= $linhaUsu['cod'];
        $_SESSION['matricula'] = $linhaUsu['matricula'];
        $_SESSION['email'] = $linhaUsu['email'];
        $_SESSION['senha'] = $linhaUsu['senha'];
        $_SESSION['nome'] = $linhaUsu['nome'];
        $_SESSION['curso'] = $linhaUsu['curso'];
        $_SESSION['turma'] = $linhaUsu['turma'];
        $_SESSION['rg'] = $linhaUsu['rg'];
        $_SESSION['foto'] = $linhaUsu['foto'];
        $_SESSION['telefone'] = $linhaUsu['telefone'];
        $_SESSION['data_nasc'] = $linhaUsu['data_nasc'];
        echo "<script>window.location.href='src/telaperfilAluno.php'</script>";
    } else if ($linhasP > 0) {
        $resultUsu = "SELECT * FROM docente WHERE email = '{$email}'";
        $resultadoUsu = mysqli_query($mysqli, $resultUsu);
        $linhaUsu = mysqli_fetch_assoc($resultadoUsu);
        $_SESSION['cod']= $linhaUsu['cod'];
        $_SESSION['SIAPE'] = $linhaUsu['SIAPE'];
        $_SESSION['email'] = $linhaUsu['email'];
        $_SESSION['senha'] = $linhaUsu['senha'];
        $_SESSION['nome'] = $linhaUsu['nome'];
        $_SESSION['rg'] = $linhaUsu['rg'];
        $_SESSION['foto'] = $linhaUsu['foto'];
        $_SESSION['telefone'] = $linhaUsu['telefone'];
        $_SESSION['data_nasc'] = $linhaUsu['data_nasc'];
        echo "<script>window.location.href='src/telaperfilProfessor.php'</script>";
    } else if ($linhasS > 0) {
        $resultUsu = "SELECT * FROM servidor WHERE email = '{$email}'";
        $resultadoUsu = mysqli_query($mysqli, $resultUsu);
        $linhaUsu = mysqli_fetch_assoc($resultadoUsu);
        $_SESSION['cod']= $linhaUsu['cod'];
        $_SESSION['SIAPE'] = $linhaUsu['SIAPE'];
        $_SESSION['email'] = $linhaUsu['email'];
        $_SESSION['senha'] = $linhaUsu['senha'];
        $_SESSION['nome'] = $linhaUsu['nome'];
        $_SESSION['rg'] = $linhaUsu['rg'];
        $_SESSION['foto'] = $linhaUsu['foto'];
        $_SESSION['telefone'] = $linhaUsu['telefone'];
        $_SESSION['data_nasc'] = $linhaUsu['data_nasc'];
        echo "<script>window.location.href='src/telaperfilServidor.php'</script>";
    }
    else {
        echo "<script>alert('erro!')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}

?>

  

     