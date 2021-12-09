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
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-first">Bem-Vindo!</h2>
                <p class="description description-primary">Caso não possua uma conta, cadastre-se</p>
                <p class="description description-primary">com suas informações pessoais.</p>
                <button id="signin" class="btn btn-primary">Cadastrar</button>

            </div>

            <form class="form" method="post" action="../loginuser.php">
                <div class="second-column">
                    <h2 class="title title-second">Entrar no Sistema</h2>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input name="email"type="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input name="password"type="password" placeholder="Senha">
                    </label>
                    <button class="btn btn-second" name = "login">Entrar</button>
                </div>
            </form>

        </div>
        <div class="content second-content">
            <div class="first-column">
                <h2 class="title title-first">Bem Vindo!</h2>
                <p class="description description-primary">Caso já possua uma conta, </p>
                <p class="description description-primary">faça o seu login.</p>
                <button id="signup" class="btn btn-second">Login</button>

            </div>

            <div class="second-column">
                <h2 class="title title-second">Faça o seu Cadastro!</h2>
                <p class="description description-second">
                <p><a href="servidor.php"><button class="btn btn-second">Servidor</button></a></p>
                <p class="description description-second">
                <p><a href="professor.php"><button class="btn btn-second">Professor</button></a></p>
                <p class="description description-second">
                <p><a href="aluno.php"><button class="btn btn-second">Aluno</button></a></p>
            </div>
        </div>
    </div>
    <script src="../assets/js/app.js"></script>
</body>

</html>