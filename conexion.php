<?php

try {
    $conexionDB= new mysqli('localhost','root', 'secret','personas','3306');
    if($conexionDB->connect_error){
        die('ocurrio un problem perro');
    }
} catch (Exception $ex){
    echo 'error' . $ex-> getMessage();
}

?>
