<?php
    require_once "lib/nusoap.php";
    function getTenis($datos){
        if($datos == "Tenis"){
            return join(",", array(
                "Nike ",
                "Adidas ",
                "Puma",
                "Charly",
                "Sporline",
                "Jordan"));
        }
        else{
            return "No se ha encontrado ninguna marca de tenis";
        }
    }
    $server = new soap_server(); // se crea la instancia de SOAP
    $server->register("getTenis"); // Indicamos el metodo o funcion a devolver
    if( !isset($HTTP_RAW_POST_DATA )) $HTTP_RAW_POST_DATA = file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);

?>