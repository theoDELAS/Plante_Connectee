<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'root', '');    
    } 
    catch (Exception $e) 
    {
        die('Erreur : ' . $e->getMessage());
    }
    $query = $bdd->query('SELECT * FROM plante_select ps JOIN tb_plantes tbp ON ps.id_plante = tbp.id_plante');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../header_html.php' ?>
        <title>Mes plantes</title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>
        <div class="container">
        <h1>Mes plantes</h1>
            <?php 
                while ($donnees = $query->fetch())
                {
            ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="contenu">
                                    <?php 
                                        echo $donnees['plante_nom'];
                                        echo '<img src="' . $donnees['plante_photo'] . '" alt="sources images' . $donnees['plante_nom'] . '.">';
                                    ?>
                                </p>
                            </div>
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