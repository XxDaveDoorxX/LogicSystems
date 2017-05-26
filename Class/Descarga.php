<?php
include_once ('inc/dbc.php');

class Descarga
{
    var $id;
    var $title;
    var $description;

    var $tabla = "descargas";

    function __construct($id = 0, $title = '', $description = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    function insertar () {
        $conexion = new dbc();
        $result = $conexion->prepare("INSERT INTO ".$this->tabla." (title, description) VALUES (?,?)");
        $result->bind_param("ss",$this->title,$this->description);
        $result->execute();
        $nwid = $result->insert_id;
        if ($nwid) {
            $this->id = $nwid;
        }
        $result->close();
        return $nwid;
    }


    function modificar ()
    {
        $conexion = new dbc();
        $result = $conexion->prepare("UPDATE ".$this->tabla." SET title = ?, description = ? WHERE id = ?");
        $result->bind_param("ssi",$this->title,$this->description,$this->id);
        $result->execute();
        $result->close();

        return $this->id;
    }

    function eliminar ()
    {
        $conexion = new dbc();
        $result = $conexion->prepare("DELETE FROM ".$this->tabla." WHERE id = ?");
        $result->bind_param("i",$this->id);
        $result->execute();
        $result->close();
    }

    function obtener ()
    {
        $conexion = new dbc();
        $result = $conexion->prepare("SELECT id, title, description FROM ".$this->tabla." WHERE id=?");
        $result->bind_param('i', $this->id);
        $result->execute();
        $result->bind_result($this->id,$this->title,$this->description);
        $result->fetch();
        $result->close();
    }

    function listar ()
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT id, title, description FROM ".$this->tabla);
        $resultados =array();
        while($row = $result->fetch_assoc()) {
            $resultados[] = $row;
        }
        $result->free();
        return $resultados;
    }
}