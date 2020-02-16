<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta author="Fabricio Eras Manzi Barbatana Filho">

<head>
    <title>Eventos</title>
    <!--  My CSS -->
    <link rel="stylesheet" href="../src/Base.css">
    <!--  Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Matrial icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- favcon -->

    <!-- End of favcon-->
</head>

<body>

<?php include("components/navbar.php") ?>


<main>
  <div class="row"></div>
  <div class="container">

  
    <div class="row blue darken-3">
    <form class="col s12" action="../../Backend\SRC\Eventos.php" method="GET">
      <div class="row  ">
      <div class=" col s12 m12 l3"></div>
        <div class="input-field col s12 m12 l5">
          <input  id="Data" type="date" class="datepicker white" required  name="Data">
          <label for="Data">Selecione uma data</label>   <!-- Parte responsavel pela seleção de datas para o sistema-->
        </div>
        
        <input value="1" name="escolha" hidden>

        <div class=" col s12 m12 l12  center">
            <button class="btn green " type="submit">Criar evento<i class="material-icons">send</i></button> <!-- Parte para a criação de eventos-->
            </form>

            <a href="./Listar.php" class="btn blue"> Lista de Eventos</a><!-- Listagem de eventos-->
            
        </div>
        <div class=" col s12 m12 l3"></div>
      </div>
  
    </div>
    </div>
  </main>





    <?php include("components/Footer.php") ?>


    <!--  JQuery  CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.js " integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin=" anonymous "></script>
    <!--  Materialize JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js "></script>
    <!-- My JS base -->
    <script src="../src/Base.js"></script>
 
</body>

</html>