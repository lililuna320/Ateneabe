<?php
function ConectarDB()
{
    $db = mysqli_connect('localhost','root','','mi_proyecto');
    if(!$db)
    {
        echo "Error, no se pudo conectar.";
        exit();
    }
    return $db;
}