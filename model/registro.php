<?php
class registro extends Conectar
{
    //-----------------------------------------------------------------------------------------------------------------------------------------
    //--Guardar--------------------------------------------------------------------------------------------------------------------------------

    public function insert_usuario(
        $correo,
        $nombre,
        $contrasena

    ) {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO usuarios(
            id,
            correo,
            nombre,
            contrasena,
            creacion
            )
            VALUES(
                NULL,
                ?,
                ?,
                MD5(?),
                NULL
                );";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $correo);
        $sql->bindValue(2, $nombre);
        $sql->bindValue(3, $contrasena);
        $sql->execute();

        return $resultado = $sql->fetchAll();
    }




}