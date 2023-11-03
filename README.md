Bienvenue dans votre test Symfony 6.3.7

N'oubliez pas de pousser vos modifications sur le repository Github avant
la fin du temps imparti, même si vous n'avez pas terminé.

Ce qui a déjà été créé :
- Un controller Main
- Un fichier base.html.twig avec Bootstrap 5
- Une vue main/index.html.twig
- Une entité Jeu et son JeuRepository
- Une migration à exécuter
- Des fixtures vous permettant de charger de fausses données.
Pour rappel, la commande php bin/console d:f:l vous permet de charger des fausses données dans votre base de données.

Vous êtes libre de soigner le design de votre site. Celui-ci fera parti intégrante de nos points de contrôle quant à votre niveau technique.

Votre mission :

- lister les jeux référencés sur le site dans votre page d'accueil (route /main) : pour chaque jeu : le nom du jeu et un bouton "voir" qui amène sur la route /jeu/id
- Créer une nouvelle route /jeu/id dans MainController pour afficher la page d'un jeu précis. Elle contiendra un H1 (Nom du jeu), 
la description du jeu et un bouton "revenir à la liste" qui renverra sur la page d'accueil.
- Créer un nouveau controller JeuAdmin et sa vue qui affichera "Bienvenue sur l'administration" sur la route /admin/jeu.
- Créer une nouvelle entité Genre (nom, couleur, image) et l'associer avec Jeu. Un Genre peut avoir plusieurs Jeux et un Jeu ne peut avoir qu'un Genre.
- Configurer le projet pour que la page d'accueil (le / de l'url) affiche automatiquement la route /main.


Bonus :
- Sécuriser la route /admin/jeu en créant un Utilisateur (email, password) via le système Security de Symfony.
Vous n'avez pas à créer une page d'inscription ni de login, seulement à bloquer les connexions vers /admin/jeu pour tout Utilisateur ne disposant pas du ROLE_ADMIN.