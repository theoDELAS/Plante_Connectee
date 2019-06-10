<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');
    $donnees = $bdd->query('SELECT * FROM plante_select');

    if(isset($_GET['id_plante']))
    {
        $id_plante = $_GET['id_plante'];
        
        $insert = $bdd->prepare('INSERT INTO plante_select (id_plante, id_bool) VALUES ("' . $id_plante . '" ,"0")');
        $insert->execute([$id_plante]);
        header('Location: ../../historiques/index.php');
    }
    else 
    {
        echo 'Deja une plante';
    }
?>