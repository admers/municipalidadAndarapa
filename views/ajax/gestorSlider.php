<?
//require_once "../../controllers/sliderControllersC.php";}
require_once "../../controllers/sliderControllersC.php";

class Ajax{
    public $imagenTemporal;
    public function gestorSliderAjax(){
        $datos=$this->imagenTemporal;
        //echo $datos;
        $respuesta= GestorSlidersC::mostrarImagenController($datos);
        echo $respuesta;
    }
}

#----------objetos-----------
if (isset($_FILES["imagen"]["tmp_name"])){
    $a=new Ajax();
    $a->imagenTemporal=$_FILES["imagen"]["tmp_name"];
    $a->gestorSliderAjax();

}

if (isset($_POST['ids'])){
   // require_once "../controllers/sliderControllersC.php";
    $insAdmin=new GestorSlidersC();
    $res= $insAdmin->eliminarSliderController();
    echo $res;
}