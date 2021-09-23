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
      <div ><img class="imagem-perfil" src="https://image.flaticon.com/icons/svg/236/236831.svg">
      
        <h2>Nome Completo</h2>
        <p> <?php echo $_SESSION['nome'];?> </p>
       <h2>Curso</h2>
       <p><?php $curso= $_SESSION['curso'];
       if ($curso==1){
         echo "Informatica";
       }else {
         echo "Hospedagem";
       }?></p>
        <h2>Turma</h2>
       <p><?php echo $_SESSION['turma'];?> </p>
        <h2>Matricula</h2>
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
        <p><button id="carlos"class="btn1">Alterar</button> </p> 
        
      </div>
    </div>
    <div class="configuracoes ">
      <h1>Configurações da Conta</h1>
      <h2>Sync Watchlist to My Stuff<button class="btn">sync</button></h2>
      <p></p>
      <h2>Hold Your Subscription<button class="btn">hold</button></h2>
      <p></p>
      <h2>Cancel Your Subscription <button class="btn">cancel</button></h2>
      <p></p>
      <h2>Your Devices <button class="btn">Manage Devices</button></h2>
      <p></p>
      <h2>Referrals <button class="btn">get $10</button></h2>
      <p></p>
    </div>
    <div class="alterar">
      meu cu 
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
                $('.alterar').hide();
            }
document.getElementById('profile').onclick = function(){
                $('.configuracoes').hide();
                $('.profile').show();
                $('.alterar').hide();
            }
document.getElementById('carlos').onclick = function (){
                $('.configuracoes').hide();
                $('.profile').hide();
                $('.alterar').show();
}
</script>

</body>
</html>

