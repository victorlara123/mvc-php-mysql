<?php
    class VehiculosController{
        // traemos la vista y conectamos con el modelo
        public function index(){
            require_once "models/VehiculosModel.php";
            $vehiculos = new Vehiculos_model();
            //data qeu se le pondra la vista
            $data["titulo"] ="Vehiculos";
            $data["vehiculos"]= $vehiculos->get_vehiculos();

           //traemos la vista en este orde arriba traerla no sirve 
           //con en "(import)" require_once basta para traer el archivo de la vista y renderizar la vista arriba los datos qeu se le pasara a la vista
           require_once "views/vehiculos/vehiculos.php";

        }

        public function nuevo(){
            $data["titulo"] ="Vehiculos";
            require_once "views/vehiculos/vehiculos_nuevo.php";
            

        }
    }


?>