<?php
    try 
        {
            $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'root', '');    
        } catch (Exception $e) 
        {
            die('Erreur : ' . $e->getMessage());
        }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../header_html.php' ?>
        <title>Plantes</title>
    </head>
    <body>
        <?php include '../navbar.php'; ?>
        <h1>Liste de plantes</h1>
        <div class="container">

            <div class="row">
                <div class="col-md-2">
                    <p class="titre">Plante</p><br>
                </div>
                <div class="col-md-3">
                    <p class="titre">Catégorie</p><br>
                </div>
                <div class="col-md-5">
                    <p class="titre">Description</p><br>
                </div>
            </div>
        </div>

        <?php
            $query = $bdd->query('SELECT * FROM tb_plantes');
            while ($donnees = $query->fetch())
            {
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <p class="contenu">
                                <?php echo $donnees['plante_nom']; ?><br>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <p class="contenu">
                                <?php echo $donnees['plante_categorie']; ?><br>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <p class="contenu">
                                <?php echo $donnees['plante_description']; ?><br>
                            </p>
                        </div>
                        <div class="col-md-1">
                            <p class="contenu">
                                <?php echo '<a class="btn btn-primary" href="./voir_plus.php?id_plante=' . $donnees['id_plante'] .'"  role="button">Voir plus</a>';?>
                            </p>
                        </div>
                        <div class="col-md-1">
                            <p class="contenu">
                                <?php echo '<a class="delete btn btn-danger" href="./script_delete.php?id_plante=' . $donnees['id_plante'] . '">Supprimer</a>';?>
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
            <?php
            }
                $query->closeCursor();
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