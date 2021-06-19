<?php
//organizamos bacan concatenamos los nombres para qeu coincidan 
 function cargarControlador($controlador){
     $nombreControlador=ucwords($controlador)."Controller";
     $archivoControlador='controllers/'.ucwords($controlador).'.php';  

    //  validamos si no existe el controlador
     if(!is_file($archivoControlador)){ 
         $archivoControlador='controllers/'.CONTROLADOR_PRINCIPAL.'.php';
     }
     echo $archivoControlador;
     require_once $archivoControlador;
     $control=new $nombreControlador();  
     return $control;

    }

  function cargarAccion($controller, $accion){

    if(isset($accion) && method_exists($controller,$accion)){
        $controller->$accion();
    }else{
        $controller->ACCION_PRINCIPAL();
    }
  }  



?>