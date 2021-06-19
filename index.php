<?php
require_once "config/config.php";
require_once "core/routes.php";
require_once  "config/database.php"; 
require_once  "controllers/Vehiculos.php";

// asi se trabaja cunado no es dinamico solo con fines de aprendizaje
// $control =new VehiculosController();
// $control->index(); 
//se evalua el archivo  qeu se importa  en este casos  una vista  
// require_once "views/vehiculos/vistarara.php"
// metodo que preocese la   validaciones de la parte de los controladores miau asi es  listo para mergear 

if(isset($_GET['c'])){
    
    $controlador =cargarControlador($_GET['c']);      
    
    if(isset($_GET['a'])){
        cargarAccion($controlador,$_GET['a']);
    }else{
        cargarAccion($controlador,ACCION_PRINCIPAL);
    }

}else{
    $controlador =cargarControlador(CONTROLADOR_PRINCIPAL);
    cargarAccion(CONTROLADOR_PRINCIPAL,ACCION_PRINCIPAL);
}
  
?>