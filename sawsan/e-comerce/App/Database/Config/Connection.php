<?php 

namespace App\Database\Config;

//use mysqli;

class Connecion {

    private string $dbHost ='localhost';
    private string $dbUsername='root';
    private string $dbPassword='';
    private string $dbName='ni-ecommerce';
    
    public \mysqli $con;

    public function __construct()
    {

      $this-> con= new \mysqli($this->dbHost , $this->dbUsername , $this->dbPassword , $this->dbName);
    }
    public function __destruct()
    {
        $this->con ->close();
    }
}
