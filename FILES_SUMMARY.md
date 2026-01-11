Résumé des fichiers du projet

Ce document liste les fichiers du projet et indique leur type principal : "page" (vue/interface) ou "traitement" (script serveur). Les autres fichiers sont marqués "autre".

Racine
- `index.php` : page (routeur frontal / inclut les pages via `?action=`)
- `index.css` : autre (styles)
- `style.css` : autre (styles principaux)
- `comment marche le programme.txt` : autre (documentation)
- `idée site.txt` : autre (notes/idéation)
- `Victoires.txt` : autre (notes)
- `vs.sql` : autre (export BDD `vs`)
- `vs2.sql` : autre (export BDD `vs2`)

Dossier `inc`
- `inc/header.inc` : autre (fragment header HTML)
- `inc/footer.inc` : autre (fragment footer HTML)

Dossier `page` (vues & traitements)
- `page/accueil.php` : page (écran d'accueil / chargement)
- `page/all.php` : page (contrôleur/affichage central)
- `page/fiche_perso.php` : page (liste des fiches personnages)
- `page/formulaire.php` : page (formulaire score simple)
- `page/formulaire2.php` : page (formulaire score multi-joueurs)
- `page/formulaire3.php` : page (formulaire ajout joueur)
- `page/formulaire4.php` : page (formulaire création fiche personnage)
- `page/formulaire5.php` : page (formulaire suppression personnages)
- `page/game.php` : page (affichage/animation scores Yamin vs Halima)
- `page/game2.php` : page (écran de sélection / variante)
- `page/loup_garou.php` : page (affiche scores Loup-Garou, BDD `vs`)
- `page/undercover.php` : page (affiche scores Undercover, BDD `vs`)
- `page/menu.php` : page (menu principal)
- `page/mode.php` : page (choix du jeu Loup-Garou / Undercover)
- `page/stats.php` : page (statistiques finales, BDD `vs`)
- `page/stats2.php` : page (tableau complet des stats, BDD `vs2`)

Scripts de traitement (page/traitement)
- `page/traitement.php` : traitement (POST du formulaire simple → insert/update `loup_garou` ou `undercover` dans BDD `vs`)
- `page/traitement2.php` : traitement (POST du formulaire multi-joueurs → insert/update `loup_garou2` ou `undercover2` dans BDD `vs2`)
- `page/traitement3.php` : traitement (ajout de joueur dans `persos` BDD `vs2`)
- `page/traitement5.php` : traitement (suppression de personnages en BDD + suppression fichiers fiche)
- `page/traitement_fiche.php` : traitement (upload + insert dans `fiches` BDD `vs2` + génération fichier `page/perso/<nom>.php`)

Dossier `page/perso` (fiches individuelles — pages statiques)
- `page/perso/ayyoub.php` : page (fiche Ayyoub)
- `page/perso/carla.php` : page (fiche Carla)
- `page/perso/emma.php` : page (fiche Emma)
- `page/perso/erwan.php` : page (fiche Erwan)
- `page/perso/florine.php` : page (fiche Florine)
- `page/perso/halima.php` : page (fiche Halima)
- `page/perso/matthieu.php` : page (fiche Matthieu)
- `page/perso/nicolas.php` : page (fiche Nicolas)
- `page/perso/salah.php` : page (fiche Salah)
- `page/perso/sara.php` : page (fiche Sara)
- `page/perso/yamin.php` : page (fiche Yamin)
- `page/perso/yasser.php` : page (fiche Yasser)

Dossier `img` et `fonts` (assets)
- `img/` : autre (images : icônes, backgrounds, perso/ etc.)
- `fonts/` : autre (polices : `edosz.ttf`, `mortal_kombat/*`)

Notes de fonctionnement
- Le routeur est `index.php` (paramètre `action`) ; les pages montrent les formulaires et vues.
- Les scripts `page/traitement*.php` effectuent les opérations en base (insert/update/delete) et redirigent vers les pages de confirmation ou statistiques.
- Deux exports de base existent : `vs` (simplifié, Yamin vs Halima) et `vs2` (multi-joueurs + fiches).

