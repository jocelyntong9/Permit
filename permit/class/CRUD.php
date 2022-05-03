<?php

class CRUD extends database{

    public function __construct(){

        parent ::__construct();
    }

    public function insert( $table,$para=array() ){
        $table_columns = implode( ',', array_keys( $para ));
        $table_value = implode( "','", $para );

        $sql="INSERT INTO $table( $table_columns ) VALUES( '$table_value' )";

        $result = $this->mysqli->query($sql);
    }

    public function update( $table,$para=array(),$id ){
        $args = array();

        foreach ( $para as $key => $value ) {
            $args[] = "$key = '$value'"; 
        }

        $sql="UPDATE  $table SET " . implode( ',', $args );

        $sql .=" WHERE $id";

        $result = $this->mysqli->query( $sql );
    }

    public function delete( $table,$id ){
        $sql="DELETE FROM $table";
        $sql .=" WHERE $id ";
        $sql;
        $result = $this->mysqli->query( $sql );
    }

    public function select($table,$rows="*",$where = null){
        if ( $where != null ) {
            $sql="SELECT $rows FROM $table WHERE $where";
        }else{
            $sql="SELECT $rows FROM $table";
        }

        $this->sql = $result = $this->mysqli->query( $sql );
    }
    

    public function select_month($table,$rows,$month){   
        $sql="SELECT * FROM $table WHERE month($rows)='$month' AND status='Approved'";
        $this->sql = $result = $this->mysqli->query( $sql );
    }

    public function select_max($table,$variable,$rows){
        $sql = "SELECT max($rows) as $variable FROM $table";
        $this -> sql = $result = $this->mysqli->query($sql);
    }

    public function select_limit($table,$rows,$where=null,$limit){
        if ( $where != null ) {
            $sql="SELECT $rows FROM $table WHERE $where LIMIT $limit";
        }else{
            $sql="SELECT $rows FROM $table LIMIT $limit";
        }

        $this->sql = $result = $this->mysqli->query( $sql );

    }

}
