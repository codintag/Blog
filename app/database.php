<?php 
namespace App;

class Database {

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $db;

    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost'){

        $this->db_name = $db_name
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

    }

    private function getPDO(){

        $db = new PDO('mysql:dbname=blog; host=localhost', 'root', '');
        echo 'Je suis connecté!';

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db = $db;
    }

    public function query() {
        
    }
}