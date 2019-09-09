
<?php 

   
//$count = $db->exec('INSERT INTO articles SET  titre="Mon Super Titre", contenu="Super titre Avec un super contenu!"');
$query = $db->query('SELECT * FROM articles');
//$count = $query->fetchAll();

$datas = $query->fetchAll(PDO::FETCH_OBJ);
var_dump($datas[0]->titre);

?>










<h1>Je suis la home page!</h1>

<p><a href="index.php?page=single">Single</a></p>


<!--je suis a 13 minute 51 seconde sur grafikart 13/31 video 13-->