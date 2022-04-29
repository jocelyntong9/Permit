<?php


    class database
    {
        private $host="localhost" ;
        private $user="root" ;
        private $pass="" ;
        private $db="permit" ;
        public function_construct()
        {
            $this->koneksi = new mysli ($this->host, this->user, $this->pass, $this->db);
            if($this->koneksi==false)die("Tidak dapat tersambung ke database" .$this->koneksi->connect_error());
            return $this->koneksi;
            }
        }
    } 


?>