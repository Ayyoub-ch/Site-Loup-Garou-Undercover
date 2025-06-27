<title>Stats finales</title>
<?php
// Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=vs;charset=utf8mb4', 'root', '');

// Requête jointe pour tout récupérer en une fois
$sql = "
    SELECT p.prenom, 
           u.victoire AS victoire_undercover, 
           u.defaite AS defaite_undercover,
           l.victoire AS victoire_loup, 
           l.defaite AS defaite_loup,
           l.defaite_eclair AS defaite_eclair_loup
    FROM persos p
    LEFT JOIN undercover u ON p.id = u.id_personne
    LEFT JOIN loup_garou l ON p.id = l.id_personne
";

$joueurs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>



<div class="title">STATISTIQUES FINALES</div>

<div class="scoreboard">
  <div></div>
  <div class="player-name"><?= htmlspecialchars($joueurs[0]['prenom']) ?></div>
  <div class="player-name"><?= htmlspecialchars($joueurs[1]['prenom']) ?></div>

  <div class="label">Victoires Loup Garou</div>
  <div class="player-score"><?= $joueurs[0]['victoire_loup'] ?></div>
  <div class="player-score"><?= $joueurs[1]['victoire_loup'] ?></div>

  <div class="label">Victoires Undercover</div>
  <div class="player-score"><?= $joueurs[0]['victoire_undercover'] ?></div>
  <div class="player-score"><?= $joueurs[1]['victoire_undercover'] ?></div>

  <div class="label">Défaites Loup Garou</div>
  <div class="player-score"><?= $joueurs[0]['defaite_loup'] ?></div>
  <div class="player-score"><?= $joueurs[1]['defaite_loup'] ?></div>

  <div class="label">Défaites Undercover</div>
  <div class="player-score"><?= $joueurs[0]['defaite_undercover'] ?></div>
  <div class="player-score"><?= $joueurs[1]['defaite_undercover'] ?></div>

  <div class="label">Défaites éclairs Loup Garou</div>
  <div class="player-score"><?= $joueurs[0]['defaite_eclair_loup'] ?></div>
  <div class="player-score"><?= $joueurs[1]['defaite_eclair_loup'] ?></div>

  <div class="label">Défaites éclairs Undercover</div>
  <div class="player-score"><?= $joueurs[0]['defaite_eclair_undercover'] ?? 0 ?></div>
  <div class="player-score"><?= $joueurs[1]['defaite_eclair_undercover'] ?? 0 ?></div>
</div>

<a href="javascript:history.back()" class="btn-retour">
    <img src="../img/return.png" alt="Bouton retour" />
</a>


<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="../img/home.png" alt="Accueil" />
</a>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

    body {
      margin: 0;
      padding: 0;
      background: #f6c445 url('../img/background.png') center/cover no-repeat;
      font-family: 'Anton', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #f9f9f9;
    }

    .title {
      background-color: #7b112c;
      color: white;
      font-size: 3em;
      padding: 20px 40px;
      margin-top: 30px;
      text-align: center;
      border-radius: 10px;
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

.btn-mode {
  position: fixed;
  bottom: 30px; /* En bas de la page */
  left: 50%; /* Centré horizontalement */
  transform: translateX(-50%); /* Décale de 50% de sa propre largeur vers la gauche pour centrer */
  z-index: 1000;
  cursor: pointer;
  display: inline-block;
  width: 200px; /* Largeur augmentée */
  height: auto;
}

.btn-mode img {
  width: 100%;
  height: auto;
  display: block;
}

    .scoreboard {
      display: grid;
      grid-template-columns: 1fr 150px 150px;
      gap: 10px;
      margin-top: 40px;
      background: rgba(255, 255, 255, 0.1);
      padding: 30px;
      border-radius: 15px;
      backdrop-filter: blur(4px);
    }

    .label {
      text-align: right;
      padding-right: 20px;
      font-size: 1.2em;
    }

    .player-name {
      font-size: 2em;
      margin-bottom: 20px;
      text-align: center;
    }

    .player-score {
      text-align: center;
      font-size: 2em;
    }

    .footer {
      margin-top: 40px;
      font-size: 1em;
      color: #fff;
    }

    .column-titles {
      display: contents;
    }

    .column-titles div {
      font-size: 1.3em;
      text-align: center;
      margin-bottom: 20px;
    }

    @media (max-width: 600px) {
      .scoreboard {
        grid-template-columns: 1fr 1fr;
      }

      .label {
        text-align: left;
        grid-column: span 2;
      }

      .column-titles {
        display: none;
      }

      .player-score {
        font-size: 1.5em;
      }
    }
    
  </style>