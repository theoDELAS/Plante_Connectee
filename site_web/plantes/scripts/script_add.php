<?php
    if(isset($_POST['plante_nom']) && isset($_POST['plante_categorie']) && isset($_POST['plante_description']) && isset($_POST['plante_humidite']) && isset($_POST['plante_luminosite']) && isset($_POST['plante_temperature']) && isset($_POST['plante_periode']) && isset($_POST['plante_photo']))
    {
        $plante_nom = $_POST['plante_nom'];
        $plante_categorie = $_POST['plante_categorie'];
        $plante_description = $_POST['plante_description'];
        $plante_humidite = $_POST['plante_humidite'];
        $plante_luminosite = $_POST['plante_luminosite'];
        $plante_temperature = $_POST['plante_temperature'];
        $plante_periode = $_POST['plante_periode'];
        $plante_photo = $_POST['plante_photo'];

        if(!empty($plante_nom) && !empty($plante_categorie) && !empty($plante_description) && !empty($plante_humidite) && !empty($plante_luminosite) && !empty($plante_temperature) && !empty($plante_periode) && !empty($plante_photo))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'root', '');
            $query = $bdd->prepare('INSERT INTO tb_plantes (plante_nom, plante_categorie, plante_description, plante_humidite, plante_luminosite, plante_temperature, plante_periode, plante_photo) VALUES ("' . $plante_nom . '", "' . $plante_categorie . '", "' . $plante_description . '", "' . $plante_humidite . '", "' . $plante_luminosite . '", "' . $plante_temperature . '", "' . $plante_periode . '", "' . $plante_photo . '")');
            $query->execute([$plante_nom, $plante_categorie, $plante_description, $plante_humidite, $plante_luminosite, $plante_temperature, $plante_periode, $plante_photo, $id_plante]);
            header('Location: ../index.php');
        }
        else 
        {
            echo 'Merci de renseigner tous les champs';
        }

    }
    else 
    {
        echo 'bdd pas trouvé';
    }
?>