<?php
    $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'root', '');
    $query = $bdd->prepare('SELECT * FROM tb_plantes WHERE id_plante = ?');
    $query->execute([$_GET['id_plante']]);
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

            <?php 
                while ($donnees = $query->fetch())
            {
            ?>
            <h1>
                <?php echo $donnees['plante_nom'] . '<br>';
                    echo '<a class="btn btn-primary" href="./index.php" role="button">Retour</a>';
                ?>
            </h1>
        
        

                <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="contenu">
                            <?php 
                                echo 'Les <span class="donnees">' . $donnees['plante_nom'] . 's</span> font parti des <span class="donnees">' . $donnees['plante_categorie'] . '</span>. Il est recommandé de le planter entre les mois <span class="donnees">' . $donnees['plante_periode'] . '</span>.<br>' .
                                'Il faut également penser à mettre cette plante dans un un endroit où la température est idéalement à <span class="donnees"> ' . $donnees['plante_temperature'] . '°C</span>.<br>' . 
                                'Pensez également à vérifier (grâce à notre application), que la luminosité de l\'endroit soit aux alentours de <span class="donnees"> ' . $donnees['plante_luminosite'] . '%</span>, ainsi qu\'à garder un taux d\'humidité de la terre aux alentour de <span class="donnees"> ' . $donnees['plante_humidite'] . '%</span>.<br>' . 
                                'Si vous respectez tous ces conseils, votre <span class="donnees"> ' . $donnees['plante_nom'] . '</span> devrait ressembler à ceci :';
                            ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <?php echo '<img src="' . $donnees['plante_photo'] . '" alt="sources images' . $donnees['plante_nom'] . '.">'; ?>
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