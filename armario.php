<?php
session_start();
require_once('conexao.php');
if (isset($_POST['armarioA'])){


$seatsG = $_POST["meucheckbox"];
$cod = $_SESSION['cod'];

$sql = "Update armario set
            disponivel = 1, fk_cod_usuario = '$cod'
            WHERE numero = '$seatsG'";
        $query = $mysqli->query($sql) or die($mysqli->error);

        if (!$query) {
            echo "<script>alert('erro!')</script>";
        } else {
            echo "<script>window.location.href='src/telaperfilAluno.php'</script>";
        }

    }

    if (isset($_POST['armarioD'])){


        $seatsG = $_POST["meucheckbox"];
        $cod = $_SESSION['cod'];
        
        $sql = "Update armario set
                    disponivel = 1, fk_cod_docente = '$cod'
                    WHERE numero = '$seatsG'";
                $query = $mysqli->query($sql) or die($mysqli->error);
        
                if (!$query) {
                    echo "<script>alert('erro!')</script>";
                } else {
                    echo "<script>window.location.href='src/telaperfilProfessor.php'</script>";
                }
        
        }
?>

