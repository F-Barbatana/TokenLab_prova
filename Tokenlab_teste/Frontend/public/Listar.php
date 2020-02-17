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
<?php 
       
            require_once("../../Backend/Api/Require.php");
            $ArrayDeEventos =[]; 
            while ($dado = $sql_Evento->fetch_array() ) {
                $ArrayDeEventos[] =  array("data" => $dado["DIA"], "desc" => $dado["DESCRICAO"], "horaIni" => $dado["HORAINI"], "horaFim" => $dado["HORAFIM"], "id"=>$dado["ID"]);
            }
?>






<body  class="grey lighten-3 ">


<?php include("components/navbar.php") ?>


<section>
      <div class="row">
        
        <div class="col s12 l12 m12">
          <div  class="container">
            <h2 class="center">Lista de Eventos</h2>
            <p  class="flow-text center">

            <div  class=" red lighten-4">
<table class="center">
        <thead>
          <tr>
              <th>Data</th>
              <th>Descrição</th>
              <th>Horario de Inicio</th>
              <th>Horario Final</th>
              <th>ID</th>
              <th>Opções</th>
          </tr>
        </thead>

        <tbody>
        <?php
        
        for ($i=0; $i < count($ArrayDeEventos); $i++) { 
   
        
        echo '
        
        <tr>
            <td>'.$ArrayDeEventos[$i]["data"].'</td>
            <td>'.$ArrayDeEventos[$i]["desc"].'</td>
            <td>'.$ArrayDeEventos[$i]["horaIni"].':00</td>
            <td>'.$ArrayDeEventos[$i]["horaFim"].':00</td>
            <td>'.$ArrayDeEventos[$i]["id"].'</td>
            <td>
            <form action="../../Backend/SRC/Eventos.php" method="GET">
            <input value='.$ArrayDeEventos[$i]["id"].' hidden name="id">
            <input value='.$ArrayDeEventos[$i]["data"].' hidden name="Data">
            <input value="2" hidden name="escolha">
            <button class="btn red  "><i class="material-icons">close</i></button>
            </form>
            <form action="../../Backend/SRC/Eventos.php" method="GET">
            <input value='.$ArrayDeEventos[$i]["id"].' hidden name="id">
            <input value='.$ArrayDeEventos[$i]["data"].' hidden name="Data">
            <input value='.$ArrayDeEventos[$i]["desc"].' hidden name="Desc">
            <input value='.$ArrayDeEventos[$i]["horaIni"].' hidden name="horaI">
            <input value='.$ArrayDeEventos[$i]["horaFim"].' hidden name="horaF">
            <input value="3" hidden name="escolha">
            <button class="btn  green"><i class="material-icons">border_color</i></button>
            </form>
            
            
            </td>
            </tr>

        ';
    }
        
        ?>
          
        </tbody>
      </table>
</div>
            
        </div>
        
        </div>



</form>
            </p>
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
    <script src="../Tokenlab_teste/Frontend/src/Base.js"></script>
</body>

</html>