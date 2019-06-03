<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Plante Connectée</title>
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Plante Connectée</h1>
        </header>
        <section>
            <div class="container_titre">
                <div id="temperature">
                    <h2>Température</h2>
                    <div class="container">
                        <div class="box">
                            <div class="chart" data-percent="24">24°C</div>
                        </div>
                    </div>
                </div>
                <div id="humidite">
                    <h2>Humidité</h2>
                    <div class="container">
                        <div class="box">
                            <div class="chart" data-percent="70">70%</div>
                        </div>
                    </div>
                </div>

                <div id="luminosite">
                    <h2>Luminosité</h2>
                    <div class="container">
                        <div class="box">
                            <div class="chart" data-percent="50">50%</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="jquery.easypiechart.js"></script>
        <script>
            $(function() {
                $('.chart').easyPieChart({
                    //your options goes here
                });
            });
        </script>
    </body>
</html>