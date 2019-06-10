<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');
    $donnees = $bdd->query('SELECT * FROM plante_select');

    if(isset($_GET['id_plante']))
    {
        $id_plante = $_GET['id_plante'];

        while($donnees->fetch())
        {
            $query = $bdd->prepare('UPDATE plante_select SET id_bool = 1 WHERE id_plante = ?');
            $query->execute([$id_plante]);
            $update = $bdd->prepare('UPDATE plante_select SET id_bool = 0 WHERE id_plante <> ?');
            $update->execute([$id_plante]);
            header('Location: ../index.php');
        }
    }
    else 
    {
        echo 'Deja une plante';
    }
?>