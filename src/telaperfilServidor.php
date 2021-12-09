<?php include ("../conexao.php");
session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/telaperfil.css" />
  <link rel="stylesheet" href="../assets/css/arm.css" />
  <script src="../assets/js/app.js"></script>
</head>
<body>
<div class="container">
  <div id="logo"><h1 class="logo"></h1>
    <div class="CTA">
      </div>
  </div>
  <div class="leftbox">
    <nav>
      <a id="profile" class="active"><i class="fa fa-user"></i></a>
      <a id="settings"><i class="fa fa-cog"></i></a>
    </nav>
  </div>
  <div class="rightbox">
    <div class="profile ">
      <h1>Informações de Perfil</h1>
      <div >
      
        <h2>Nome Completo</h2>
        <p> <?php echo $_SESSION['nome'];?> </p>
        <h2>SIAPE</h2>
        <p><?php echo $_SESSION['matricula'];?> </p>
       <h2>Data de Nascimento</h2>
        <p><?php
          function data($data){
          return date("d/m/Y", strtotime($data));
                          }
            echo data($_SESSION['data_nasc']);
            echo "  ";
            ?></p>
            <h2>rg</h2>
        <p> <?php echo $_SESSION['rg'];?> </p>
        <h2>Telefone</h2>
        <p><?php echo $_SESSION['telefone'];?>  </p>
        <h2>Email</h2>
        <p><?php echo $_SESSION['email'];?>  </p>
        <h2>Senha</h2>
        <p><?php echo $_SESSION['senha'];?> 
      </div>
    </div>
    <div class="configuracoes ">
      <div class="displayerBoxes">
        <table class = "Displaytable center">
        
        <tbody class= "qualquercoisa">
          <tr><th>Alunos</th></tr>
        <tr>
          <th>Nome</th>
          <th>Armário</th>
        </tr>
        <?php 
            $result_usu =  "SELECT aluno.nome, armario.numero, armario.disponivel FROM armario 
            inner join aluno on armario.fk_cod_usuario = aluno.codA";
           
            $resultado_usu = mysqli_query($mysqli, $result_usu);
            while($row_usu = mysqli_fetch_assoc($resultado_usu))
                if ($row_usu ['disponivel'] == 1) {
            {?>
                    <tr>
                        <td ><textarea id="nameDisplay" disabled><?php echo $row_usu['nome'];?></textarea></td>
                        <td ><textarea id="seatsDisplay" disabled><?php echo $row_usu['numero'];?></textarea></td>
                    </tr>
        <?php }}?>
        <tr><th>Docentes</th></tr>
        <tr>
          <th>Nome</th>
          <th>Armário</th>
        </tr>
        <?php 
            $result_usuD =  "SELECT docente.nomeD, armario.numero, armario.disponivel FROM armario 
            inner join docente on armario.fk_cod_docente = docente.codD";
           
            $resultado_usuD = mysqli_query($mysqli, $result_usuD);
            while($row_usuD = mysqli_fetch_assoc($resultado_usuD))
                if ($row_usuD ['disponivel'] == 1) {
            {?>
                    <tr>
                        <td ><textarea id="nameDisplay" disabled><?php echo $row_usuD['nomeD'];?></textarea></td>
                        <td ><textarea id="seatsDisplay" disabled><?php echo $row_usuD['numero'];?></textarea></td>
                    </tr>
        <?php }}?>
        </tbody>
        </table>

      </div>
    </div>
    
  </div>
</div>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.waypoints.min.js"></script>
        <script src="../assets/js/jquery.stellar.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/magnific-popup-options.js"></script>
<script> 
document.getElementById('settings').onclick = function(){
                $('.configuracoes').show();
                $('.profile').hide();
            }
document.getElementById('profile').onclick = function(){
                $('.configuracoes').hide();
                $('.profile').show();
            }
</script>

</body>
</html>