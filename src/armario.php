<?php include ("../conexao.php");
session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/arm.css" />
    
</head>

<body onload="onLoaderFunc()">

<div class="inputForm">
<center>
  Nome *: <input type="text" id="Username" required>
 Quantidade de Armário *: <input type="number" id="Numseats" required>
  <br/><br/>
  <button onclick="takeData()"> Selecione</button>
</center>
</div>
  

<div class="seatStructure">
<center>
  
<table id="seatsBlock">
 <p id="notification"></p>
  <tr>
    <td colspan="14"><div class="screen">Armários</div></td>
    <td rowspan="20">
      <div class="smallBox greenBox">Selecionado</div> <br/>
      <div class="smallBox redBox">Reservado</div><br/>
      <div class="smallBox emptyBox">Livre </div><br/>
    </td>
    
    <br/>
  </tr>
  
  <tr>
    <td></td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td></td>
    <td>6</td>
    <td>7</td>
    <td>8</td>
    <td>9</td>
    <td>10</td>
    <td>11</td>
    <td>12</td>
</tr>
  

  
</table>
  
<br/><button onclick="updateTextArea()">Confirmar Seleção</button>
</center>
</div>
      
<br/><br/>

<div class="displayerBoxes">
<center>
  <table class="Displaytable">
  <tr>
    <th>Nome</th>
    <th>Quantidade de Armário</th>
    <th>Armário</th>
  </tr>
  <tr>
    <td><textarea id="nameDisplay"></textarea></td>
    <td><textarea id="NumberDisplay"></textarea></td>
    <td><textarea id="seatsDisplay"></textarea></td>
  </tr>
</table>
</center>
</div>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/jquery.waypoints.min.js"></script>
        <script src="../assets/js/jquery.stellar.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/magnific-popup-options.js"></script>
        <script src="../assets/js/arm.js"></script>
</body>
</html>
 