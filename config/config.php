<?php
//Intenta
try {
    //HOST
    define("HOST", "localhost");

    //Base de datos
    define("DBNAME", "pagina_de_videos");

    //Usuario
    define("USER", "root");

    //Contraseña
    define("PASS", "");

    //Hacemos la conexion
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . "", USER, PASS);

    //Si algo falla guarda mas detalladamente el error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //Comprobamos si la conexion fue exitosa
    /* if ($conn == true) {
        echo "La conexion fue exitosa";
    } else {
        echo "Fallo en la conexion";
    } */

}
//Si falla que muestre el error
catch (PDOException $e) {
    echo $e->getMessage();
}
?>