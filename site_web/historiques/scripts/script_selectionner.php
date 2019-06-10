<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');
    $donnees = $bdd->query('SELECT * FROM plante_select');

    if(isset($_GET['id_slct']))
    {
        $id_slct = $_GET['id_slct'];

        while($donnees->fetch())
        {
            $query = $bdd->prepare('UPDATE plante_select SET id_bool = 1 WHERE id_slct = ?');
            $query->execute([$id_slct]);
            $update = $bdd->prepare('UPDATE plante_select SET id_bool = 0 WHERE id_slct <> ?');
            $update->execute([$id_slct]);
            header('Location: ../index.php');
        }
    }
    else 
    {
        echo 'Deja une plante';
    }
?>