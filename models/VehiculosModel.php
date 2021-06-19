<?php
    class Vehiculos_model{
        private $db;
        private $vehiculos;
        public function __construct(){
            //al momento de hacer la instancia llamamos a la conexion
              $this->db=Conectar::conexion();
              $this->vehiculos =array();
        }

        public function get_vehiculos(){
                $sql="SELECT * FROM  vehiculos";
                //buscamos los elementos de la bd y llenamos el array con al informacion
                $resultado=$this->db->query($sql);
                while($row=$resultado->fetch_assoc()){
                    $this->vehiculos[] =$row;
                } 

                return $this->vehiculos;
        }

        public function insertar($placa,$marca,$modelo,$anio,$color){
            $resultado=$this->db->query("INSERT INTO  vehiculos (placa,marca,modelo,anio,color) VALUES ('$placa','$marca','$modelo','$anio,''$color') ");
        }
    }
?>