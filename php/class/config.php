<?php
class config{
    private $user = 'iptroot';
    private $password = '12345';
    public $pdo = null;

    public function con(){
        try{
          $this->pdo = new PDO('mysql:host=192.168.192.70;dbname=db_autodoor',$this->user,$this->password); //place your IP address here
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->pdo;
    }

}
?>