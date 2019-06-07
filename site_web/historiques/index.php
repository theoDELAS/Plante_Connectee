<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_plantes;charset=utf8', 'pi', 'root');    
    } 
    catch (Exception $e) 
    {
        die('Erreur : ' . $e->getMessage());
    }
    $query = $bdd->query('SELECT * FROM plante_select ps JOIN tb_plantes tbp ON ps.id_plante = tbp.id_plante');
    $query2 = $bdd->query('SELECT * FROM releve');
    $donnees2 = $query2->fetch();

    function verification_humidite($current_humidite) 
    {
        if ($current_humidite < 20)
        {
            return $current_humidite = 'danger';
        }
        else 
        {
            return $current_humidite = 'success';
        }
    }

    function verification_temperature($current_temperature) 
    {
        if ($current_temperature >= 20 && $current_temperature < 60)
        {
            return $current_temperature = 'success';
        }
        else 
        {
            return $current_temperature = 'danger';
        }
    }

    function verification_luminosite($current_luminosite) 
    {
        if ($current_luminosite >= 20 && $current_luminosite < 60)
        {
            return $current_luminosite = 'success';
        }
        else 
        {
            return $current_luminosite = 'danger';
        }
    }


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
                            <div class="col-md-6">
                                <p class="contenu">
                                    <?php 
                                        echo $donnees['plante_nom'];
                                        echo '<img src="' . $donnees['plante_photo'] . '" alt="sources images' . $donnees['plante_nom'] . '.">';
                                        echo '<a class="delete btn btn-danger" href="./scripts/script_delete.php?id_plante=' . $donnees['id_plante'] . '">Supprimer</a>';


                                    ?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <p class="contenu">
                                    <?php 
                                        echo 'Humidité : ' . $donnees2['rlv_humidite'] . '';
                                        echo 
                                        '<div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-'. verification_humidite($donnees2['rlv_humidite']) .'" role="progressbar" style="width: ' . $donnees2['rlv_humidite'] .'%" aria-valuenow="'.  $donnees2['rlv_humidite'] . '" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>';
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <p class="contenu">
                                    <?php 
                                        echo 'Température : ' . $donnees2['rlv_temperature'] . '';
                                        echo 
                                        '<div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-'. verification_temperature($donnees2['rlv_temperature']) .'" role="progressbar" style="width: ' . $donnees2['rlv_temperature'] .'%" aria-valuenow="'.  $donnees2['rlv_temperature'] . '" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>';
                                    ?>
                                </p>
                            </div>
                            <div class="col-md-2">
                                <p class="contenu">
                                    <?php 
                                        echo 'Luminosité : ' . $donnees2['rlv_luminosite'] . '';
                                        echo 
                                        '<div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-'. verification_luminosite($donnees2['rlv_luminosite']) .'" role="progressbar" style="width: ' . $donnees2['rlv_luminosite'] .'%" aria-valuenow="'.  $donnees2['rlv_luminosite'] . '" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>';
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