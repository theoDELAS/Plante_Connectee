<?php

    if(isset($_GET['id_plante']))
    {
        $id_plante = $_GET['id_plante'];

        $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');
        $query = $bdd->prepare('INSERT INTO plante_select (id_plante) VALUES ("' . $id_plante . '")');
        $query->execute([$id_plante]);
        header('Location: ../../historiques/index.php');
    }
    else 
    {
        echo 'Deja une plante';
    }
?>