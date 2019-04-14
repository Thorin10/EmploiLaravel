# EmploiLaravel
# Présentation : 

Ce projet a été réalisé dans le cadre d'un projet scolaire.
Il a pour but de créer un job Board étudiant où des entreprises postent des offres d'emploi, avec la possibilité pour les étudiants de postuler.

# Installation : 
- Télécharger le projet :
   ` git clone https://git.io/fjmgI`

- Installer les packages composer : 
`php composer install`

- Ajouter son fichier .env (avec ses paramètres de base de données et d'environment Homestead) :
	- [x] .env
- Lancer son Vagrant file Homestead :
	`vagrant up`
	
-   Accéder a l'url définit dans son fichier /etc/hosts (ici) :
	`192.168.10.10       homestead.emploi`

# État actuel du projet
### Pour un compte Entreprise
Actuellement, lorsque vous vous connectez avec un compte entreprise, vous pouvez ajouter une offre sur la page d'accueil du site et consulter l'ensemble des offres.

### Pour un compte étudiant
Actuellement vous pouvez, lorsque vous vous connectez avec un compte étudiant, consulter l'ensemble des offres sur la page principale, mais vous ne pouvez pas ajouter d'offres.

# Étapes à ajouter 
Pour un projet finit il faut :
- Qu' un étudiant puisse postuler à une offre
- Que les entreprises  reçoivent des mails lorsqu'un étudiant postule à l'offre
-  Qu'une entreprise puisse modifier une offre ou la supprimer
- Qu'un étudiant ait accès aux différentes offres auxquelles il a postulé.
