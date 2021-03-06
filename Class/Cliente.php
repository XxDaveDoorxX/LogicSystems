<?php
include_once ('inc/dbc.php');
class Cliente
{
    var $id;
    var $title;
    var $comment;
    var $rating;
    var $create_at;

    var $tabla = "clientes";


    function __construct($id = 0, $title = '', $comment = '', $rating = '', $create_at = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->comment = $comment;
        $this->rating = $rating;
        $this->create_at = $create_at;
    }


    function insertar () {
        $conexion = new dbc();
        $result = $conexion->prepare("INSERT INTO ".$this->tabla." (title, comment, rating, create_at) VALUES (?,?,?,?)");
        $result->bind_param("ssss",$this->title,$this->comment,$this->rating,$this->create_at);
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
        $result = $conexion->prepare("UPDATE ".$this->tabla." SET title = ?, comment = ?, rating = ?, create_at = ? WHERE id = ?");
        $result->bind_param("ssssi",$this->title,$this->comment,$this->rating,$this->create_at,$this->id);
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
        $result = $conexion->prepare("SELECT id, title, comment, rating, create_at FROM ".$this->tabla." WHERE id=?");
        $result->bind_param('i', $this->id);
        $result->execute();
        $result->bind_result($this->id,$this->title,$this->comment,$this->rating,$this->create_at);
        $result->fetch();
        $result->close();
    }

    function listar ()
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT id, title, comment, rating, create_at FROM ".$this->tabla);
        $resultados =array();
        while($row = $result->fetch_assoc()) {
            $resultados[] = $row;
        }
        $result->free();
        return $resultados;
    }

    function listar2 ($comp)
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT ".$this->tabla.".id,".$this->tabla.".title,".$this->tabla.".comment,".$this->tabla.".rating,".$this->tabla.".create_at FROM ".$this->tabla.mysqli_real_escape_string($conexion,$comp));
        $resultados =array();
        while($row = $result->fetch_assoc()) {
            $resultados[$row['id']] = $row;
        }
        $result->free();
        return $resultados;
    }

    function contar_total_registros()
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT COUNT(id) FROM ".$this->tabla);
        $total = $result->fetch_row();
        $result->free();

        return $total;
    }

    function contar_total_registros2($comp)
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT COUNT(".$this->tabla.".id) FROM ".$this->tabla.mysqli_real_escape_string($conexion,$comp));
        $total = $result->fetch_row();
        $result->free();
        return $total;
    }

}