<?php
    $bdd = new PDO('mysql:host=localhost:3306;dbname=bdd_plantes;charset=utf8', 'pi', 'root');    
    $query = $bdd->prepare('SELECT * FROM tb_plantes WHERE id_plante = ?');
    $query->execute([$_GET['id_plante']]);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../header_html.php' ?>
        <title>Modifier plante</title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>


            <?php 
                while ($donnees = $query->fetch())
            {
            ?>
            <h1>
                <?php echo 'Modifier les informations pour : ' . $donnees['plante_nom'] . '<br>';
                    echo '<a class="btn btn-primary" href="./index.php" role="button">Retour</a>';
                ?>
            </h1>
        

            <form action="./scripts/script_edit.php" method="post">
                <label for="plante_nom">Nom</label>
                <input type="text" name="plante_nom" value="<?= $donnees['plante_nom'] ?>">

                <label for="plante_categorie">Catégorie</label>
                <input type="text" name="plante_categorie" value="<?= $donnees['plante_categorie'] ?>">

                <label for="plante_description">Description</label>
                <input type="text" name="plante_description" value="<?= $donnees['plante_description'] ?>">

                <label for="plante_humidite">Humidité</label>
                <input type="text" name="plante_humidite" value="<?= $donnees['plante_humidite'] ?>">

                <label for="plante_luminosite">Luminosité</label>
                <input type="text" name="plante_luminosite" value="<?= $donnees['plante_luminosite'] ?>">

                <label for="plante_temperature">Température</label>
                <input type="text" name="plante_temperature" value="<?= $donnees['plante_temperature'] ?>">

                <label for="plante_periode">Période</label>
                <input type="text" name="plante_periode" value="<?= $donnees['plante_periode'] ?>">

                <label for="plante_photo">URL photo</label>
                <input type="text" name="plante_photo" value="<?= $donnees['plante_photo'] ?>">

                <input type="hidden" value="<?= $_GET['id_plante'] ?>" name="id_plante">

                <input type="submit" value="Valider">
            </form>





            <?php
            }
            ?>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
        </script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous">
        </script>
    </body>
</html>