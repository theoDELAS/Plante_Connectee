<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');
    $query = $bdd->query('SELECT * FROM releve');
    $query->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../header_html.php' ?>
        <title>Description plante</title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>
        <div class="container">
            <h1>Historique des données</h1>
            <?php
                echo '<a class="btn btn-primary" href="./index.php" role="button">Retour</a>';
            ?>

            <?php 
                while ($donnees = $query->fetch())
            {
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="contenu">
                                <?php 
                                    echo 'Le ' . $donnees['Time'] . '<br>';
                                    echo 'Humidité : ' . $donnees['rlv_humidite'] . '<br>';
                                    echo 'Température : ' . $donnees['rlv_temperature'] . '<br>';
                                    echo 'Luminosité : ' . $donnees['rlv_luminosite'] . '<br><hr>';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
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