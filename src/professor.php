<?php include ("../conexao.php");
session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>
<body>
<div class="container">
        <div class="content third-content">
            <div class="first-column">
                <h2 class="title title-first">Prezado usuário!</h2>
                <p class="description description-primary">Caso não seja um professor, </p>
                <p class="description description-primary">retorne para a seleção de cadastro.</p>
                <p><a href="login.php"> <button class="btn btn-second"></i>Voltar</button></a></p>
            </div>

            <form class="forma" method="post" action="../cadastroAluno.php">
                

                <div class="second-column">
                    <h2 class="title title-second">Cadastre-se!</h2>
                    <label class="second-label-input" for="">
                        <i class="far fa-address-card icon-modify"></i>
                        <input type="number" placeholder="SIAPE" name="SIAPE" >
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome Completo" name="nomeCompleto" >
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email"name="email" >
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha" name="password" >
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-id-card icon-modify"></i>
                        <input type="number" placeholder="RG" name="rg" >
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-birthday-cake icon-modify"></i>
                        <input class="data"type="date" placeholder="Data de Nascimento" name="dataDeNascimento" >
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-phone icon-modify"></i>
                        <input type="tel" id="phone" name="phone" placeholder="123-45-678" required>
                    </label>

                    <label class="second-label-input" for="">
                        <i class="fas fa-image icon-modify"></i>
                        <input type="file" name="foto" id="foto">
                    </label>
                    <button class="btn btn-second" name="professor" >entrar</button>
                </div>
            </form>
        </div>
    
    </div>
</body>
</html>