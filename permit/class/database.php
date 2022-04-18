<?php 

    class database{
        public $que;
        public $sql;
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='permit';
        private $result=array();
        private $mysqli='';


        public function __construct(){
            $this->mysqli = new mysqli( $this->servername,$this->username,$this->password,$this->dbname );
        }
        
        public function __destruct(){
            $this->mysqli->close();
        }
    }

        
        
