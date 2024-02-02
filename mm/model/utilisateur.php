<?php 
include_once 'connection.php';
class utilisateur {
    private $Connection;
    protected $ID ;
    protected $nom ;
    protected $email ;


    public function __construct() {
        $this->Connection = Connection::getInstance()->gettconnection();
    }


    public function select(){
     $stmt = $this->Connection->query('Select * from utilisateur');
		return $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    public function join(){
        $stmt = $this->Connection->query(' SELECT utilisateur.nom , product.nom , panier.Status 
            From utilisateur
            JOIN panier ON utilisateur.ID_user = panier.id_user
            JOIN product ON product.id_product = panier.id_product');
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}

$obj = new utilisateur();
echo'<pre>';
var_dump($obj->select());
echo'</pre>';
echo'<pre>';
var_dump($obj->join());
echo'</pre>';

class client extends utilisateur{


}

class admin extends utilisateur{

}

