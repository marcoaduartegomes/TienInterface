<!DOCTYPE html>
<style type="text/css" media="screen">

.imgTable{
  max-width:100px;
  max-height: :100px;
}


</style>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TIEN MANIA</title>
    <link rel="shortcut icon" type="image/x-icon" href="../Img/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="Css/Slides.css"/>
</head>

<?php
//include "BarraNavegacao.php";
include "sidebar.php";
?>
<main class="page-content">
<!-- Botão utilizado para cadastrar um slide, no inicio da pagina  -->
<div class="container">
<div style="text-align: center;">
            <button data-toggle="modal" data-target="#Cadastrar" id="slider" class="btn btn-lg BotaoCadastra">Cadastrar um TIEN</button>
        </div>
</div> 

<table  class="table table-striped table-dark table-hover " style="width:1000px;" id="tb1">
    <thead >
        <tr >
            <th></th>
            <th width='50px' >Nome</th>
            <th>Carinha</th>
            <th width='200px'>Operações</th>
           
        </tr>
    </thead>
    <tbody>
        <?php 

        require_once __DIR__.'/connect.php';
        $query_select = "SELECT codTien,tien.nome, estatus.nome as estatus FROM tien inner join estatus on tien.codEstatus = estatus.codEstatus ;";
        $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
        $rows = array();
        while($row = mysqli_fetch_array($result_select))
            $rows[] = $row;
        foreach($rows as $row){ 
            $codTien = $row['codTien'];
            $nome = $row['nome'];
            $estatus = $row['estatus'];
            echo '<tr class="odd gradeX">';
            echo '<td><img src="tien/'.$codTien.'.png" class="ImgTd "></td>';
            echo '<td>'.$nome.'</td>';
            echo '<td>'.$estatus.'</td>';
            echo '<td><button class="btn Botao" data-toggle="modal" id="deletaSlide" data-target="#Excluir" value="'.$codTien.'" type="button">Excluir</button>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<!-- Fim da tabela gerada com o php -->


<!-- Modal utilizado para excluir um slide. O botão é gerado na tabela pelo php, onde clicando no botão o codigo do slide é utilizado para excluir o mesmo -->
<div style="margin-top:12%;" class="modal" id="Excluir" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(99,00,33);">
                <h5 class="modal-title" style="color:white;">Deseja realmente excluir?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>A exclusão será permanente.</p>
            </div>
            <div class="modal-footer" >
                <form  method="post">
                   <input type="button" name="excluirSlide" id="excluirSlide" value="Excluir" class="btn Botao">
                   <button type="button" class="btn Botao" data-dismiss="modal">Fechar</button>
               </form>
           </div>
       </div>
   </div>
</div>



<div  class="modal" id="Cadastrar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(99,00,33);">
                <h5 class="modal-title" style="color:white;">Cadastramento de foto?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                       
                            <form method="post" enctype="multipart/form-data"  id="formSlider" >
					<input  type='file' name="arquivo" id="arquivo" />
					<img class = "imgTable" id="blah" src="#" alt="your image" />
					<div class="form-group">
                                        <label for="nomeTien">Nome</label>
                                        <input type="text" name="nomeTien" id="nomeTien" required  class="form-control"/>
                                  </div>
                                  <?php 
    require_once __DIR__.'/connect.php';
    $query_select = "SELECT * FROM estatus ;";
    $result_select = mysqli_query($conn,$query_select) or die(mysql_error());
    $rows = array();
    while($row = mysqli_fetch_array($result_select))
        $rows[] = $row;
    foreach($rows as $row){ 
        $codEstatus = $row['codEstatus'];
        $nome = $row['nome'];
        echo '<input type="radio" name="stats" value="'.$codEstatus.'"> '.$nome.'<br>';
    }
    ?>  
                                  <div>
                                        <input type="submit" class="btn btn-success" id="cadastrarTien" name="cadastrarTien" value="Enviar"/>
                                        <button type="button" class="btn btn-secondary" id="returnServico" data-dismiss="modal"> Cancelar </button>
                                  </div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>



<script src="Javascript/jquery-3.3.1.js"></script>
<script src="Javascript/jquery.validate.min.js"></script>
<script src="Javascript/Slides.js"></script>
<script src="Javascript/popper.min.js.js"></script>

</body>
</html>