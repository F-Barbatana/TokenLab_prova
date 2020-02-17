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


<body  class="grey lighten-3 ">


<nav class="hide-on-small-only indigo nav-extended"></nav>

  <nav class="indigo  z-depth-1">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#menu" id="base" class="brand-logo center  orange-text">Eventos</a>
          <a href="../../index.php" class="right"><i class="material-icons">close</i></a>
          <a href="../../Frontend/public/Calendario.php" class="right"><i class="material-icons">arrow_back</i></a>
        </div>
          
        </div>
  </nav>
  </div>
</header>

<section>
      <div class="row">
        
        <div class="col s12 l6 m6">
          <div  class="container">
            <h2 class="center">escolha a  data</h2>
            <p  class="flow-text center">


            <form class="col s12" action="../../Backend\SRC\Eventos.php" method="GET">
      <div class="row  ">
        <div class="input-field ">
          <input  id="Data" type="date" class="datepicker white" required  name="Data">
          <label for="Data">Selecione uma data</label>   <!-- Parte responsavel pela seleção de datas para o sistema-->
        </div>
        
        <input value="1" name="escolha" hidden>

        <div class=" col s12 m12 l12  center">
            <button class="btn green " type="submit">Criar evento</button> <!-- Parte para a criação de eventos-->
            </form>

            <a href="./Listar.php" class="btn blue"> Lista de Eventos</a><!-- Listagem de eventos-->
            
        </div>
        
        </div>



</form>
            </p>
          </div>
          
        </div>
        <div class="col s12 l6 m6">
            <div  class="container  center">

            <img class=" z-depth-0  responsive-img  logo-lateral center"  src="https://festivaljota.com/wp-content/uploads/sites/44/2015/07/Calend%C3%A1rio.png">
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
    
  </script>
 
</body>

</html>