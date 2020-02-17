<?php
$criar  =  $_GET["criar"];
$data  = $_GET["data"];

if ($criar ==  1){
    $horaini = 0;
    $horafim = 0;
}else{
    $horaini =  $_GET["horaini"];
    $horafim =  $_GET["horafim"];
    $descrip  = $_GET["desc"];
    $id_editar  = $_GET["id"];
  
}

function valor_mes($a){
  $meses = array(
    1 => 'Janeiro',
    2 =>'Fevereiro',
    3 =>'Março',
    4 =>'Abril',
    5 =>'Maio',
    6 =>'Junho',
    7 =>'Julho',
    8 =>'Agosto',
    9 =>'Setembro',
    10 =>'Outubro',
    11 =>'Novembro',
    12 =>'Dezembro'
);
  $valor = intval($a);

  return $meses[$valor];
}



?>


<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="Author" content="Fabrício Barbatana Filho">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="src/css/contrast.css">
      <title>Eventos</title>

      
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>

<body>
<?php include("components/navbar.php") ?>



<main>
<section>
<div class="row">


<div class="col s6 m3 l4">

<div class="card">
<div class="card-image waves-effect waves-block waves-light">
  <div class="activator">
    <div  class="container">
        <p><h5 class="left" id="mes_event"><?php echo valor_mes(substr($data, 5,2)); ?></h5> 
        <h5 class="right" id="ano_event"><?php echo substr($data, 0,4);?></h5></p></div><br>
<H1  class="center" id="dia_event"><?php echo substr($data, 8,2);?></H1>
  </div>
</div>
<div class="card-content">
  <span class="card-title activator grey-text text-darken-4">Descrição<i class="material-icons right">more_vert</i></span>
  <p class="grey-text">Horarios: <span id="hora_de_inicio"><?php if($horaini != "0"){echo $horaini;}else{echo 0;} ?></span>:00  até  <span id="hora_final"><?php if($horaini != "0"){echo $horafim;}else{echo 0;} ?></span>:00</p>
</div>
<div class="card-reveal">
  <span class="card-title grey-text text-darken-4">Descrição<i class="material-icons right">close</i></span>
  <p id="desc_event"></p>
</div>
</div>
</div>


    <div class="col s12 m6 l6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title"><?= $_GET["data"];?></span>
          
          <?php if ($criar  =="0"){?>
            <form  action="../../Backend\SRC\Eventos.php" method="GET">
              <input name="escolha" value="4"  hidden> <!-- responsavel por escolher o que o sistema fará com os dados-->
          <div class="row">
        <div class="input-field col s12">
          <input  id="dias" type="date" class="validate" required name="Data" value="<?=$_GET["data"] ?>">
          <label for="dias">Data</label> <!-- Passa o valor do dia do evento -->
        </div>
        <div class="input-field col s12">
        <input id="Desc" type="text" class="validate" required name="desc" value="<?=$_GET['desc']?>">
          <label for="Desc">Descrição</label><!-- Descrição do eventos-->
        </div>
        <div class="input-field col s12">
                <p class="range-field">
                        <input type="range" id="Hora_ini" value="<?php    if($horaini != "0"){echo $horaini;}else{echo 0;}          ?>" min="0" max="24" name="HoraIni"/>
                        <label  for="Hora_ini">Hora  de inicio</label> <!-- Hora de inicio do evento-->
                </p>
        </div>

          <input hidden value="<?=$id_editar?>" name="id"> <!-- Id do evento-->


        <div class="input-field col s12">
                <p class="range-field">
                        <input type="range" id="Hora_fini" value="<?php    if($horafim != "0"){echo $horafim;}else{echo 0;}          ?>" min="0" max="24" name="HoraFim"/>
                        <label  for="Hora_fini">Hora  de fim</label> <!-- Hora de finalização do evento-->
                </p>
        </div>
        <div class="input-field col s12 center">
        <button type="submit" class="btn pink">Enviar</button>
        </div>


   

    </div>
  </div>
  </div>




        </div>
          <?php } else{?>

             
            <form  action="../../Backend\SRC\Eventos.php" method="GET">
<input name="escolha" value="0"  hidden>
          <div class="row">
        <div class="input-field col s12">
          <input  id="dias" type="date" class="validate" required name="Data" value="<?=$_GET["data"] ?>">
          <label for="dias">Data</label>
        </div>
        <div class="input-field col s12">
        <input id="Desc" type="text" class="validate" required name="desc">
          <label for="Desc">Descrição</label>
        </div>
        <div class="input-field col s12">
                <p class="range-field">
                        <input type="range" id="Hora_ini" value="<?php    if($horaini != "0"){echo $horaini;}else{echo 0;}          ?>" min="0" max="23" name="HoraIni"/>
                        <label  for="Hora_ini">Hora  de inicio</label>
                </p>
        </div>
        <div class="input-field col s12">
                <p class="range-field">
                        <input type="range" id="Hora_fini" value="<?php    if($horafim != "0"){echo $horafim;}else{echo 0;}          ?>" min="0" max="23" name="HoraFim"/>
                        <label  for="Hora_fini">Hora  de fim</label>
                </p>
        </div>
        <div class="input-field col s12 center">
        <button type="submit" class="btn pink">Enviar</button>
        </div>


            <?php  } ?>
      </div>


    </div>

  </div>

  </section>
  
  



</main>





<?php include("components/Footer.php") ?>


    <!--  JQuery  CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>
    <!--  Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>
    <!-- My JS base -->
    <script type="text/javascript">
  $(document).ready(function() {

    $("#Hora_ini").click(function(){
      let inicio = $("#Hora_ini").val();
      $("#hora_de_inicio").text(inicio);
      $("#Hora_fini").attr("min", parseInt(inicio)+1)
      $("#hora_final").text(parseInt(inicio)+1);
    });
   
$(".card-content").click(function(){
  let descri = $("#Desc").val();
  $("#desc_event").text(descri);
  
});

    $("#Hora_fini").click(function(){
      let inicio = $("#Hora_fini").val();
      $("#hora_final").text(inicio);
    });


});
  </script>
</body>

</html>

