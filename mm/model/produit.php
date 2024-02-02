<?php 
include_once 'connection.php';

 abstract class produit {
    private $Connection;
    public  $id;
    public  $nom;
    public  $prix;
    public $stock;


    public function __construct() {
        $this->Connection = Connection::getInstance()->gettconnection();
    }
    public function selectProduct(){
        $stmt = $this->Connection->query('Select * from product');
           return $stmt->fetchAll(PDO::FETCH_ASSOC);   
       }

}
$obj = new produit();
var_dump($obj->selectProduct());
interface ProduitPhysique{

}

interface ProduitNumerique{

}


