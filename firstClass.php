<?php

/*
interface Travailleur {
    public function travailler();
}

class Employe implements Travailleur
{

    public $nom;
    public $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age){

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }

    public function travailler(){
        return "Je suis un employé et je travaille";
    }

    public function setAge($age){
        if(is_int($age) && $age >= 1 && $age <= 120){
            $this->age = $age;
        } else {
            throw new Exception("L'age de l'employe devrait être un entier entre 1 et 120!");
        }
        
    }

    public function getAge(){
        return $this->age;
    }

    public function presentation(){
        var_dump("Salut, Je suis $this->prenom $this->nom et j'ai $this->age ans");
    }
}

//héritage!
class Patron extends Employe{
    public $voiture;

    public function __construct($nom, $prenom, $age, $voiture){
        //appeler le constructor parent!
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;

    }

    public function travailler(){
        return "Je suis le patron et je bosse !";
    }
    //polimorphysm
    public function presentation(){
        var_dump("bonjour, Je suis $this->prenom $this->nom et j'ai $this->age ans et j'ai une belle bagnole !");
    }

    public function rouler(){
        var_dump("Bonjour, je roule avec ma $this->voiture !");
    }
}

class Etudiant implements Travailleur
{
    public function travailler()
    {
        return 'je suis un etudiant et je revise !';
    }
}


$employe1 = new Employe("Aslan", "codintag", 34);
$employe2 = new Employe('John', 'Rambo', 45);
$etudiant = new Etudiant();
//500 lignes de code

//getter => accesseurs, setter => mutateurs, des portes ouvertes pour acceder aux propriétés privés.

$employe1->presentation();

$patron = new Patron('Benjamin', 'Brizzard', 57, 'BMW');

$patron->presentation();
$patron->rouler();

faireTravailler($employe1);
faireTravailler($patron);
faireTravailler($etudiant);

function faireTravailler(Travailleur $objet){
    var_dump("Travail en cours : {$objet->travailler()}");
}

*/


abstract class Human
{

    public $nom;
    public $prenom;
    protected $age;

    public function __construct($nom, $prenom, $age){

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }

    abstract public function travailler();


    public function setAge($age){
        if(is_int($age) && $age >= 1 && $age <= 120){
            $this->age = $age;
        } else {
            throw new Exception("L'age de l'employe devrait être un entier entre 1 et 120!");
        }
        
    }

    public function getAge(){
        return $this->age;
    }
}

class Employe extends Human
{
    
    public function travailler(){
        return "Je suis un employé et je travaille";
    }

    public function presentation(){
        var_dump("Salut, Je suis $this->prenom $this->nom et j'ai $this->age ans");
    }

}

//héritage!
class Patron extends Employe{
    public $voiture;

    public function __construct($nom, $prenom, $age, $voiture){
        //appeler le constructor parent!
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;

    }

    public function travailler(){
        return "Je suis le patron et je bosse !";
    }
    //polimorphysm
    public function presentation(){
        var_dump("bonjour, Je suis $this->prenom $this->nom et j'ai $this->age ans et j'ai une belle bagnole !");
    }

    public function rouler(){
        var_dump("Bonjour, je roule avec ma $this->voiture !");
    }
}

class Etudiant extends Human
{
    public function travailler()
    {
        return 'je suis un etudiant et je revise !';
    }
}


$employe1 = new Employe("Aslan", "codintag", 34);
$employe2 = new Employe('John', 'Rambo', 45);
$etudiant = new Etudiant('Sylvester', 'Stallone', 55);
//500 lignes de code

//getter => accesseurs, setter => mutateurs, des portes ouvertes pour acceder aux propriétés privés.

$employe1->presentation();

$patron = new Patron('Benjamin', 'Brizzard', 57, 'BMW');

$patron->presentation();
$patron->rouler();

faireTravailler($employe1);
faireTravailler($patron);
faireTravailler($etudiant);

function faireTravailler(Human $objet){
    var_dump("Travail en cours : {$objet->travailler()}");
}


