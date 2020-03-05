<?php
class Database{
    private $servername = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $handler;
    private $stmt;
    private $errormsg;



    public function __construct(){
        $conn = 'mysql:host='.$this->servername.';dbname='.$this->dbname;
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            //code...
            $this->handler = new PDO($conn,$this->user,$this->pass,$option);
        } catch (PDOException $e) {
            //throw $th;
            $this->errormsg = $e->getMessage();
            echo $this->errormsg;
        }

    }//--constructor function


    //Query function
    public function query($sql){
        $this->stmt = $this->handler->prepare($sql);
    }//--Query function

    //Bind function
    public function bind($param,$value,$type=null){
        if (is_null($type)) {
            # code...
            switch (true) {
                case is_int($value):
                    # code...
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    # code...
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    # code...
                    $type = PDO::PARAM_NULL;
                    break;
                
                default:
                    # code...
                    $type = PDO::PARAM_STR;

                    break;
            }
        }
        $this->stmt->bindValue($param,$value,$type);
    }//--Bind function

    //Execute
    public function execute(){
        return $this->stmt->execute();
    }//--Execute

    //Fetch OBJ
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount(){
        return $this->stmt->rowCount();
    }
    public function lastInsertedId(){
        return $this->stmt->lastInsertedId();
    }
}




?>