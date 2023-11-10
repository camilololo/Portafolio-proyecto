<?php
    class Conectar{
        protected $dbh;
        protected function conexion(){
            try{
                $conectar=this->dbh=new PDO("mysql:local=localhost;dbname=Basedaticos","root","");
                return $conectar;
            }catch(Exeption $e){
                print "Conexión fallida" . $e->getMessage()."<br>";
                die();
            }
        }
    }