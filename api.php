<?php
    header("Content-type:application/json");

    /* Manera antigua
    $nombre = (string) "Omaira Barrera";
    echo <<<JSON
        {
            "Nombre": '${nombre}'
        }
    JSON; */

    $obj = (object) [];
    $obj->nombre = (string) "Miguel";
    $obj->apellido = (string) "Castro";
    $obj->edad = (integer) 15;
    echo json_encode($obj);
?>