DESCRIPTIF DU PROJET


Vous êtes l’entreprise Connected Flowers.

Connected Flowers fournit une base de données, que l’utilisateur peut étendre (CRUD), qui contient initialement les spécifications d’environ 30 plantes (de la région). 

Cette base de données doit comprendre : 
- Le Nom de la plante 
- Une Catégorisation de la plante 
- La Description 
- Une ou plusieurs Photos 
- L’humidité optimale du sol 
- La température atmosphérique optimale
- La luminosité optimale 
- La période de floraison

La notion de base de données est générique vous pouvez utiliser le support de stockage qui vous convient le mieux :
- sql
- nosql
- lecture écriture dans un fichier (commencer par ça pour avoir un prototype fonctionnel et on peut le faire en python)
- etc

Connected Flowers fournit aussi un objet connecté qui permet de capter :
- l’humidité du sol
- la luminosité 
- la température atmosphérique

Les données captées sont remontées dans la base de données sous forme d’historique (toutes les X secondes / minutes / heures / jours / années / centenaire). 
Par le biais d’un application cliente, l’utilisateur peut contrôler si les conditions sont optimales pour ses plantes et être alerter par courriel ou autre si les conditions deviennent critiques pour la plante. 

Par ailleurs, l’utilisateur peut aussi planifier de planter une plante spécifique, le logiciel l’assistera en lui indiquant quand et comment la planter.