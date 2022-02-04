# Portfolio
Réalisation d'un portfolio 

## Prépare le lancement

### Installation

1. Clone le projet
2. Run `composer install`
3. Run `yarn install`
4. Paramètre ton env local avec ton DATABASE_URL
5. Crée la database RHC `php bin/console doctrine:database:create`
6. Crée les tables avec `php bin/console doctrine:migrations:migrate`
7. Lance les fixtures pour avoir de la données sous la dent `php bin/console doctrine:fixtures:load`


### C'est parti!
1. Lance ton serveur local `symfony server:start`

## Site vitrine
- Une page d'accueil
- Une page Mes experiences
- Une page Mon portrait
    -> encore en chantier css
- Une page Création 
    -> lien vers d'autres projets
- Une page Contact


## Partie Admin
- Fixtures ok.
- En chantier/cassée/perdue pour l'instant
 -> Partie faite pour user puis effacer à cause d'un make:entity au lieu d'un make:user, pas de commit et je regrette.





## Construit grâce à

* [Symfony](https://github.com/symfony/symfony)

## Fait par:
* [Damien](https://github.com/dchantreau)
