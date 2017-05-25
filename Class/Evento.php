<?php
include_once ('inc/dbc.php');

class Evento
{
    var $id;
    var $title;
    var $create_at;
    var $description;

    var $tabla = "eventos";

    function __construct($id = 0, $title = '', $create_at = '', $description = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->create_at = $create_at;
        $this->description = $description;
    }

    function insertar () {
        $conexion = new dbc();
        $result = $conexion->prepare("INSERT INTO ".$this->tabla." (title, create_at, description) VALUES (?,?,?)");
        $result->bind_param("sss",$this->title,$this->create_at,$this->description);
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
        $result = $conexion->prepare("UPDATE ".$this->tabla." SET title = ?, create_at = ?, description = ? WHERE id = ?");
        $result->bind_param("sssi",$this->title,$this->create_at,$this->description,$this->id);
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
        $result = $conexion->prepare("SELECT id, title, create_at, description FROM ".$this->tabla." WHERE id=?");
        $result->bind_param('i', $this->id);
        $result->execute();
        $result->bind_result($this->id,$this->title,$this->create_at,$this->description);
        $result->fetch();
        $result->close();
    }

    function listar ()
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT id, title, create_at, description FROM ".$this->tabla);
        $resultados =array();
        while($row = $result->fetch_assoc()) {
            $resultados[] = $row;
        }
        $result->free();
        return $resultados;
    }

}