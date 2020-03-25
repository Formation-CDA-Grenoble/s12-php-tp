# Travaux pratiques PHP

L'objectif est de construire une petite application qui exploite l'API de [The Movie DB](https://www.themoviedb.org/tv) pour afficher des données de séries télévisées. Le résultat attendu est d'avoir au minimum une page qui permette de choisir une série télévisée dans un menu déroulant, et qu'à la validation, une page s'affiche avec le titre de la série, et les informations sur les saisons de la série.

**ASTUCE**: L'extension Chrome [var_masterpiece](https://chrome.google.com/webstore/detail/varmasterpiece/chfhddogiigmfpkcmgfpolalagdcamkl) vous permet de visualiser le contenu de vos `var_dump` avec davantage de clarté.

## 1. Configurer le projet

Après avoir cloné le projet et l'avoir ajouté dans vos sites sur Wamp.net, ajoutez à la racine du projet un fichier **.env** au format suivant:

`TMDB_API_KEY=<Votre clé d'API>`

Vous pouvez vous inscrire personnellement sur [The Movie DB](https://www.themoviedb.org/tv) si vous souhaitez avoir votre propre clé d'API que vous pourrez réusiliser ultérieurement. Sinon, vous pouvez utiliser la clé d'API qui vous sera fournie le moment venu par votre formateur.

A l'aide d'un `var_dump`, vérifiez que votre clé d'API s'affiche correctement dans la page.

## 2. Découvrir l'API

La fonction `getTvShow` permet de récupérer toutes les informations sur une série télévisée. Il faut lui passer un **id** de série en paramètre.

La constante `MY_TV_SHOWS` contient les **id** de plusieurs séries télévisées (de très bon goût), avec lesquelles vous pouvez travailler. Rien ne vous empêche de chercher vos propres séries dans [The Movie DB](https://www.themoviedb.org/tv) pour les ajouter à ce tableau.

Utilisez la fonction `getTvShow` pour récupérer les informations d'une série télévisée. Puis, à l'aide d'un `var_dump`, vérifiez que le nom de la série s'affiche correctement dans la page. Vous pouvez également vérifier le contenu exact de l'objet renvoyé par `getTvShow` pour visualiser toutes ses propriétés.

## 3. Afficher une série

Créer une page qui affiche les informations d'une série (au minimum, le nom de la série, et la liste des saisons disponibles pour cette série).

### BONUS

Affichez également l'image de la série, et les genres à laquelle elle appartient.

## 4. Choisir une série

Créer un menu déroulant dans un formulaire qui permet de choisir un **id** de série parmi ceux disponibles dans la constante `MY_TV_SHOWS`. Lorsque le formulaire est validé, la page doit être rechargée et afficher les informations de la série sélectionnée.

### BONUS 1

Afficher le nom de chaque série dans le menu déroulant, au lieu de son **id**.

### BONUS 2

Le menu déroulant et l'affichage de la série doivent apparaître sur deux pages différentes.

## 5. Afficher la liste des séries

Créer une page d'accueil présentant la liste des séries disponibles dans la constante `MY_TV_SHOWS`, avec au minimum leur titre. Quand on clique sur le titre d'une série, on doit être redirigé sur la page qui présente les informations de cette série.

### BONUS

Déplacer le menu déroulant dans une barre de navigation qui doit apparaître sur toutes les pages (liste des séries, et détails d'une série).
