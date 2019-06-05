<?php

    if(isset($_GET['id_plante']) && !empty($_GET['id_plante']))
    {
        $bdd = new PDO('mysql:host=localhost:3306;dbname=bdd_plantes;charset=utf8', 'pi', 'root');    

        $requete = $bdd->prepare('DELETE FROM tb_plantes WHERE id_plante=?');
        $requete->execute([$_GET['id_plante']]);
        header('Location: ../index.php');
    }
    else 
    {
        echo 'Error';
    }
?>