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

<body  class="grey lighten-3 ">
<header >


<!-- Navbar -->
<nav class="hide-on-small-only white nav-extended"></nav>

  <nav class="white  z-depth-1">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#menu" id="base" class="brand-logo center  red-text">Eventos</a>
        </div>
          
        </div>
  </nav>
  </div>
</header>




<section>
      <div class="row">
        <div class="col s12 l6 m6">
            <div  class="container  center">

            <img class=" z-depth-0  responsive-img  logo-lateral center"  src="https://festivaljota.com/wp-content/uploads/sites/44/2015/07/Calend%C3%A1rio.png">
            </div>
        </div>
        <div class="col s12 l6 m6">
          <div  class="container">
            <h2 class="center">Cadastrar</h2>
            <p  class="flow-text center">


            <form  action="../../Backend\SRC\Verificar.php" method="POST">

<div class="row">
<div class="input-field col s12">
<input  id="first_name" type="text" class="validate white" required name="Nome">
<label for="first_name">Nome de Usuário</label>
</div>
<input hidden name="op" value="1">
<div class="input-field col s12">
<input id="password" type="password" class="validate white" required name="Senha">
<label for="password">Senha</label>
</div>
<div class="input-field col s12 center">
<button type="submit" class="btn green">Enviar</button>
<a href="../../index.php" class="btn red">Voltar</a>
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