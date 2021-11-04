<?php


    class conectar{
     protected $dbh;


        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:host=34.68.196.220;dbname=g6_20","G6_20","dAG0h3zR");
                return $conectar;

            } catch (Exception $e) {
                print "¡¡ERROR BD!!: " . $e->getmessage() . "<br/>";
                die();
            }

        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }   

    }

?>