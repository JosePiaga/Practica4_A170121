<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/Practica4_A170121/server.php");

$error = $cliente->getError();
if($error){
    echo "<h2>Constructor error</h2><pres>" . $error . "</pre>";

}
$result = $cliente->call("getTenis", array("datos" => "Tenis"));
if($cliente->fault){ //chequemos una falla al momento de llamar al metodo
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else { //No hay error al llamar el metodo
    $error = $cliente->getError();
    if($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";

    }
    else{
        echo "<h2>Tenis</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}

?>
