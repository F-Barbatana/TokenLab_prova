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
</head>

<body>
<?php 
            include("components/navbar.php"); 
            require_once("../../Backend/Api/Require.php");
            $ArrayDeEventos =[]; 
            while ($dado = $sql_Evento->fetch_array() ) {
                $ArrayDeEventos[] =  array("data" => $dado["DIA"], "desc" => $dado["DESCRICAO"], "horaIni" => $dado["HORAINI"], "horaFim" => $dado["HORAFIM"], "id"=>$dado["ID"]);
            }
?>



<main>

<section ><div  class="container red lighten-4">
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