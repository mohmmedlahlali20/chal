<?php 



class Connection{
    private static $instence;
    private $connection;


    public function __construct(){
        $this->connection = new PDO('mysql:host=localhost;dbname=challenge', 'root', '');

        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance(){

        if(!self::$instence){
            self::$instence = new Connection();
        }
        return self::$instence;
    }

    
    public function gettconnection(){
        return $this->connection;
    }
}
//  $dd = new Connection();
//  var_dump($dd);