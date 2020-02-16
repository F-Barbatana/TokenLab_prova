<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<meta author="Fabricio Eras Manzi Barbatana Filho">

<head>
    <title>Eventos</title>
    <!--  My CSS -->
    <link rel="stylesheet" href="../Tokenlab_teste/Frontend/src/Base.css">
    <!--  Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Matrial icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- favcon -->

    <!-- End of favcon-->
</head>

<body>
<header>
<nav>
    <div class="indigo lighten-2"><div class="row">
    <a href="#" class="brand-logo center">Eventos</a>     <!-- Navbar first page-->
    </div><br>
    </div>
  </nav>
</header>

<main >
<div class="row"></div>
<div class="row">
<div class="col s12  m12 l12">
    <div class="container">  
    <div class="card indigo darken-2">
        <div class="card-content white-text">
          <span class="card-title">Login</span>
          <form  action="../Tokenlab_teste/Backend\SRC\Verificar.php" method="POST">

          <div class="row">
        <div class="input-field col s12">
          <input  id="first_name" type="text" class="validate white" required name="Nome">
          <label for="first_name">Nome de Usuário</label>
        </div>
        <input hidden name="op" value="0">
        <div class="input-field col s12">
        <input id="password" type="password" class="validate white" required name="Senha">
          <label for="password">Senha</label>
        </div>
        <div class="input-field col s12 center">
        <button type="submit" class="btn green">Enviar</button>
        <a class="btn yellow darken-3" href="./Frontend/public/Cadastrar.php">Cadastrar</a>
        </div>
    </div>
      


          </form>
        </div></div>

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