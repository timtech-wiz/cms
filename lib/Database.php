<?php

class Database{
    //Database params
    private $db_host = DB_HOST;
    private $db_user = DB_USER;
    private $db_pass = DB_PASS;
    private $db_name = DB_NAME;
    
    // HANDLERS
    private $dbh;
    private $error;
    private $stmt;
    
    public function __construct(){
        //create DSN
        $dsn = "mysql:host=". $this->db_host. ";dbname=". $this->db_name;
        
        //Create options
        
        $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
        
        );
        
        try{
            $this->dbh = new PDO($dsn, $this->db_user, $this->db_pass, $options);
        }
        catch(PDOEception $e){
            $this->error = $e->getMessage();
        }
        
    }
    
    // set query function
    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }
    
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                break;
                    
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                break;
                    
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                break;
                    
                default:
                    $type = PDO::PARAM_STR;
                break;
            }
        }
        
        $this->stmt->bindValue($param, $value, $type);
        
    }
    
    public function execute(){
        $this->stmt->execute();
    }
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    
     public function single(){
         $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    
      public function count($result){
         $this->execute();
        return $this->stmt->rowCount($result);
    }
    
      public function lastInsertId(){
         $this->execute();
        $this->dbh->lastInsertId();
    }
    
    
    

    
    
        
}