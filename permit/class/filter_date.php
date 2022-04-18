<?php

class filter_date extends database implements filter{
    
    public function filter($table,$rows="*",$date1,$date2,$id){
        $sql = "SELECT $rows FROM $table 
        WHERE id='$id' 
        AND ((on_leave_from between '$date1' and '$date2') 
        OR  (on_leave_to between '$date1' and '$date2'))";

        
        $this->sql = $result = $this->mysqli->query($sql);

    }
}
