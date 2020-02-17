<?php   

require_once("../Api/Require.php");


$datas_paraeventos = $_GET["Data"];
$opcao= $_GET["escolha"];

$ArrayDeEventos =[]; 
while ($dado = $sql_Evento->fetch_array() ) {
    $ArrayDeEventos[] =  array("data" => $dado["DIA"], "desc" => $dado["DESCRICAO"], "horaIni" => $dado["HORAINI"], "horaFim" => $dado["HORAFIM"], "id"=>$dado["ID"]);
}


if ($opcao == "1"){
  header('Location: ../../Frontend/public/Editar.php?data='.$datas_paraeventos.'&criar=1');
}elseif($opcao == "0"){ //cadastro
    mysqli_query($conx, ' INSERT INTO eventos (DIA,DESCRICAO,HORAINI,HORAFIM) VALUES("'.$datas_paraeventos.'","'.$_GET['desc'].'", "'.$_GET['HoraIni'].'",  "'.$_GET['HoraFim'].'")') or die( 
        mysqli_error($conx)); //caso haja um erro na consulta 
        header('Location: ../../Frontend/public/Calendario.php');
    }elseif($opcao == "2"){
        $id_edit = $_GET["id"];
        mysqli_query($conx, 'DELETE FROM eventos WHERE ID = '.$id_edit.';') or die( 
            mysqli_error($conx)); //caso haja um erro na consulta 
            header('Location: ../../Frontend/public/Listar.php');
    }elseif($opcao == "3"){
        $id_edit = $_GET["id"];
                header('Location: ../../Frontend\public\Editar.php?data='.$_GET["Data"].'&criar=0&desc='.$_GET["Desc"].'&horaini='.$_GET["horaI"].'&horafim='.$_GET["horaF"].'&id='.$_GET["id"]);
    }elseif($opcao == "4"){
        $id_edit = $_GET["id"];
        mysqli_query($conx, 'UPDATE eventos SET DIA = "'.$_GET["Data"].'", DESCRICAO  = "'.$_GET["desc"].'",  HORAINI = "'.$_GET["HoraIni"].'",  HORAFIM = "'.$_GET["HoraFim"].'" WHERE id = '.intval($_GET["id"]).';') or die( 
            mysqli_error($conx));
            header('Location: ../../Frontend/public/Listar.php');
    }


?>