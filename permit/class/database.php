<?php 

    class database{
        public $que;
        public $sql;
        protected $servername='localhost';
        protected $username='root';
        protected $password='';
        protected $dbname='permit';
        protected $result=array();
        protected $mysqli='';


        public function __construct(){
            $this->mysqli = new mysqli( $this->servername,$this->username,$this->password,$this->dbname );
        }
        
        public function __destruct(){
            $this->mysqli->close();
        }
    }

        
        
