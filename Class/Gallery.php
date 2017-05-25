<?php
include_once ('inc/dbc.php');
class Gallery
{

    var $id;
    var $title;
    var $id_product;

    var $tabla = "gallery";

    function __construct($id = 0, $title = '', $id_product = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->id_product = $id_product;

    }

    function insertar () {
        $conexion = new dbc();
        $result = $conexion->prepare("INSERT INTO ".$this->tabla." (title,id_product) VALUES (?,?)");
        $result->bind_param("si",$this->title,$this->id_product);
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
        $result = $conexion->prepare("UPDATE ".$this->tabla." SET title = ?, id_product = ? WHERE id = ?");
        $result->bind_param("sii",$this->title,$this->id_product,$this->id);
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
        $result = $conexion->prepare("SELECT id,title,id_product FROM ".$this->tabla." WHERE id=?");
        $result->bind_param('i', $this->id);
        $result->execute();
        $result->bind_result($this->id,$this->title,$this->id_product);
        $result->fetch();
        $result->close();
    }

    function listar ()
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT id,title,id_product FROM ".$this->tabla);
        $resultados =array();
        while($row = $result->fetch_assoc()) {
            $resultados[] = $row;
        }
        $result->free();
        return $resultados;
    }

    function listar_x_id_product()
    {
        $conexion = new dbc();
        $result = $conexion->prepare("SELECT id,title,id_product FROM ".$this->tabla." WHERE id_product = ?");
        $result->bind_param('i', $this->id_product);
        $result->execute();
        $result->store_result();
        $resultados = array();
        while ($row = $result->fetch_assoc()) {
            $resultados[$row['id']] = $row;
        }
        $result->close();
        return $resultados;
    }


    function obtener_x_product ()
    {
        $conexion = new dbc();
        $result = $conexion->prepare("SELECT id,title,id_product FROM ".$this->tabla." WHERE id_product = ?");
        $result->bind_param('i',$this->id_product);
        $result->execute();
        $result->store_result();
        $result->bind_result($this->id,$this->title,$this->id_product);
        $result->fetch();
        $result->close();
    }


    function eliminar_x_product ()
    {
        $conexion = new dbc();
        $result = $conexion->prepare("DELETE FROM ".$this->tabla." WHERE id_product = ?");
        $result->bind_param("i",$this->id_product);
        $result->execute();
        $result->close();
    }


}