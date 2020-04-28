<?php

include_once './conexion.php';
$id = $_POST['id'];

$nombre = $_POST['nombre'];

$email = $_POST['email'];

$telefono = $_POST['telefono'];

$estado_civil = $_POST['estado_civil'];

$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;

$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	$arrayIntereses = null;
	
	$num_array = count($intereses);
	$contador = 0;
	
	foreach($intereses as $key=>$value){
        if($contador != $num_array-1){
        $arrayIntereses .= $value.',';
        $contador++;
      }
        else{
          $arrayIntereses .= $value;
      }
    }
	

$SQL = "update form set nombre = '$nombre', correo = '$email', telefono = '$telefono', estado_civil = '$estado_civil', hijos = '$hijos', intereses = '$arrayIntereses' where id_form = '$id' ";

$res= $conexionDB->query($SQL);
// me trae el id recien insertado
$id_insert = $conexionDB->insert_id;

//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
{
  //Validamos que el archivo exista
  if($_FILES["archivo"]["name"][$key]) {
    $filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
    $source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
    
    $directorio = 'docs/'.$id_insert.'/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
    // $archivo = $directorio.$_FILES["archivo"]["name"][$key];

    //Validamos si la ruta de destino existe, en caso de no existir la creamos
    if(!file_exists($directorio)){
      mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
    }
    
    $dir=opendir($directorio); //Abrimos el directorio de destino
    $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
    
    //Movemos y validamos que el archivo se haya cargado correctamente
    //El primer campo es el origen y el segundo el destino
    if(move_uploaded_file($source, $target_path)) {	
      echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
      } else {	
      echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
    }
    closedir($dir); //Cerramos el directorio de destino
  }
}

?>
<!-- en cada value llamar a la funcion devolver parametro -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="">
                <?php if ($res) { ?>
                <h3>registro Modificado</h3>
                <?php }else { ?>
                <h3>error al modificar</h3>
                <?php } ?>
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>