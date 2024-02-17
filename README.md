**Etapes d'installation**

via url ou ssh : 
git clone https://github.com/grintzdel/boilerplate_DockerMysql.git
git clone git@github.com:grintzdel/boilerplate_DockerMysql.git


**Mise en route du container Docker**

Première installation sur sa machine : 
docker-compose up --build

Lancement du container une fois installé : 
docker-compose up

**Accès aux pages et à phpmyadmin**

Pour voir les pages dans le navigateur : 
localhost:8080

Accéder à phpmyadmin : 
localhost:8081

La connexion à phpmyadmin se fait **automatiquement** (voir fichier docker-compose.yml à partir de la **ligne 28** si l'on veut changer ce comportement).
Une fois des tables/champs créés dans la BDD, cette dernière va venir se créer **automatiquement** dans le dossier **db**. 
