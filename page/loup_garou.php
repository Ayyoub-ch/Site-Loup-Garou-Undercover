<title>Score au Loup Garou</title>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=vs;charset=utf8mb4', 'root', '');

$sql_loup = "
    SELECT p.prenom, 
           l.victoire AS victoire_loup, 
           l.defaite AS defaite_loup,
           l.defaite_eclair AS defaite_eclair_loup
    FROM persos p
    LEFT JOIN loup_garou l ON p.id = l.id_personne
";

$joueurs = $pdo->query($sql_loup)->fetchAll(PDO::FETCH_ASSOC);
?>



<main class="content">
    <h1>Scores au jeu du Loup Garou</h1>

    <div class="center-images">
        <div class="player">
            <div class="image-container">
                <img src="img/case_blue.png" alt="Case Blue">
                <img src="img/perso/yamin2.png" alt="Yamine" class="inner-player">
            </div>
            <div class="score-name">
                <h1><?= htmlspecialchars($joueurs[0]['victoire_loup'] ?? 0) ?></h1>
                <h2><?= htmlspecialchars($joueurs[0]['prenom'] ?? 'Yamine') ?></h2>
            </div>
        </div>

        <img src="img/dash.png" alt="Dash" class="watch-image">

        <div class="player">
            <div class="image-container">
                <img src="img/case_red.png" alt="Case Red">
                <img src="img/perso/halima2.png" alt="Halima" class="inner-player">
            </div>
            <div class="score-name">
                <h1><?= htmlspecialchars($joueurs[1]['victoire_loup'] ?? 0) ?></h1>
                <h2><?= htmlspecialchars($joueurs[1]['prenom'] ?? 'Halima') ?></h2>
            </div>
        </div>
    </div>

    <div class="watch-container">
        <img src="img/watch.png" alt="Watch" class="watch-image">
    </div>
</main>

<a href="javascript:history.back()" class="btn-retour">
    <img src="img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
    <img src="img/home.png" alt="Accueil" />
</a>



<style>
    @font-face {
    font-family: 'Edo SZ';
    src: url('fonts/edosz.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

body {
    margin: 0;
    padding: 0;
    height: 100vh;
    background-image: url('img/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Edo SZ', cursive;
}

.btn-retour {
    position: fixed;
    bottom: 20px;  /* 20px du bas */
    left: 20px;    /* 20px de la gauche */
    z-index: 1000; /* au-dessus des autres éléments */
    cursor: pointer;
    display: inline-block;
    width: 50px;   /* largeur du bouton, adapte si besoin */
    height: auto;
}

.btn-retour img {
    width: 200%;
    height: auto;
    display: block;
}


.btn-accueil {
  position: fixed;
  top: 20px;
  left: 20px;
  z-index: 1000;
  cursor: pointer;
  display: inline-block;
  width: 50px; /* Ajuste si nécessaire */
  height: auto;
}

.btn-accueil img {
  width: 100%;
  height: auto;
  display: block;
}


.content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 50px;
    text-align: center;
}

h1 {
    font-size: 4em;
    margin: 0;
    color: #fff;
    text-shadow: 2px 2px 4px #000;
}

h2 {
    font-size: 2em;
    margin-top: 10px;
    color: #fff;
    text-shadow: 1px 1px 3px #000;
}

.center-images {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap; /* pour le responsive */
    gap: 50px;
}

.player {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.player img,
.watch-image {
    width: 250px;
    max-width: 80vw;
    height: auto;
}

.watch-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.image-container {
  position: relative;
  width: 250px; /* adapte selon ton image */
  max-width: 80vw;
}

.image-container img {
  width: 100%;
  height: auto;
  display: block;
}

.image-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 3em;
  text-shadow: 2px 2px 4px #000;
  margin: 0;
  pointer-events: none;
}

.inner-player {
  position: absolute;
  top: 50%; /* ajuste ici pour baisser ou remonter */
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100px;
  height: auto;
  border-radius: 50%;
  z-index: 2;
}

.score-name {
  margin-top: 15px;
  text-align: center;
}

.score-name h1 {
  font-size: 4em;
  margin: 0;
  color: white;
  text-shadow: 2px 2px 4px #000;
}

.score-name h2 {
  font-size: 3em;
  margin-top: 5px;
  color: #fff;
  text-shadow: 1px 1px 3px #000;
}


@media screen and (max-width: 768px) {
    h1 {
        font-size: 2.5em;
    }

    h2 {
        font-size: 1.5em;
    }

    .player img,
    .watch-image {
        width: 180px;
    }

    .center-images {
        flex-direction: column;
        gap: 30px;
    }
}


</style>
