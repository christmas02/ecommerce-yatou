## methode Liste des commandes (commandeDetail)

Cette Méthode permet d'afficher toutes les produits commandés par un client  concernant une commande donnée.
Elle prend en paramètre l'identifiant de la commande.

Dans le fichier web.php se trouvant dans le dossier route
nous avons la route commandeDetail/{id} 
id = Identifiant de la commande

## methode de verification de l'existance du livreur dans la base de donnée (checklivreurexist)

Cette méthode permet de verifier si un livreur existe déjà dans la base de donnée. Elle prend en paramètre l'identifiant du livreur qui se trouve dans la table commande.


## methode d'affectation de livreur a une commande (affectationLivreur)

Cette méthode permet d'affecter un livreur a une commande. si c'est un nouveau livreur on enregistre ses informations dans la table livreurs et on l'affecte a la commande sinon on choisir un ancien livreur déja existant dans la table livreurs et on l'affecte aussi a la commande.
Un Mail d'information est ensuite envoyé au livreur avec les détails de la commande ainsi qu'u  autre au client avec les détails du livreur

Dans le fichier web.php se trouvant dans le dossier route
nous avons la route affectationlivreurcommande 

## methode pour motifier l'etat de la commande (livraison)

Cette methode prend en paramètre l'identifiant de la commande.
une commande à plusieurs etats : en attente, en cours, livrée ou annulée.

Cas N°1 Commande En Attente etat = 0
Lorsque le client passe sa commande elle prend alors cet etat jusqu'a ce que l'on affecte uun livreur a la commande.

Cas N°2 Commande En cours etat = 1
Lorsque la livraison de la commande est effectuée après validation par le système le stock des produits commandés est décrémenté.

Cas N°2 Commande Livrée etat = 2
Après confirmation de  livraison de la commande l'etat de la commande passe a livrée indiquant que la commande a bien éte livrée un email et confirmation est envoyé au client pour confirmation de livraison ainsi qu'au livreur.

Cas N°3 Commande Annulée etat = 3
En cas d'anulation de la commande l'etat de la commande passe a annulée indiquant que la commande a bien été annulée avec le motif d'anulation de la dite commande renseigné au préalable

Dans le fichier web.php se trouvant dans le dossier route
nous avons la route livraison/{id} 
id = Identifiant de la commande

## NB: Table Crée

Paniers, Livreur

## Champ ajouté aux tables existantes

livreur_id, motif dans la table commandes

