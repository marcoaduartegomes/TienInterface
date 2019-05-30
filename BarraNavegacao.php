<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="shortcut icon" type="image/x-icon" href="Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JavaScript/jquery-3.3.1.slim.min.js"></script>
    <script src="JavaScript/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="Css/BarraNavegacao.css"/>
</head>
<body >
    <header>
        <div class="BoxBarra" id="BarraNavegacao">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img id="ImagemBarra" onclick="window.location.href = 'Img/ditador.png'" class="ImgBarra" src="Img/logo.png">
                    </div>
                    <div class="col-md-8 offset-md-4">
                        <ul id="UlBarra" class="nav justify-content-center EfeitoUl">
                            <li class="nav-item">
                                <a class="EstiloLinkBarra" href="index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="EstiloLinkBarra" href="Slides.php">Slides</a>
                            </li>
                            <li class="nav-item">
                                <a class="EstiloLinkBarra" href="emotes.php">Emotes</a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="Javascript/BarraNavegacao.js"></script>
