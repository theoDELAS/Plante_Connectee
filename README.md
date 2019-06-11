# Connected Flowers
## Projet de fin de première année Ynov Informatique

Pour utiliser notre technologie, suivez les indications qui suivent :  
+ Télécharger Angry IP scanner : https://angryip.org/
+ Récupérer la carte SD qui se trouve dans la Raspberry 
+ Créer un fichier `wpa_supplicant.conf` et décrire à l'intérieur :
 ```
country=fr
update_config=1
ctrl_interface=/var/run/wpa_supplicant
network=
    {
        scan_ssid=1
        ssid="nom de votre wifi"
        psk="mot de passe de votre wifi"
    }
``` 
+ Insérer ce fichier dans la carte SD  
+ Replacer la carte SD dans la Raspberry  
+ Alimenter la Raspberry  
+ Lancer Angry IP scanner et chercher l'utilisateur `raspberrypi.mshome.net`
+ Récupérer son adresse IP
+ Connetez-vous à l'aide de votre PC présent sur le même réseau que votre Raspberry et aller au lien suivant : `adresseIpDeLaRaspberry/site_web/accueil/index.php`
