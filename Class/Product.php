<?php
include_once ('inc/dbc.php');
class Product
{
    var $id;
    var $name;
    var $code;
    var $f_video;
    var $description_first;
    var $description_second;
    var $characteristics;
    var $functionalities;

    var $tabla = "products";


    function __construct($id = 0, $name = "", $code = "", $f_video = '', $description_first = "", $description_second = "", $characteristics = "", $functionalities = "")
    {
        $this->id = $id;
        $this->name = $name;
        $this->code =  $code;
        $this->f_video = $f_video;
        $this->description_first = $description_first;
        $this->description_second = $description_second;
        $this->characteristics = $characteristics;
        $this->functionalities = $functionalities;
    }

    function insertar () {
        $conexion = new dbc();
        $result = $conexion->prepare("INSERT INTO ".$this->tabla." (name,code,f_video,description_first,description_second,characteristics,functionalities) VALUES (?,?,?,?,?,?,?)");
        $result->bind_param("sssssss",$this->name,$this->code,$this->f_video,$this->description_first,$this->description_second,$this->characteristics,$this->functionalities);
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
        $result = $conexion->prepare("UPDATE ".$this->tabla." SET name = ?, code = ?, f_video = ?, description_first = ?, description_second = ?, characteristics = ?, functionalities = ? WHERE id = ?");
        $result->bind_param("sssssssi",$this->name,$this->code,$this->f_video,$this->description_first,$this->description_second,$this->characteristics,$this->functionalities,$this->id);
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
        $result = $conexion->prepare("SELECT id,name,code,f_video,description_first,description_second,characteristics,functionalities FROM ".$this->tabla." WHERE id=?");
        $result->bind_param('i', $this->id);
        $result->execute();
        $result->bind_result($this->id,$this->name,$this->code,$this->f_video,$this->description_first,$this->description_second,$this->characteristics,$this->functionalities);
        $result->fetch();
        $result->close();
    }

    function listar ()
    {
        $conexion = new dbc();
        $result = $conexion->query("SELECT id,name,code,f_video,description_first,description_second,characteristics,functionalities FROM ".$this->tabla);
        $resultados =array();
        while($row = $result->fetch_assoc()) {
            $resultados[] = $row;
        }
        $result->free();

        return $resultados;
    }


}