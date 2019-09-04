<?php
//require_once "../../controllers/noticiassControllersCsC.php";
require_once "../../controllers/adminListControllersC.php";
class Ajax{
    public $imagenTemporal;
    public function gestorNoticiaAjax(){
        $datos=$this->imagenTemporal;
        //echo $datos;
        $respuesta= adminListControllerssC::mostrarImagenNoticiaController($datos);
        echo $respuesta;
    }
}


#----------objetos-----------
if (isset($_FILES["imagen"]["tmp_name"])){
    $a=new Ajax();
    $a->imagenTemporal=$_FILES["imagen"]["tmp_name"];
    $a->gestorNoticiaAjax();

}

