<?php

    if(isset($_GET['id_slct']) && !empty($_GET['id_slct']))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');

        $requete = $bdd->prepare('DELETE FROM plante_select WHERE id_slct=?');
        $requete->execute([$_GET['id_slct']]);
        header('Location: ../index.php');
    }
    else 
    {
        echo 'Error';
    }
?>