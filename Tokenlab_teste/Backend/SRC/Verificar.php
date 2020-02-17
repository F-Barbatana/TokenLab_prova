<?php   

require_once("../Api/Require.php");

$nome = $_POST["Nome"];

 $senha = $_POST["Senha"];

$senha_crip = md5($senha);

$op = $_POST["op"];
$i=0;



if ($op == "1"){

    mysqli_query($conx, ' INSERT INTO usuario (NOME,SENHA) VALUES("'.$nome.'","'.$senha_crip.'")') or die( 
        mysqli_error($conx)); //caso haja um erro na consulta 
    header('Location: ../../index.php');

}else if ($op == "0"){
while ($dado = $sql_USER->fetch_array()){
    if ($dado["NOME"] === $nome){
        if($dado["SENHA"]===$senha_crip){
            header('Location: ../../Frontend\public\Calendario.php');
        }
    }
}
}

        ?>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <a href="../../index.php"> <button>Voltar</button></a>
    <script>
        alert("Erro voltando para o login");
     
        </script>
    </body>
</html>
 