<?php
    if(isset($_GET['id_plante']))
    {
        $id_plante = $_GET['id_plante'];
        // $plante_nom = $_GET['plante_nom'];
        // $plante_categorie = $_GET['plante_categorie'];
        // $plante_description = $_GET['plante_description'];
        // $plante_humidite = $_GET['plante_humidite'];
        // $plante_luminosite = $_GET['plante_luminosite'];
        // $plante_temperature = $_GET['plante_temperature'];
        // $plante_periode = $_GET['plante_periode'];
        // $plante_photo = $_GET['plante_photo'];


        $bdd = new PDO('mysql:host=localhost:3306;dbname=bdd_plantes;charset=utf8', 'pi', 'root');    
        $query = $bdd->prepare('INSERT INTO plante_select (id_plante) VALUES ("' . $id_plante . '")');
        $query->execute([$id_plante]);
        header('Location: ../../historiques/index.php');
    }
    else 
    {
        echo 'bdd pas trouvé';
    }
?>