<?php

class filter_report extends database{

    public function filter($where=null){
            $sql ="SELECT * FROM request_on_leave WHERE $where";
            $this ->sql = $result = $this->mysqli->query ($sql);
        }

    }

    