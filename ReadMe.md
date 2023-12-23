# Etape d'installation 
* 1er etape : installer le fichier contenant  l'api dans `c:/wamp64/www/`
* 2eme etape : installer le dossier contenant les credentials dans  `c:/wamp64/`
* 3eme etape : créer un utilisateur ayant le meme nom/mot de  passe  que le fichier des credentials dans PHPmyadmin
* 4eme etape : importer la base de données  dans phpmyadmin (en créant la table au préalable avec le nom "apisort")
## Merci de respecter ces etapes pour le bon fonctionnement de l'api


# API de Tri
Le but du "projet" etait de faire une API qui prends en requete un tableau de int dans le desordre,
et qu'en sortie, il nous revoie le tableau trié.


# Infos utiles 
* Un exemple de comment se construit la requete. -> `localhost/TestApi/?type=QuickSort&get=[10,4,5,6,1]`
* Vous definissez en premier argument le type de tri avec "type" , (vous disposez de QuickSort et InsertSort).
* Puis avec "get" vous definissez votre tableau en respectant bien les "[ , , , ]".


# Autre info
* La gestion d'erreur est en cours de realisation.

