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
      <h1>Escolha Seu Armário</h1>
      <table > 
        <tbody>
        <tr>
          <th >Nome</th>
          <th >Armário</th>
        </tr>
        <?php 
            $result_usu =  "SELECT aluno.nome, armario.numero, armario.fk_cod_usuario FROM armario 
            inner join aluno on armario.fk_cod_usuario = aluno.codA";
           
            $resultado_usu = mysqli_query($mysqli, $result_usu);
            while($row_usu = mysqli_fetch_assoc($resultado_usu))
                if ($row_usu ['fk_cod_usuario'] == $_SESSION ['codA']) {
            {?>
                    <tr>
                        <td ><textarea id="nameDisplay" disabled><?php echo $row_usu['nome'];?></textarea></td>
                        <td ><textarea id="seatsDisplay" disabled><?php echo $row_usu['numero'];?></textarea></td>
                    </tr>
        <?php }}?>
        </tbody>
</table>
      <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/arm.css" />
    
</head>

<body onload="onLoaderFunc()">
 
<form class="forma" method="post" action= "../armario.php">
<div class="seatStructure">
  


<table id="seatsBlock">
 <p id="notification"></p>
  <tr>
    <td colspan="14"><div class="screen">Armários</div></td>
    <td rowspan="20">             

  <?php 
  $result_usu =  "SELECT * FROM armario";
  $resultado_usu = mysqli_query($mysqli, $result_usu);
  $contador = 0;
  while($row_usu = mysqli_fetch_assoc($resultado_usu)){
    
	if($contador == 0){?>
  <tr>
	<?php }?>

    <?php 
      if ($row_usu['disponivel'] == 0 ){ ?>
       <td><input type="checkbox" class = 'seatsG' name = "meucheckbox" value=" <?php echo $row_usu['numero'] ; ?>"></td>
            


     <?php } 
     else if ($row_usu['disponivel'] == 1 ){ ?>
     <td><input type="checkbox" class = 'seatsR' id= "seatsR" name = "meucheckbox" value=" <?php echo $row_usu['numero'] ; ?>" disabled></td>

     <?php } ?>

		<?php
	$contador++; 
	if($contador == 10){?>
		</tr>
	<?php $contador = 0;	} ?>
  <?php }?>

</tr>
</table>

<aside>
  <p><ul type="square">
<li id= "selecionado">Selecionado</li>
<li id= "reservado">Reservado</li>
<li id= "livre">Livre</li>
</ul></p>
</aside>
<br/><button type = "submit" class="" name= "armarioA" onclick="updateTextArea()">Confirmar Seleção</button> 
</div>  
</form>

      <p></p>
    </div>

    <div class="alterar">
      <form class="form" method="post" action="../alterarAluno.php">
      <h2>Nome Completo</h2>
        <input name = "nomeCompleto" value = "<?php echo $_SESSION ['nome']?>"> </input>

      <h2> Senha </h2>
        <input name="password" value="Senha"> </input>

      <h2>Curso</h2>
        <p>
          <select  name = "curso" required>
            
              <?php  
                  if ($_SESSION['curso'] !== '1') { ?>
                    <option value = "2">Hospedagem</option>
                    <option value = "1"> Informática </option>
              <?php } ?>

              <?php  
                  if ($_SESSION['curso'] !== '2') { ?>
                    <option value = "1"> Informática</option>
                    <option value = "2"> Hospedagem </option>
              <?php } ?>

          </select>
        </p>

      <h2>Turma</h2>
        <p>
          <select  name= "turma" required>
              <option><?php echo $_SESSION['turma']; ?></option>
                
                <?php  
                  if ($_SESSION['turma'] !== '1A') { ?>
                    <option value = "1A"> 1A </option>
                <?php } ?>

                <?php  
                  if ($_SESSION['turma'] !== '1B') { ?>
                    <option value = "1B"> 1B </option>
                <?php } ?>

                <?php  
                  if ($_SESSION['turma'] !== '1H') { ?>
                    <option value = "1H"> 1H </option>
                <?php } ?>

                <?php  
                  if ($_SESSION['turma'] !== '2A') { ?>
                    <option value = "2A"> 2A </option>
                <?php } ?>

                <?php  
                  if ($_SESSION['turma'] !== '2B') { ?>
                    <option value = "2B"> 2B </option>
                <?php } ?>  

                <?php  
                  if ($_SESSION['turma'] !== '2H') { ?>
                    <option value = "2H"> 2H </option>
                <?php } ?> 

                <?php  
                  if ($_SESSION['turma'] !== '3A') { ?>
                    <option value = "3A"> 3A </option>
                <?php } ?>

                <?php  
                  if ($_SESSION['turma'] !== '3B') { ?>
                    <option value = "3B"> 3B </option>
                <?php } ?>

                <?php  
                  if ($_SESSION['turma'] !== '3H') { ?>
                    <option value = "3H"> 3H </option>
                <?php } ?>

          </select>
        </p>

      <h2>Matricula</h2>
        <input name= "matricula" value = '<?php echo $_SESSION ['matricula']?>'> </input>

      <h2>Data de Nascimento</h2>
        <input name= "dataDeNascimento" value = '<?php echo $_SESSION ['data_nasc']?>'></input>

      <h2>rg</h2>
        <input name= "rg" value = "<?php echo $_SESSION ['rg']?>"> </input>

      <h2>Telefone</h2>
        <input name="phone" value = "<?php echo $_SESSION ['telefone']?>">  </input>

      <h2>Email</h2>
        <input name= "email" value = "<?php echo $_SESSION ['email']?>">  </input>
        
      </br>

      <button class="" name= "alterarA" >Alterar</button>

      </form>
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
 <script src="../assets/js/arm.js"></script>
</body>
</html>

