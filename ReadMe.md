# Etape d'installation 
* 1er etape : deplacer le dossier `TestApi` dans `c:/wamp64/www/`
* 2eme etape : deplacer le dossier `Credentials` dans  `c:/wamp64/`
* 3eme etape : créer un utilisateur ayant le meme nom d'utilisateur et mot de passe que dans le fichier `private.json` (se situe dans le dossier Credentials) dans PHPmyadmin
* 4eme etape : importer la base de données  dans phpmyadmin (en créant la table au préalable avec le nom "**apisort**")
## Merci de respecter ces etapes pour le bon fonctionnement de l'api


# API de Tri
Le but du "projet" etait de faire une API qui prends en requete un tableau de int dans le desordre,
et qu'en sortie, il nous revoie le tableau trié.


# Infos utiles 
* Un exemple de comment se construit la requete. -> `localhost/TestApi/MonEndpoint/?type=InsertSort&get=[106,4,5,666,1]`
* Vous definissez en premier argument le type de tri avec "type" , (vous disposez de **QuickSort** et **InsertSort**).
* Puis avec "**get**" vous definissez votre tableau en respectant bien les "[ , , , ]".


# Autre info
* La gestion d'erreur et le filtrage est en cours de realisation.

