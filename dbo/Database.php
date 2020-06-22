<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 4/3/2018
 * Time: 10:06 AM
 */

class Database
{
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "tds_db";
    //Shahana: Pass: "Test123" , DB: PMIS
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    private function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,
            $this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }

        if($this->_connection){
            $this->_connection->query('SET character_set_results=utf8');
        }
    }

    /**
     * @param $where
     * @param $conditions
     * @return string
     */
    public function getCondition($where, $conditions)
    {
        if (!empty($where)) {
            foreach ($where as $field => $value) {
                $conditions .= sprintf(" and " . $field . "='" . $value . "'");
            }
        }
        return $conditions;
    }

    /**
     * @param $where
     * @param $conditions
     * @return string
     */
    public function where($where)
    {
        $conditions = sprintf(" 1=1 ");
        if (!empty($where)) {
            foreach ($where as $field => $value) {
                $conditions .= sprintf(" and " . $field . "='" . $value . "'");
            }
        }
        return $conditions;
    }
    /**
     * @param $sort
     * @param $conditions
     * @return string
     */
    public function sort($sort)
    {
        $sortStr = "";
        if (!empty($sort)) {
            foreach ($sort as $field => $order) {
                $sortStr .= ($sortStr!="")?sprintf(" , " . $field . " " . $order." " ):sprintf(" order by " . $field . " " . $order ." ");
            }
        }
        return $sortStr;
    }

    /**
     * @param $like
     * @param $likeStatment
     * @return string
     */
    public function like($like)
    {
        $sortStr = "";
        if (!empty($like)) {
            foreach ($like as $field => $condition) {
                $sortStr .= " and " . $field . " like '%" . $condition."%' ";
            }
        }
        return $sortStr;
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }
    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
    // Get mysqli connection
    public function closeConnection() {
        return $this->_connection->close();
    }

    public function insert($table, $data = array(),$prStatus = false){
        $this->executeCharSet();

        $cols = "";
        $values = "";

        if(!empty($data)){
            foreach ($data as $key=>$value){
                $cols = ($cols=="")?"`".$key."`":$cols.","."`".$key."`";
                $values = ($values == "")?sprintf("'".$value."'"):$values.sprintf(",'".$value."'");
            }
           $sql = "INSERT INTO $table ($cols) VALUES ($values)";
            //pr($sql); die;
            if($this->_connection->query($sql)){
                //pr("true"); die;
                return true;
            }else{
                //pr($this->_connection->error); die;
                return $this->_connection->error;

            }
        }
        return false;
    }

    public function update($table, $pk, $data = array(),$prStatus = false){
        $setList = "";
        if(!empty($data['id'])){
            foreach ($data as $key=>$value){
                if($key=="id"){continue;}
                $setList .=sprintf((($setList!="")?",":"")."`".$key."`='".$value."'");
            }
            $sql = sprintf("UPDATE `".$table."` SET $setList where id=".$pk);
            //pr($sql); die;
            $this->executeCharSet();
            if($this->_connection->query($sql)){
                return true;
            }else{
                return $this->_connection->error;
            }
        }
        return false;
    }

    public function getInsertId(){
        return $this->_connection->insert_id;
    }

    public function dataMap($table, $data = array(), $where = array()){
        //include DB_FILE;
        $query = "SELECT * FROM $table";
        $query .=sprintf(" where ".$this->where($where));
//        echo "<br/>";
//        print_r($data);die;
        $resultMap = array();
        if ($result = $this->_connection->query($query)) {
            while ($obj = $result->fetch_assoc()) {
                $resultMap[$obj[$data['key']]] = $obj[$data["value"]];
            }
        }
        return $resultMap;
    }


    public function mapFormRawQuery($query, $mapStructure=array()){
        $dataArr = $this->executeRawQuery($query);
        $resultMap = array();
        if (!empty($dataArr) &&isset($mapStructure['key']) && isset($mapStructure['value'])) {
            foreach($dataArr as $key=>$data) {
                $resultMap[$data[$mapStructure['key']]] = $data[$mapStructure["value"]];
            }
        }
        return $resultMap;
    }

    public function getRows($table, $fields = array(), $where = array(), $sort = array(), $like = array()){
        //include DB_FILE;
        $query = "SELECT * FROM $table";
        $query .=sprintf(" where ".$this->where($where));
        $query .=$this->like($like);
        $query .=sprintf($this->sort($sort));
        $result = $this->_connection->query($query);
        $rows = array();
        if ($result) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }

    public function getRow($table, $fields = array(), $where = array(), $sort = array()){

        //include DB_FILE;
        $query = "SELECT * FROM $table";

        $conditions = " 1=1 ";
        $conditions = $this->where($where, $conditions);
        $query .=sprintf(" where ".$conditions);
        $result = $this->_connection->query($query);

        //echo $query;
        if ($result) {
            return $result->fetch_assoc();
        }
    }

    public function executeRawQuery($query){
        $result = $this->_connection->query($query);
        $rows = array();
        if ($result) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }
        return $rows;
    }
    public function executeRawQueryForSingleRow($query){
        $result = $this->_connection->query($query);
        return $result->fetch_assoc();
    }



    public function insertRawQuery($query){
        return $this->_connection->query($query);
    }

    public function startTransaction(){
        $this->_connection->begin_transaction();
    }
    private function executeCharSet(){
        $this->_connection->query("SET CHARACTER SET utf8");
        $this->_connection->query("SET SESSION collation_connection ='utf8_general_ci'");
    }
}