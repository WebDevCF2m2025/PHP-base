# PHP-base 2025

## Menu de navigation
- [Présentation](#présentation)
- [Historique de PHP](#historique-de-php)
- [Installation de Apache, PHP et MySQL](#installation-de-apache-php-et-mysql)
  - [Installation de WAMP pour Windows](#installation-de-wamp-pour-windows) 
  - [Installation de XAMPP pour MacOs](#installation-de-xampp-pour-macos)
- [Les fichiers du formateur](#les-fichiers-du-formateur)
- [Principe des exercices](#principe-des-exercices)
- [Les bases de PHP](#les-bases-de-php)
  - [Les fichiers PHP](#les-fichiers-php)
  - [Les balises PHP](#les-balises-php)
  - [Les commentaires](#les-commentaires)
  - [Placement des balises PHP](#placement-des-balises-php)
- [Les variables](#les-variables)
  - [Déclaration de variables non strictement typées](#déclaration-de-variables-non-strictement-typées)
  - [Les tableaux](#les-tableaux)
  - [Les tableaux indexés](#les-tableaux-indexés)
  - [Les tableaux associatifs](#les-tableaux-associatifs)
  - [Les tableaux multidimensionnels](#les-tableaux-multidimensionnels)
  - [Les variables superglobales](#les-variables-superglobales)
    - [$_GET](#_get)
- [Les constantes](#les-constantes)
- [Les conditions](#les-conditions)
  - [if](#if)
  - [else](#else)
  - [elseif() ou else if()](#elseif-ou-else-if)
  - [Exercices et exemples if - elseif - else](#exercices-et-exemples-if---elseif---else)
  - [Autre manière de faire des conditions](#autre-manière-de-faire-des-conditions)
  - [switch](#switch) 
  - [Les opérateurs de comparaison](#les-opérateurs-de-comparaison)
      - [Les opérateurs et fonctions de comparaison](#les-opérateurs-et-fonctions-de-comparaison)
  - [Les opérateurs logiques](#les-opérateurs-logiques)
  - [Les opérateurs d'affectation](#les-opérateurs-daffectation)
- [Les boucles](#les-boucles)
  - [for](#for)
  - [foreach](#foreach)
  - [while](#while)
  - [do while](#do-while)
- [Les inclusions](#les-inclusions)
  - [include](#include)
  - [require](#require)
  - [include_once](#include_once)
  - [require_once](#require_once)
- [Les fonctions](#les-fonctions)
    - [Les fonctions natives](#les-fonctions-natives)
    - [Les fonctions personnalisées](#les-fonctions-personnalisées)
        - [Les paramètres de fonction](#les-paramètres-de-fonction)
        - [Les paramètres par défaut](#les-paramètres-par-défaut)
        - [Les arguments nommés](#les-arguments-nommés)
        - [Les valeurs de retour](#les-valeurs-de-retour)


! [Function à mettre en liste](#function-à-mettre-en-liste) !



---

### Présentation

![PHP - Par El Roubio — http://www.elroubio.net/?p=adopt_an_elephpant. Transféré de en.wikibooks à Commons par Adrignola utilisant CommonsHelper., GPL, https://commons.wikimedia.org/w/index.php?curid=11165880](https://github.com/mikhawa/PHP-base/blob/main/datas/Elephpant.png?raw=true)

**PHP**, acronyme récursif de *Hypertext Preprocessor*, est un langage de script utilisé le plus souvent côté serveur : 
 
Dans cette architecture, le serveur interprète le code PHP des pages web demandées et génère du code (Tous les formats de type texte : HTML, XHTML, CSS, XML, JSON, Javascript, …) et/ou des données (JPEG, GIF, PNG, SVG, PDF par exemple) pouvant être interprétés et rendus par un navigateur web. 

Il a été conçu pour permettre la création d'applications dynamiques, le plus souvent développées pour le Web. Etant un langage de type **script**, il n'est pas obligatoirement [compilé](## "Transformation d'un code lisible par un humain vers un code machine") pour être exécuté. Il est donc interprété à chaque appel de page par le serveur (sauf pour la compilation à la volée [JIT](## "compilation Just-in-Time") ou par gestion des caches).

PHP est le plus souvent couplé à un serveur [Apache](## "Apache est un serveur HTTP conçu pour prendre en charge de nombreux modules : interprétation des langages Perl, PHP, Python et Ruby, serveur proxy, CGI, réécriture d'URL, négociation de contenu, protocoles de communication additionnels, etc...") bien qu'il puisse être installé sur la plupart des [serveurs HTTP](## "Un serveur HTTP est un serveur informatique qui répond à des requêtes du World Wide Web sur un réseau public (Internet) ou privé (intranet) en utilisant principalement le protocole HTTP.") tels que [IIS](## "Internet Information Services (IIS) de Microsoft") ou [nginx](## "NGINX est un système HTTP asynchrone par opposition aux serveurs synchrones où chaque requête est traitée par un processus dédié"). Ce couplage permet de récupérer des informations issues d'une base de données, d'un système de fichiers (contenu de fichiers et de l'arborescence) ou plus simplement des données envoyées par le navigateur afin d'être interprétées ou stockées pour une utilisation ultérieure.

C'est un langage qui peut, comme au début de ce cours, être [peu typé](## "Typage faible :  Propriété d’un langage de programmation d’autoriser l’affectation de variable avec des valeurs ne correspondant pas à son type déclaré.") et souple, donc facile à apprendre par un débutant, mais de fait moins sécurisé et plus difficile à maintenir. 

Un typage fort est donc conseillé par la suite avec l'adoption de la [Programmation Orientée Objet](## "La programmation orientée objet est un paradigme de programmation informatique. Elle consiste en la définition et l'interaction de briques logicielles appelées objets.") (POO).

Son utilisation commence avec le traitement des formulaires puis par l'accès aux bases de données. L'accès aux bases de données est aisé une fois l'installation des modules correspondants effectuée sur le serveur. La force la plus évidente de ce langage est qu'il a permis au fil du temps la résolution aisée de problèmes autrefois compliqués, qu'il a une grande stabilité, et est devenu par conséquent un composant incontournable des offres d'hébergements.

Il est multi-plateforme : autant sur Linux qu'avec Windows (et Macintosh), il permet aisément de reconduire le même code sur un environnement à peu près semblable (quoiqu'il faille prendre en compte les règles d'arborescences de répertoires, qui peuvent changer).

Libre, gratuit, simple d'utilisation et d'installation, ce langage nécessite néanmoins une connaissance aiguë des problèmes de sécurité.

---

[Retour au menu](#menu-de-navigation)

---

### Historique de PHP

#### Les Débuts de PHP (1994-1995) :
- PHP, qui signifie à l'origine "Personal Home Page", a été créé par Rasmus Lerdorf en 1994. À l'époque, il s'agissait d'un simple ensemble de scripts écrits en [langage C](## "C est un langage de programmation impératif, généraliste et de bas niveau. Inventé au début des années 1970 pour réécrire Unix, C est devenu un des langages les plus utilisés, encore de nos jours. De nombreux langages plus modernes comme C++, C#, Java et PHP ou JavaScript ont repris une syntaxe similaire au C et reprennent en partie sa logique.") pour gérer son site web personnel.
- En 1995, PHP a été officiellement annoncé en tant que langage de script côté serveur, permettant d'ajouter des fonctionnalités dynamiques aux pages web.

#### PHP/FI (1996-1997) :
- La version 2 de PHP a introduit le support des formulaires web, des bases de données et des sessions, faisant du langage un outil plus puissant pour le développement web.
- PHP/FI (Forms Interpreter) a marqué cette époque, mais il était encore relativement simple par rapport aux versions ultérieures.

#### PHP 3 (1998) :
- PHP 3, sorti en 1998, a apporté un moteur de script remanié, supportant les modules, et a permis à PHP de fonctionner comme un module Apache.
- L'introduction de la programmation orientée objet (POO) dans PHP 3 a été une étape clé vers la modernisation du langage.

#### PHP 4 (2000) :
- PHP 4, publié en 2000, a apporté des améliorations significatives, notamment la gestion des objets améliorée, des performances accrues et une architecture de modules plus souple.
- À ce stade, PHP était déjà largement utilisé dans le monde du développement web.

#### PHP 5 (2004) :
- PHP 5, lancé en 2004, a introduit des fonctionnalités majeures telles que le support natif de la POO, la gestion des exceptions, les espaces de noms, et l'amélioration des performances grâce à la refonte du moteur Zend Engine.
- Ces changements ont permis aux développeurs de créer des applications web plus complexes et structurées.

#### PHP 7 (2015) :
- PHP 7, sorti en 2015, a apporté d'importantes améliorations de performance avec le Zend Engine 3, ainsi que de nouvelles fonctionnalités telles que le support des types de retour scalaires et la gestion améliorée des erreurs.
- PHP 7 a marqué un grand pas en avant en termes de vitesse d'exécution, faisant du langage un choix encore plus attrayant pour les développeurs.

#### PHP 8 (2020) :
- PHP 8, lancé en 2020, a introduit des fonctionnalités telles que les attributs, les arguments nommés, le JIT (Just-In-Time Compiler) pour des performances encore meilleures, et d'autres améliorations.
- Cette version a renforcé la modernité de PHP et continué à le positionner comme l'un des langages de script web les plus utilisés.

#### PHP 8.1 (2021) :
- PHP 8.1, lancé en 2021, a introduit des fonctionnalités telles que les attributs `readonly`, les performances améliorées, et de nouvelles fonctionnalités pour les développeurs.

#### PHP 8.2 (2022) :
- PHP 8.2, lancé fin 2022, a mis l'accent sur la modernisation et la simplification.

#### PHP 8.3 (2023) :
- PHP 8.3, lancé fin 2023, a amélioré les performances de JIT, introduit d'un nouvel attribut `#[Override]` pour les méthodes héritées, et d'autres améliorations concernant la gestion des tableaux.

#### Aujourd'hui :
- PHP 8.4 vient de sortir, et PHP 9 est en cours de développement.
- PHP est toujours largement utilisé pour le développement web, propulsant de nombreux sites et applications.
- La communauté PHP continue de contribuer à l'évolution du langage, avec des mises à jour régulières et l'ajout de nouvelles fonctionnalités.
- PHP coexiste avec d'autres technologies web et reste un choix populaire pour sa simplicité, sa polyvalence et son support communautaire.

---

[Retour au menu](#menu-de-navigation)

---

### Installation de Apache, PHP et MySQL

Nous allons installer un package qui contient les trois composants nécessaires à la création d'un site web dynamique : Apache, PHP et MySQL (et/ou MariaDB). 

Ce package s'appelle **WAMP** (Windows, Apache, MySQL, PHP). Il existe aussi **LAMP** (Linux, Apache, MySQL, PHP) et **MAMP** (Macintosh, Apache, MySQL, PHP).

Il existe d'autres alternatives comme **XAMPP** ou **EasyPHP**.

On peut également installer les composants séparément.

---

[Retour au menu](#menu-de-navigation)

---

#### Installation de WAMP pour Windows

- Télécharger WAMP sur le site officiel : 

[https://www.wampserver.com/](https://www.wampserver.com/)

- ou sur le site avec les add-ons : 

[https://wampserver.aviatechno.net/](https://wampserver.aviatechno.net/)

Voici un petit tutoriel pour installer WAMP chez vous :

https://espritweb.fr/installer-wamp-sur-windows-10-etape-par-etape-et-sans-erreur/

---

[Retour au menu](#menu-de-navigation)

---

#### Installation de XAMPP pour MacOs

Nous préférerons l'installation de XAMPP pour MacOs, car avec Mamp, il y a des problèmes de droits d'accès, sauf en version payante.

- Télécharger XAMPP sur le site officiel :
https://www.apachefriends.org/fr/index.html pour OS X.

Voici un petit tutoriel pour installer XAMPP chez vous :

https://www.ionos.fr/digitalguide/serveur/outils/tutoriel-xampp-creer-un-serveur-de-test-local/

---

[Retour au menu](#menu-de-navigation)

---

## Les fichiers du formateur

Vous trouverez les fichiers du formateur dans le dossier `formateur/` de ce git.

---

[Retour au menu](#menu-de-navigation)

---

## Principe des exercices

**Commencez par faire un `fork` de ce dépot, puis clonez-le sur votre ordinateur.**

**Rajoutez ensuite le `remote` nommé `upstream` vers le dossier commun.**

**N'oubliez pas de faire un `git pull upstream main` dès le début du cours !**

Pour chaque exercice, vous devrez créer vos fichiers avec le nom demandé dans le dossier `stagiaires/{votre_prénom}/`.

N'oubliez pas de créer une `branche` pour ne pas travailler sur la `main` !

Vous pouvez également utiliser ce dossier pour stocker vos fichiers de travail de `PHP-base`. 

**Ne modifiez pas les fichiers de travail de `PHP-base` qui se trouvent en dehors de votre dossier !**

N'oubliez pas de faire un `commit` et un `push` à chaque fin d'exercice.

Et si vous souhaitez que je le vois, n'oubliez pas de faire un `pull request` ! Il ne faudra pas le faire à chaque fois.

Les exercices seront reconnaissables par le logo :

| 00 | ![Exercice 00](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 00 | Énoncé de l'exercice |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------:|


---

[Retour au menu](#menu-de-navigation)

---

## Les bases de PHP

### Les fichiers PHP

Les fichiers PHP sont des fichiers texte qui contiennent du code PHP. Ils sont généralement enregistrés avec l'extension `.php`.

Le code PHP est exécuté sur le serveur, et le résultat est renvoyé au navigateur sous forme de code HTML.

---

[Retour au menu](#menu-de-navigation)

---

### Les balises PHP

Le code PHP est écrit entre les balises `<?php ?>`.

Ici, nous allons afficher le texte "Hello World" dans le navigateur :

```php
<?php
echo "Hello World";
?>
```

| 01 | ![Exercice 01](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 01 | Créez un fichier `01-hello-world.php` qui affiche "Hello World" dans le navigateur. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------:|

---

Nous pouvons également utiliser les balises `<?= ?>`, celles-ci sont équivalentes à `<?php echo ?>` :

```php
<?="Hello World"?>
```

| 02 | ![Exercice 02](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 02 | Créez un fichier `02-hello-world-short.php` qui affiche "Hello World" dans le navigateur. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------:|

---

Vous remarquerez que nous n'avons pas besoin du `;` lorsque nous sommes devant la fermeture de PHP `?>`.

Le `;` est nécessaire pour dire à PHP que la ligne d'instruction est terminée. C'est la première cause d'erreur d'inattention.

Il en va de même dès que nous sommes dans un fichier PHP, et nous n'avons pas besoin de fermer la balise PHP, sauf si nous avons du code HTML après. Ceci est une bonne pratique.

```php
<?php
echo "Hello World";
echo "<br>Hello friends"
?>
```

| 03 | ![Exercice 03](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 03 | Créez un fichier `03-hello-friends.php` qui affiche "Hello World<br>Hello friends" dans le navigateur. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

### Les commentaires

Les commentaires sont des lignes de texte qui ne sont pas exécutées par le serveur.

Ils sont utilisés pour rendre le code plus lisible et pour empêcher l'exécution de certaines parties du code.

Les commentaires commencent par `//` ou `#` pour une ligne de commentaire, et `/*` et `*/` pour un bloc de commentaire.

```php
<?php
// Ceci est un commentaire sur une ligne

# Ceci est un commentaire sur une ligne

/*
Ceci est un commentaire
sur plusieurs lignes
*/

// Les bonnes pratiques :
# Ne fermez pas la balise PHP si vous êtes en fin de fichier
```

| 04 | ![Exercice 04](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 04 | Créez un fichier `04-commentaires.php` qui n'affiche rien dans le navigateur ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

### Placement des balises PHP

Les balises PHP peuvent être placées n'importe où dans le document HTML.

Voici un exemple de code PHP dans lequel nous plaçons les balises PHP dans différentes parties du document HTML :

```php
<?php // Début du code PHP
  // Prenons la date et heure du jour dans une variable
  // Les arguments se trouvent :
  // https://www.php.net/manual/fr/datetime.format.php
  $date = date("Y-m-d H:i:s"); // format datetime MySQL
// Fin du code PHP
?>
<!DOCTYPE html>
<html>
<head>
  <title>05 date <?= date("H:i") // heure et minute?></title>
</head>
<body>
  <h1>05 date <?= $date?></h1>
  <p>Il est <?= date("H:i:s") // heure, minute et seconde?></p>
</body>
</html>
<?php
// on peut même mettre du code PHP après la fermeture de la balise HTML
?>
```

Nous avons utilisé la fonction native `date()` pour afficher la date et l'heure et nous avons stocké le résultat dans la variable `$date`.

Nous verrons plus tard comment fonctionnent les fonctions et variables.

| 05 | ![Exercice 05](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 05 | Créez un fichier `05-php-placement.php` qui affiche le temps du serveur dans une page html ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

## Les variables

Une variable est un **conteneur pour stocker des informations**. 

Elles sont la première brique d'un langage de programmation.

Les variables sont créées en PHP avec le signe `$` suivi du nom de la variable. 

Le nom de la variable doit **commencer** par une lettre ou un tiret bas `_` et ne peut **contenir que des lettres, des chiffres et des tirets bas `_`**. 

Les noms de variables sont sensibles à la casse (les majuscules et les minuscules sont différentes).

Les variables peuvent être de **n'importe quel type** de données, et peuvent changer de type de données après leur création (en cas de typage non strict).

Voici une liste des variables prédéfinies en PHP : [Variables prédéfinies](https://www.php.net/manual/fr/reserved.variables.php)

---

[Retour au menu](#menu-de-navigation)

---

### Déclaration de variables non strictement typées

En PHP, une variable commence par le signe `$`, suivi du nom de la variable :

```php
<?php
/*
  Déclaration de variables au nom valide non strictement typées.
  Le type de la variable est déterminé par la valeur qu'elle contient
*/

// variable valide de type string (en snake_case)
$nom_de_variable_1 = "valeur de la variable";
// variable valide de type integer (en camelCase)
$nomDeVariable2 = 123;
// variable valide de type float (en Upper CamelCase - PascalCase)
$NomDeVariable3 = 123.456;
// variable valide de type boolean
$nom_de_variable_4 = true; // ou false
// variable valide de type array (indexé)
$nom_de_variable_5 = [1, 2, 3];
// variable valide de type array (associatif)
$nomDeVariable6 = ["clef1" => "valeur1", "clef2" => "valeur2"];
// variable valide de type null
$nomDeVariable7 = null;

// affichage des variables via le débugueur var_dump()
var_dump($nom_de_variable_1, $nomDeVariable2, $NomDeVariable3, 
$nom_de_variable_4, $nom_de_variable_5, $nomDeVariable6, $nomDeVariable7);
?>
```

| 06 | ![Exercice 06](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 06 | Créez un fichier `06-php-variables-valides.php` qui affiche uniquement les variables valides |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------:|

```php
<?php
/*
  Les variables suivantes sont donc non valides !!!
*/

$Nom de Variable = 5;	// comporte des espaces
$123Nom_De_Variable	= 3;// commence par un chiffre
$toto@mailcity.com = [];	//caractère spécial @
$Nom-de-variable = "coucou";	// signe - interdit (en kebab-case)
nom_de_variable	= "Yes";   // ne commence pas par $

?>
```
| 07 | ![Exercice 07](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 07 | Créez un fichier `07-php-variables-non-valides.php` qui affiche également les variables non valides ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------:|

Il existe d'autres types de variables, mais nous les verrons plus tard.

---

[Retour au menu](#menu-de-navigation)

---

### Les tableaux

Un tableau est une variable qui peut contenir plusieurs valeurs.

Les tableaux en PHP sont des structures très flexibles, capables de fonctionner à la fois comme des tableaux indexés et associatifs. Cela signifie qu'un tableau peut contenir des données indexées par des entiers et des chaînes dans une seule et même structure.

Ils peuvent être multidimensionnels, c'est-à-dire qu'ils peuvent contenir des tableaux dans des tableaux.

Documentation : [Tableaux en PHP](https://www.php.net/manual/fr/language.types.array.php)

Pour créer un tableau en PHP, on peut utiliser la fonction `array()`, ou les crochets `[]` :

```php
// Tableau indexé
$voitures = array("Volvo", "BMW", "Toyota");
// Tableau indexé en raccourci
$langages = ["PHP", "MySQL", "JavaScript"];
// affichage des tableaux via le débugueur var_dump()
var_dump($voitures, $langages);
```

| 08 | ![Exercice 08](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 08 | Créez un fichier `08-premier-tableau.php` Créez un tableau indexé (avec uniquement la valeur au format `string`) avec le prénom des élèves de votre classe. Ensuite faites un `var_dump()` pour afficher son contenu |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

#### Les tableaux indexés

Un tableau indexé est un tableau où chaque élément est associé à un index numérique autogénéré.

L'index commence à 0.

```php
<?php
// Tableau indexé
$stagiairesWeb2025= [
    "Agim", 
    "Omer", 
    "Massine", 
    "Loukas", 
    "Soulaiman", 
    "Nordine", 
    "Vahagn", 
    "Daniel", 
    "Samuel", 
    "Sola",
    "Reda",
    "Jean-Michaël",
    "Saïd",
    "Géraldine",
    "Jeremy",
    "Mykyta",
    ];

// Pour compter les éléments d'un tableau, nous pouvons utiliser la fonction native count()
echo "<p>Il y a ".count($stagiairesWeb2025)." élèves dans la classe.</p>";

// Pour afficher un élément du tableau, nous utilisons l'index de l'élément,
// ici par exemple les premiers élèves :

echo "<p>Les 3 premiers élèves sont : ".$stagiairesWeb2025[0].", ".$stagiairesWeb2025[1].",
 ".$stagiairesWeb2025[2]."</p>";
```

| 9 | ![Exercice 9](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 9 | Créez un fichier nommé `09-exe-array-index.php` et affichez avec des `echo` les données de la variable `$monTab = ['un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix'];` séparées par un `<hr>` à chaque ligne |
|---|:---------------------------------------------------------------------------------------------------------:|:----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

#### Les tableaux associatifs

Les tableaux associatifs sont des tableaux dont les clés sont des chaînes de caractères.

```php
<?php
// tableau associatif
$tab3 = ["clef1" => "valeur1", "clef2" => "valeur2"];

// affichage du tableau via le débugueur var_dump()
var_dump($tab3);
// affichera :
// array(2) { ["clef1"]=> string(7) "valeur1" ["clef2"]=> string(7) "valeur2" }
?>
```

| 10 | ![Exercice 10](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 10 | Créez un fichier nommé `10-exe-array-assoc.php` et affichez avec des `echo` les données de la variable `$monTabAssoc =  ["prenom" => "Michaël", "nom" => "Pitz", "caracteristique" => "égocentrique","dateDeNaissance" => "1951-03-02"];` séparées par un `<hr>` à chaque ligne |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 


---

[Retour au menu](#menu-de-navigation)

---

#### Les tableaux multidimensionnels

Les tableaux multidimensionnels sont des tableaux qui contiennent des tableaux. Ils sont souvent utilisés pour représenter des données complexes.

Pour accéder à un élément d'un tableau multidimensionnel, nous devons spécifier l'index de chaque tableau entre crochets.


```php
<?php
// tableau multidimensionnel représentant des données de quelques stagiaires web2025

$webdev_2025 = [
    "WEBDEV01" => [
        "Nom" => "Dahmani",
        "Prenom" => "Reda",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/reda/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/reda/prefo/",
            "github" => "https://github.com/redasnkrs",
        ],
    ],
    "WEBDEV02" => [
        "Nom" => "Darry",
        "Prenom" => "Samuel",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/samuel/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/samuel/prefo/",
            "github" => "https://github.com/Eultype",
        ],
    ],
    "WEBDEV03" => [
        "Nom" => "Farah",
        "Prenom" => "Said",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/said/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/said/prefo/",
            "github" => "https://github.com/saidweb12",
        ],
    ],
    "WEBDEV04" => [
        "Nom" => "Horban",
        "Prenom" => "Mykyta",
        "Sites" => [
            "SitePerso" => "https://2025.webdev-cf2m.be/mykyta/",
            "SitePreformation" => "https://2025.webdev-cf2m.be/mykyta/prefo/",
            "github" => "https://github.com/NikGorban",
        ],
    ],
    // ... etc
];

var_dump($webdev_2025);

```

| 11 | ![Exercice 11](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 11 | Créez un fichier nommé `11-exe-array-multi.php` et affichez avec un `echo` les données de la variable `$webdev_2025` ci dessus pour nous afficher le Github de `Mykyta` |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 

---

[Retour au menu](#menu-de-navigation)

---

## Les variables superglobales

Les variables superglobales sont des variables prédéfinies qui sont toujours accessibles, quel que soit le contexte.

En PHP, les variables superglobales sont des tableaux associatifs.

https://www.php.net/manual/fr/language.variables.superglobals.php

### $_GET

`$_GET` est une variable superglobale qui est utilisée pour collecter des données de formulaires, après avoir envoyé un formulaire avec la méthode "get".

**On l'utilise surtout pour récupérer des données dans l'URL.**

La manière d'écrire des variables get dans l'URL est la suivante : `?section=contact&page=3&nom=dupont`

```php
<?php
// affiche le contenu de la variable superglobale $_GET
var_dump($_GET);
?>
```

| 12 | ![Exercice 12](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 12 | Créez un fichier `12-GET.php` en HTML, puis créez 4 liens qui pointent vers des variables GET différentes |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------------------:|


---

[Retour au menu](#menu-de-navigation)

---

## Les constantes

Une constante est un identifiant (un nom) qui représente une valeur simple. Comme son nom l'indique, cette valeur ne peut pas changer durant l'exécution du script (sauf pour les constantes magiques qui changent à chaque fois).

Une constante est définie avec la fonction `define()` ou avec l'opérateur `const`.

Une fois qu'une constante est définie, elle ne peut pas être modifiée ou supprimée !

Les constantes sont utiles pour stocker des informations qui ne changent pas tout au long de l'exécution du script, comme la version du script ou le nom d'un auteur.

**Les paramètres de configuration sont souvent stockés dans des constantes !**

Les constantes sont **globales**. Elles peuvent être utilisées dans toute la page. Attention en orienté objet, les constantes de classe sont définies dans la classe et sont donc accessibles autrement.

Les bonnes pratiques principales de nommage des constantes sont les suivantes :

- Les constantes sont écrites en majuscules.
- Les constantes sont écrites en snake_case.


Avec define() :

```php  
<?php
// Définition de la constante avec define()
define("NOM_DE_LA_CONSTANTE", "valeur de la constante");

// Affichage de la constante
echo NOM_DE_LA_CONSTANTE;
?>
```

Avec const :

```php
<?php
// Définition de la constante avec const
const NOM_DE_LA_CONSTANTE = "valeur de la constante";

// Affichage de la constante
echo NOM_DE_LA_CONSTANTE;
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### Les conditions

Les conditions sont la deuxième brique fondamentale d'un langage de programmation, elles permettent d'évaluer l'état de propositions, de variables, etc.

#### if

`if(condition) { action si condition == true }`

Le **if** va permettre de vérifier si une condition est vraie (true) :

```php
$a = true;
if($a){
  echo "ok";
}
```

---

[Retour au menu](#menu-de-navigation)

---


#### else

`else { action si condition d'un if préalable est false}`

```php
$a = false;
if($a){
  echo "ok";
}else{
  echo "ko";
}
```

---

[Retour au menu](#menu-de-navigation)

---

#### elseif() ou else if()

`elseif(){sinon si true} ou else if(sinon si true){}`

```php
$a = mt_rand(0,2);
if($a==0){
  echo "Pas de chance, tu perds un point";
// sinon si
}elseif($a==1){
  echo "Super, un point gagné !";
}else{
  echo "Magnifique, tu gagnes encore 2 points";
}
```

---

[Retour au menu](#menu-de-navigation)

---

#### Exercices et exemples if - elseif - else

| 13 | ![Exercice 13](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 13 | Créez un fichier `13-eau.php` qui affiche suivant une température allant de -100 à 200 °, l'état de l'eau (solide en dessous de 0 compris) (liquide entre 1 et 99°) (gazeux à partir de 100°) : L'eau est solide à -7° - L'eau est liquide à 33 ° - L'eau est gazeuse à 105° |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|



| 14 | ![Exercice 14](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 14 | Créez un fichier `14-pair.php` Une variable donne un numérique au hasard entre 1 et 20, si il est pair affichez 'Le nombre est pair.', sinon 'le nombre est impair.'  ... |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|
                                                                                                                    



| 15 | ![Exercice 15](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 15 | Créez un fichier `15-conditions.php` qui affiche suivant un chiffre au hasard entre 0 et 10, vous affiche : Si il est de 0 à 3  : "{$chiffre} : Nul, étudie la prochaine fois", Si de 4 à 5 : "{$chiffre} : Peut mieux faire" , Si de 6 à 7 : "{$chiffre} : Bien", Sinon "{$chiffre} : Très bien" |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---

#### Autre manière de faire des conditions

```php
// $point vaut un entier au hasard entre 0 et 10
$point = mt_rand(0, 10);

// mode fermeture de balises if
if($point <= 3):
    echo '$point vaut '.
        "$point : Nul, étudie la prochaine fois.";
// mode fermeture de balises elseif
elseif($point<6):
    echo '$point vaut '.
        "$point : peut mieux faire.";
// mode fermeture de balises elseif
elseif ($point<8):
    echo '$point vaut '.
        "$point : Bien.";
// mode fermeture de balises else
else:
    echo '$point vaut '.
        "$point : Très bien.";
// mode fermeture de balises endif
endif;
```

Un exemple de l'utilisation des balises plutôt que les accolades :

```php
<?php
for($i=0;$i<10;$i++){
  if($i%2==0){
    echo "Pair :$i";
  }else{
    echo "Impair :$i";
  }
}
echo "<br>";
for($i=0;$i<10;$i++):
  if($i%2==0):
    echo "Pair :$i";
  else:
    echo "Impair :$i";
  endif;
endfor;
?>
```

---

[Retour au menu](#menu-de-navigation)

---

#### switch

Le switch est une autre manière de faire des conditions, il est plus rapide que les if/elseif/else. Mais il ne permet que de vérifier une seule variable, de manière non stricte et seulement son égalité.

*! le switch de JavaScript est stricte contrairement à celui de PHP !*

Pour utiliser un équivalent du switch fortement typé, on peut utiliser match() à partir de PHP 8 :

https://www.php.net/manual/fr/control-structures.match.php

Ou simplement nos bons vieux if/elseif/else.


```php
$variable = 3;

// vérifie la variable $variable
switch($variable){
  // si $variable == 1
  case 1:
    echo "1";
    // équivalent à la fermeture d'accolade ou endif
    break;
  case 2:
    echo "2";
    break;
  case 3:
    echo "3";
    break;
    // SINON = else
  default:
    echo "default";
    // inutile car dernière action : break;
}
```

Exemple avec des chaînes de caractères :

```php
<?php
// donne un int (integer) de 1 à 4
$hasard1 = mt_rand(1,4);

// si $hasard vaut string "1" non strictement (on ne vérifie pas le type)
if($hasard1=="1"){
    echo "$hasard1 - Première place, bravo";
}elseif($hasard1=="2"){
    echo "$hasard1 - Deuxième place, bravo";
}elseif($hasard1=="3"){
    echo "$hasard1 - Troisième place, courage";
}else{
    echo "$hasard1 - Quatrième place, courage";
}
?>
<hr>
<?php

// idem en switch

switch($hasard1){
    case "1": // si
        echo "$hasard1 - Première place, bravo";
        break;
    case "2": // sinon si
        echo "$hasard1 - Deuxième place, bravo";
        break;
    case "3": // sinon si
        echo "$hasard1 - Troisième place, courage";
        break;
    default: // sinon
        echo "$hasard1 - Quatrième place, courage";
}

?>
    <hr>
<?php

// switch avec valeur par défaults

switch($hasard1){
    case "1":
    case "2":
    case "3":
        echo "$hasard1 - Chiffre entre 1 et 3";
        break;
    default: // sinon
        echo "$hasard1 - Chiffre 4";
}

```

| 15b | ![Exercice 15b](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 15b | Créez un fichier `15b-switch.php` qui affiche EXACTEMENT l'exercice 15 en utilisant un switch |
|-----|:-----------------------------------------------------------------------------------------------------------:|:------------:|:---------------------------------------------------------------------------------------------:|

---

[Retour au menu](#menu-de-navigation)

---


#### Les opérateurs de comparaison

Les opérateurs de comparaison permettent de comparer deux valeurs.

| Opérateur | Description                                                |
|-----------|------------------------------------------------------------|
| ==        | Égal à                                                     |
| ===       | Égal à et du même type ou strictement égal                 |
| != ou <>  | Différent de                                               |
| !==       | Différent de ou de type différent ou strictement différent |
| <         | Inférieur à                                                |
| >         | Supérieur à                                                |
| <=        | Inférieur ou égal à                                        |
| >=        | Supérieur ou égal à                                        |

---

[Retour au menu](#menu-de-navigation)

---

##### Les opérateurs et fonctions de comparaison

![Opérateurs de comparaison](datas/2025_02_03-11_53_01.png)



---

[Retour au menu](#menu-de-navigation)

---


#### Les opérateurs logiques

Les opérateurs logiques permettent de combiner plusieurs conditions.

| Opérateur | Description | Détails                                                                                                   |
|-----------|-------------|-----------------------------------------------------------------------------------------------------------|
| and  &&   | ET          | toutes les conditions doivent être vraies                                                                 |
| or  \|\|  | OU          | Une des conditions doit être vraie                                                                        |
| xor   ^   | OU exclusif | Une des conditions doit être vraie, mais pas les deux, peu utilisé sans () car peut provoquer des erreurs |
| !         | NON  Not    | Inverse la condition (true devient false - false devient true)                                            |


Lien vers les opérateurs logiques :

https://www.php.net/manual/fr/language.operators.logical.php

---

[Retour au menu](#menu-de-navigation)

---



#### Les opérateurs d'affectation

Les opérateurs d'affectation permettent d'affecter une valeur à une variable.

| Opérateur | Description                   | Détails                                                                |
|-----------|-------------------------------|------------------------------------------------------------------------|
| =         | Affectation                   | Affecte une valeur à une variable                                      |
| +=        | Affectation et addition       | Ajoute la valeur à la variable et affecte le résultat à la variable    |
| -=        | Affectation et soustraction   | Soustrait la valeur à la variable et affecte le résultat à la variable |
| *=        | Affectation et multiplication | Multiplie la valeur à la variable et affecte le résultat à la variable |
| /=        | Affectation et division       | Divise la valeur à la variable et affecte le résultat à la variable    |
| %=        | Affectation et modulo         | Divise la valeur à la variable et affecte le reste à la variable       |
| .=        | Affectation et concaténation  | Concatène la valeur à la variable et affecte le résultat à la variable |

##### +=

Équivaut à "ajouter à la valeur de"

```php
$a=1;
// manière longue
$a= $a+2;
// manière courte
$a+=2;
```

##### -=

équivaut à "retirer à la valeur de"

```php
$a=1;
// manière longue
$a= $a-2;
// manière courte
$a-=2;
```

##### .=

Signe de concaténation

```php
.= concaténation
$a ="coucou";
$a .=" les amis";
```


Lien vers les opérateurs d'affectation :

https://www.php.net/manual/fr/language.operators.assignment.php

---

[Retour au menu](#menu-de-navigation)

---

#### Les Opérateurs d'incrémentation et décrémentation

Les opérateurs d'incrémentation et décrémentation permettent d'augmenter ou diminuer la valeur d'une variable. Ce sont donc des opérateurs d'affectation également.

| Opérateur | Description    | Détails                                                           | Exemple        | Résultat |  
|-----------|----------------|-------------------------------------------------------------------|----------------|----------|
| ++        | Incrémentation | Incrémente la valeur de 1                                         | $a = 1; $a++;  | 2        |        
| --        | Décrémentation | Décrémente la valeur de 1                                         | $a = 1; $a--;  | 0        |
| +=        | Incrémentation | Incrémente la valeur de la variable                               | $a = 1; $a+=2; | 3        |
| -=        | Décrémentation | Décrémente la valeur de la variable                               | $a = 1; $a-=2; | -1       |
| *=        | Incrémentation | Multiplie la valeur de la variable                                | $a = 1; $a*=2; | 2        |
| /=        | Décrémentation | Divise la valeur de la variable                                   | $a = 1; $a/=2; | 0.5      |
| %=        | Incrémentation | Divise la valeur de la variable et affecte le reste à la variable | $a = 1; $a%=2; | 1        |
| .=        | Concaténation  | Concatène la valeur de la variable                                | $a = 1; $a.=2; | 12       |

Attention à l'ordre des opérateurs, car il peut y avoir des erreurs d'interprétation :

```php
<?php
$a = 1;
echo $a++; // affichera 1
echo $a; // affichera 2
echo ++$a; // affichera 3
echo $a; // affichera 3
echo $a--; // affichera 3
echo $a; // affichera 2
echo --$a; // affichera 1
echo $a; // affichera 1
?>
```

Lien vers les opérateurs d'incrémentation et décrémentation :

https://www.php.net/manual/fr/language.operators.increment.php

---

[Retour au menu](#menu-de-navigation)

---

## Les boucles

Les boucles permettent de répéter des instructions un certain nombre de fois. Il existe plusieurs types de boucles en PHP.

Un grand principe des boucles est de répéter des instructions tant qu'une condition est vraie. Elles ne doivent pas être infinies, sinon le serveur finira par planter.

Les boucles sont très utiles pour parcourir des tableaux, des objets, des fichiers, des dossiers, des bases de données, etc...

Les fonctions natives (ou structure de langage) en PHP pour faire des boucles sont :

- `while`
- `do while`
- `for`
- `foreach`

Les fonctions récursives sont également des boucles, mais nous les verrons plus tard.

---

[Retour au menu](#menu-de-navigation)

---


### for

La boucle `for` est la plus structurée, elle permet de répéter des instructions un certain nombre de fois. Elle est composée de 3 parties :

- l'initialisation de la variable de boucle
- la condition de sortie de boucle liée à la variable de boucle
- l'incrémentation (ou décrémentation) de la variable de boucle

On exécute les instructions entre les accolades tant que la condition de sortie de boucle est vraie.

```php
for(initialisation; condition de sortie de boucle; incrémentation){
  // instructions
}
```



```php
<?php

for(
    // on initialise la variable $i à 0 (premier tour de boucle)
    $i=0;
    // on définit la condition de sortie de boucle (vérifiée à chaque tour de boucle)
    $i<=10;
    // on incrémente $i de 1 à chaque tour de boucle (dernière action du tour de boucle)
    $i++
){
    echo "$i ";
}
// Affiche : 0 1 2 3 4 5 6 7 8 9 10
?>
```

| 16 | ![Exercice 16](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 16 | Créez une copie du fichier `16-boucle-for.php` dans votre espace stagiaire, puis créez les boucles for telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:------------------------------------------------------------------------------------------------------------------------------------------------:|

Le résultat de l'exercice 16 devrait ressembler à ceci :

![exercice 16](https://raw.githubusercontent.com/WebDevCF2m2023/PHP-base/main/datas/screenshot-php-base_8080-2024.01.09-15_54_20.png)

--- 

[Retour au menu](#menu-de-navigation)

---

### foreach

La boucle `foreach` est la plus utilisée, elle permet de parcourir un tableau ou un objet.

Elle est composée de 2 parties minimum :

- la variable qui contient le tableau ou l'objet à parcourir
- la variable qui contient la valeur de l'élément du tableau ou de l'objet à chaque tour de boucle

```php
foreach($tableau as $element){
  // instructions
}
```

```php
<?php

$fruits = ['pomme', 'poire', 'banane', 'fraise', 'cerise'];

foreach($fruits as $fruit){
    echo "$fruit ";
}
// Affiche : pomme poire banane fraise cerise
?>
```

On peut également récupérer la clé de chaque élément du tableau ou de l'objet à chaque tour de boucle.

```php
foreach($tableau as $clef => $element){
  // instructions
}
```

```php
<?php

$fruits = ['pomme', 'poire', 'banane', 'fraise', 'cerise'];

foreach($fruits as $clef => $fruit){
    echo "$clef : $fruit ";
}
// Affiche : 0 : pomme 1 : poire 2 : banane 3 : fraise 4 : cerise
?>
```

| 17 | ![Exercice 17](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 17 | Créez une copie du fichier `17-boucle-foreach.php` et `array.php` dans votre espace stagiaire, puis créez les boucles foreach telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------------------------:|

Le résultat de l'exercice 17 devrait ressembler à ceci :

![exercice 17](https://raw.githubusercontent.com/WebDevCF2m2023/PHP-base/main/datas/screenshot-php-base-2023-2024-2024.01.11-20_24_37.png)

---

[Retour au menu](#menu-de-navigation)

--- 

### while

La boucle `while` permet de répéter des instructions tant qu'une condition est vraie. C'est la boucle la plus simple et la plus souple.

Attention, si la condition est toujours `true`, la boucle sera infinie et le serveur finira par planter.

```php
while(condition){
  // instructions
}
```

```php
<?php

$i = 0;

while($i<=10){
    echo "$i ";
    $i++;
}
// Affiche : 0 1 2 3 4 5 6 7 8 9 10
?>
```

| 18 | ![Exercice 18](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 18 | Créez une copie du fichier `18-boucle-while.php`  dans votre espace stagiaire, puis créez les boucles while telles qu'indiquées dans les commentaires |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:-----------------------------------------------------------------------------------------------------------------------------------------------------:|  


---

[Retour au menu](#menu-de-navigation)

--- 

### do while

La boucle `do while` est similaire à la boucle `while`, mais elle exécute les instructions au moins une fois, même si la condition est fausse.

Attention, si la condition est toujours `true`, la boucle sera infinie et le serveur finira par planter.

```php
do{
  // instructions
}while(condition);
```

```php

$i = 0;

do{
    echo "$i ";
    $i++;
}while($i<=10);
// Affiche : 0 1 2 3 4 5 6 7 8 9 10

// même si la condition est fausse, les instructions sont exécutées au moins une fois
$page = 1;
$pageNb = 1;
echo "Page";
do{
    echo " $page";
    $page++;
}while($page<=$pageNb);
// Affiche : Page 1

echo "<br>";

// si on a plus de pages :
$page = 1;
$pageNb = 4;
echo "Page";
do{
    echo " $page";
    $page++;
}while($page<=$pageNb);
// Affiche : Page 1 2 3 4

?>
```


---

[Retour au menu](#menu-de-navigation)

--- 

## Les inclusions

Les expressions de langage _include | include_once | require | require_once_ permettent d'inclure et d'exécuter le fichier spécifié en argument.

---

[Retour au menu](#menu-de-navigation)

---

### include

`include` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et continue l'exécution du script. On peut inclure plusieurs fois le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
include("menu.php");
?>
<p>ma page html, affichée même en cas d'erreur</p>
<?php   
// inclut et exécute le fichier "menu.php"
include("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### include_once

`include_once` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et continue l'exécution du script. On ne peut inclure **qu'une seule fois** le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
include_once("menu.php");
?>
<p>ma page html, affichée même en cas d'erreur</p>
<?php   
// n'affiche rien, le fichier "menu.php" a déjà été inclus
include_once("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### require

`require` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et **stoppe** l'exécution du script. On peut inclure plusieurs fois le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
require("menu.php");
?>
<p>ma page html, non affichée en cas d'erreur du require</p>
<?php   
// inclut et exécute le fichier "menu.php"
require("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---

### require_once

`require_once` inclut et exécute le fichier spécifié en argument. Si le fichier n'existe pas, il affiche une erreur et **stoppe** l'exécution du script. On ne peut inclure **qu'une seule fois** le même fichier.

```php
<?php
// inclut et exécute le fichier "menu.php"
require_once("menu.php");
?>
<p>ma page html, non affichée en cas d'erreur du require</p>
<?php   
// n'affiche rien, le fichier "menu.php" a déjà été inclus
require_once("menu.php");
?>
```

---

[Retour au menu](#menu-de-navigation)

---


| 19 | ![Exercice 19](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 19 | Copiez les dossiers `formateur\19-recap-pierre` et `formateur\19-recap-CF` dans votre dossier stagiaire. Imitez le site `formateur\19-recap-pierre` en créant une navigation par contrôleur frontal (il se trouve dans `formateur\19-recap-CF\public`) => 1 seule page, et une navigation par une variable de type `$_GET`, qui va chercher les pages dans `formateur\19-recap-CF\view` suivant le lien cliqué. |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 

---

[Retour au menu](#menu-de-navigation)

---

## Les fonctions

Une fonction est un bloc de code qui peut être réutilisé à plusieurs endroits dans un script.

Une fonction peut être appelée plusieurs fois, elle peut prendre des paramètres et renvoyer une valeur.

Il existe des fonctions prédéfinies en PHP, comme `echo()` ou `print()`, qu'on nomme aussi fonctions natives ou même structures de langage pour les plus courantes.

Il existe aussi des fonctions définies par l'utilisateur.

--- 

[Retour au menu](#menu-de-navigation)

---

### Les fonctions natives

Les fonctions natives sont des fonctions prédéfinies en PHP, elles sont utilisables sans avoir à les définir.

Depuis PHP 8 il est possible de changer l'ordre des arguments des fonctions natives, mais nous ne le ferons pas pour le moment.

La différence entre une `fonction` et une `procédure` est que la `fonction` renvoie une valeur avec un `return`, alors que la `procédure` ne renvoie rien.

Les fonctions natives, ainsi que leurs paramètres, seront à connaître à ce paragraphe :

[Liste des fonctions à connaître](https://listphp8.cf2m.be/)

--- 

[Retour au menu](#menu-de-navigation)

---



### Les fonctions personnalisées

Il existe aussi des fonctions définies par l'utilisateur, qu'on nomme fonctions personnalisées.

https://www.php.net/manual/fr/language.functions.php

Pour créer une fonction, on utilise le mot-clé `function` suivi du nom de la fonction, puis des parenthèses `()` et des accolades `{}`.

Les règles de nommage des fonctions sont les mêmes que pour les variables.

Dans ces bases, nous verrons les fonctions peu typées, mais il est possible de typer les arguments des fonctions comme les retours de fonctions.

Le `camelCase` et le `pascalCase` sont les plus utilisés.

```php
function nomDeLaFonction(){
  // instructions
}
```

```php
function bonjour(){
    // utilisation du return pour renvoyer une valeur
    return "Bonjour";
}
```

Pour appeler une fonction, on utilise son nom suivi des parenthèses `()`.

```php
echo bonjour();
```

--- 

[Retour au menu](#menu-de-navigation)

---

#### Les paramètres de fonction

Une fonction peut prendre des paramètres, qui sont des variables qui seront utilisées dans la fonction. Le terme argument est aussi utilisé. 

Les paramètres sont définis entre les parenthèses `()` de la fonction, séparés par des virgules `,`.

```php
function nomDeLaFonction($param1, $param2, $param3){
  // instructions
}
```

```php
// Ceci est en fait une procédure, car elle affiche une valeur sans utiliser de return
function bonjour($prenom){
    echo "Bonjour $prenom";
}
```

Pour appeler une fonction (ici une procédure) avec des paramètres, on utilise son nom suivi des parenthèses `()`, dans lesquelles on indique les valeurs des paramètres.

```php
bonjour("John");
```



| 20 | ![Exercice 20](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 20 | Crée un fichier nommé `20-ma-fonction.php` dans laquelle tu crée une fonction nommée `estPair` qui vérifie si un entier est pair, puis dans le même fichier testez la fonction ! |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 

| 21 | ![Exercice 21](https://github.com/mikhawa/PHP-base/blob/main/datas/folder-type-php-opened_24.png?raw=true) | Exercice 21 | Copie le fichier nommé `21-ma-calculette.php` dans ton dossier depuis formateur, dans laquelle tu crée une fonction nommée `calculSimple()` qui vérifie peux calculer les `+`, `-`, `*`, `/`, |
|----|:----------------------------------------------------------------------------------------------------------:|:-----------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:| 

--- 

[Retour au menu](#menu-de-navigation)

---

#### Les paramètres par défaut

Les arguments sont les valeurs des paramètres.

On peut définir des valeurs par défaut (des arguments donc) pour les paramètres, qui seront utilisées si aucun argument n'est passé lors de l'appel de la fonction.

Les paramètres par défaut sont définis avec un `=` après le nom du paramètre. Notez que les paramètres par défaut doivent être définis après les paramètres sans valeur par défaut.

```php
function nomDeLaFonction($param1, $param2 = "valeur par défaut", $param3 = "valeur par défaut"){
  // instructions
}
```

```php
function bonjour($prenom = "John"){
    echo "Bonjour $prenom";
}
```

--- 

[Retour au menu](#menu-de-navigation)

---

#### Les arguments nommés

Depuis PHP 8, il est possible de passer des arguments nommés aux fonctions natives ou personnalisées.

Les arguments nommés sont passés en préfixant la valeur avec le nom du paramètre suivit d'un deux-points. Utiliser des mots-clés réservés comme nom de paramètre est autorisé. Le nom du paramètre doit être un identifiant, le spécifiant de façon dynamique n'est pas permis.

```php
<?php
$str = "Hello-World";
// par ordre de la fonction par défaut
echo str_replace("-", " ", $str);
echo "<hr>";
// on peut changer cet ordre en utilisant le nom des arguments
echo str_replace(subject: $str, replace: " ", search: "-");
```

--- 

[Retour au menu](#menu-de-navigation)

---

#### Les valeurs de retour

Une fonction peut renvoyer une valeur avec le mot-clé `return`.

```php
function nomDeLaFonction($param1, $param2, $param3){
  // instructions
  return $valeur;
}
```

```php
function bonjour($prenom){
    return "Bonjour $prenom";
}
```

Pour appeler une fonction avec des paramètres, on utilise son nom suivi des parenthèses `()`, dans lesquelles on indique les valeurs des paramètres.

```php
echo bonjour("John");
```


--- 

[Retour au menu](#menu-de-navigation)

---

## Function à mettre en liste
_$variablesSuperglobales_, _GET_, _echo_, _var_dump()_, _count()_, _if_, _else_, _elseif_, _isset()_, _empty()_, _print_r()_, _switch()_, _inclusions (include, include_once, require, require_once)_, for(), foreach(), while(), do{ }while(), _mt_rand()_, _date()_, str_replace(), gettype(), settype(), cast, unset(), is_*


En cours de création : https://listphp8.cf2m.be/


---

[Retour au menu](#menu-de-navigation)

---
