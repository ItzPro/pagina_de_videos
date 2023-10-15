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


class Conectar
{
    //variable protegida para la conexion
    protected $dbh;

    //Funcion de cadena de conexion
    protected function Conexion()
    {
        //Generamos un try and catch
        try {
            //Local
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=pagina_de_videos", "root", "");
            /* $this->dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); */
            //Produccion
/*                 $conectar= $this->dbh = new PDO("mysql:local=localhost;dbname=sistema_gestion_expediente_dgrp","root",""); */

            return $conectar;

        } catch (Exception $e) {
            //Si hay error nos mostrari un msj de error 
            print "!Error DB! " . $e->getMessage() . "<br/>";
            die();
        }

    } //fin de funcition Conexion

    public function set_names()
    {
        return $this->dbh->query("SET NAMES 'utf8'");
    }

}


?>