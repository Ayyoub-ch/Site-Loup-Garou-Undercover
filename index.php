<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="/vs/style.css">
</head>
<body>


<main>
<?php
if (isset($_GET['action'])) {
    $page = basename($_GET['action']);
    $allowed = ['mode', 'all','menu', 'formulaire' , 'formulaire2' , 'formulaire3', 'formulaire4','formulaire5','game', 'loup_garou', 'accueil',  'stats', 'stats2', 'traitement',  'traitement2', 'traitement3', 'traitement_fiche', 'undercover', 'fiche_perso', 'ayyoub.php', 'carla.php', 'emma.php','erwan.php', 'florine.php', 'halima.php','matthieu.php', 'nicolas.php', 'salah.php','sara.php', 'yamin.php', 'yasser.php'];

    if (in_array($page, $allowed)) {
        include('page/' . $page . '.php');
    } else {
        echo '<p>Page introuvable.</p>';
    }
} else {
    include('page/mode.php');
}
?>
</main>


</body>
</html>
