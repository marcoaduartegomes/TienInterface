
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Interface</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="Css/Inicio.css"/>
</head>
<?php
//include "BarraNavegacao.php";
include "sidebar.php";
?>
<main class="page-content">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Emote</h5>
            <p class="card-text">Você pode cadastrar emoticons, basta selecionar a imagem e depois escolher a emoção que ela representa.</p>
            <a href="Emoticon.php" class="btn btn-primary">Cadastrar</a>
        </div>
    </div>
</div>
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Emoção</h5>
        <p class="card-text">Basta seguir as instruções da aba Emoções, e você podera cadastrar a emoção que quiser para utilizar no seu emoticon.</p>
        <a href="emocao.php" class="btn btn-primary">Cadastrar</a>
    </div>
</div>
</div>
</div>

</main>

<script src="Javascript/jquery-3.3.1.js"></script>
 <script src="Javascript/jquery.validate.min.js"></script>
 <script src="Javascript/popper.min.js.js"></script>
</body>
</html>