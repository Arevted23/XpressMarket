<?php
function conectarDB():mysqli
{
    $db = mysqli_connect('localhost','root','root','');
    if(!$db){
        echo "Error, no se puede conectar a la Db, revisa la conexion";
        exit;
    }
    return $db;
}