<?php

/* Requerir la cadena de conexion */
require_once("../config/config.php");
/* Requerir el model */
require_once("../model/registro.php");
//Modifique el link a la ubicacion del model usuariosSure XXX

/* Declara la clase */
$registro = new registro();

switch ($_GET["op"]) {


    case "guardar":
        $registro->insert_usuario(
            $_POST["correo"],
            $_POST["nombre"],
            $_POST["contrasena"]
        );

}