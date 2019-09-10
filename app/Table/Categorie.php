<?php

namespace App\Table;

use App\App;



class Categorie extends Table{

protected static $table = 'categories';


    public function getURL(){
        return 'index.php?page=categorie&id=' . $this->id;
    }
 
}