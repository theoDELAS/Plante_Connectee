<?php

    if(isset($_GET['id_plante']) && !empty($_GET['id_plante']))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');

        $requete = $bdd->prepare('DELETE FROM plante_select WHERE id_plante=?');
        $requete->execute([$_GET['id_plante']]);
        header('Location: ../index.php');
    }
    else 
    {
        echo 'Error';
    }
?>