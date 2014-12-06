<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
Class Staff{

    private $current_connection = null;
    private $current_id = null;

    public function __construct(){

        $connection_contaner = new Connections();
        $this->current_connection=$connection_contaner->getConnection();
        $this->selectRecord();

        if($this->current_id == false){
            print "Not correct login or/and password!";
        }
        else{
           var_dump($this->current_id);
        }

    }

    private function selectRecord(){
        $query = "SELECT id FROM staff";
        $result = $this->current_connection->query($query);

        $this->distreatSQLResult($result);
    }

    private function distreatSQLResult($result){
        foreach($result as $values){
            var_dump($values);
        }

    }

}