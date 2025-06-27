<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Statistiques finales - Loups Garous & Undercover</title>

<?php
// Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=vs2;charset=utf8mb4', 'root', '');

// Suppression des données si formulaire soumis
if (isset($_POST['clear_data'])) {
    $pdo->exec("DELETE FROM loup_garou2");
    $pdo->exec("DELETE FROM undercover2");
    // Recharge les stats après suppression
    header("Location: " . $_SERVER['PHP_SELF']); // Redirection pour éviter resoumission
    exit;
}

// Requête jointe pour tout récupérer en une fois
$sql = "
    SELECT p.prenom, 
           u.victoire AS victoire_undercover, 
           u.defaite AS defaite_undercover,
           u.defaite_eclair AS defaite_eclair_undercover,
           l.victoire AS victoire_loup, 
           l.defaite AS defaite_loup,
           l.defaite_eclair AS defaite_eclair_loup
    FROM persos p
    LEFT JOIN undercover2 u ON p.id = u.id_personne
    LEFT JOIN loup_garou2 l ON p.id = l.id_personne
";



$joueurs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="title">STATISTIQUES FINALES</div>

<div class="scoreboard-container">
  <div class="scoreboard-wrapper">
<div class="scoreboard">
  <div></div> <!-- Cellule vide en haut à gauche -->

  <!-- Noms des joueurs en haut -->
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-name"><?= htmlspecialchars($joueur['prenom']) ?></div>
  <?php endforeach; ?>

  <!-- Victoires Loup Garou -->
  <div class="label">Victoires Loup Garou</div>
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-score"><?= $joueur['victoire_loup'] ?? 0 ?></div>
  <?php endforeach; ?>

  <!-- Victoires Undercover -->
  <div class="label">Victoires Undercover</div>
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-score"><?= $joueur['victoire_undercover'] ?? 0 ?></div>
  <?php endforeach; ?>

  <!-- Défaites Loup Garou -->
  <div class="label">Défaites Loup Garou</div>
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-score"><?= $joueur['defaite_loup'] ?? 0 ?></div>
  <?php endforeach; ?>

  <!-- Défaites Undercover -->
  <div class="label">Défaites Undercover</div>
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-score"><?= $joueur['defaite_undercover'] ?? 0 ?></div>
  <?php endforeach; ?>

  <!-- Défaites éclairs Loup Garou -->
  <div class="label">Défaites éclairs Loup Garou</div>
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-score"><?= $joueur['defaite_eclair_loup'] ?? 0 ?></div>
  <?php endforeach; ?>

  <!-- Défaites éclairs Undercover -->
  <div class="label">Défaites éclairs Undercover</div>
  <?php foreach ($joueurs as $joueur): ?>
    <div class="player-score"><?= $joueur['defaite_eclair_undercover'] ?? 0 ?></div>
  <?php endforeach; ?>
</div>
</div>
</div>

<a href="javascript:history.back()" class="btn-retour">
    <img src="../img/return.png" alt="Bouton retour" />
</a>

<form method="POST" onsubmit="return confirm('⚠️ Es-tu sûr de vouloir effacer toutes les données ?');">
    <button type="submit" name="clear_data" class="btn-supprimer">Effacer toutes les données</button>
</form>


<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="../img/home.png" alt="Accueil" />
</a>


<style>
  :root {
    --nb-joueurs: <?= count($joueurs) ?>;
  }
</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

    body {
      margin: 0;
      padding: 0;
      background: #f6c445 url('../img/background.png') 150%/*center*//cover no-repeat;
      font-family: 'Anton', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #f9f9f9;
    }

    /*changement pour que l'écran soit bien  étiré*/
html, body {
    height: 100%;
    min-height: 100vh;
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

.btn-supprimer {
  background-color: #b91c1c;
  color: white;
  font-size: 1.2em;
  padding: 10px 20px;
  border: none;
  border-radius: 10px;
  margin: 20px auto;
  display: block;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn-supprimer:hover {
  background-color: #991b1b;
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

.scoreboard-wrapper {
  width: 100%;
  overflow-x: auto;
  padding-bottom: 20px;
}

.scoreboard {
  width: max-content; /* Force à prendre la largeur de son contenu */
  min-width: 100%;    /* Ne jamais être plus petit que l'écran */
  background: rgba(255, 255, 255, 0.1);
  padding: 30px;
  border-radius: 15px;
  backdrop-filter: blur(4px);
  display: grid;
  grid-template-columns: 1fr repeat(var(--nb-joueurs), 150px);
  gap: 10px;
}


    .label {
      text-align: right;
      padding-right: 20px;
      font-size: 1.2em;
    }

    .player-name {
      font-size: 2em;
      margin-bottom: 20px;
      text-align: right;
      padding-right: 10px;
    }


    .player-score {
      text-align: right;
      padding-right: 10px;
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

@media (max-width: 1024px) {
  .scoreboard {
    grid-template-columns: 1fr repeat(var(--nb-joueurs), 90px);
    padding: 15px;
    gap: 6px;
  }

  .title {
    font-size: 2em;
    padding: 10px 20px;
  }

  .player-name {
    font-size: 1.2em;
  }

  .player-score {
    font-size: 1.2em;
  }

  .label {
    font-size: 1em;
  }

  .btn-retour img,
  .btn-accueil img {
    width: 150%;
  }

  .btn-mode {
    width: 150px;
  }
}

.scoreboard-container {
  width: 100%;
  overflow-x: auto;
  padding-bottom: 10px; /* Pour pas coller aux boutons */
}



    @media (max-width: 900px) {
  .scoreboard {
    display: block;
    padding: 15px;
  }

  .scoreboard .label {
    font-size: 1.1em;
    margin-top: 20px;
    text-align: left;
  }

  .scoreboard .player-name,
  .scoreboard .player-score {
    display: inline-block;
    width: 48%;
    text-align: left;
    font-size: 1.1em;
    margin: 2px 0;
  }

  .title {
    font-size: 2em;
    padding: 15px 20px;
    margin-top: 20px;
  }

  .btn-retour,
  .btn-accueil,
  .btn-mode {
    width: 40px;
  }

  .btn-retour img,
  .btn-accueil img,
  .btn-mode img {
    width: 100%;
  }
}

    
  </style>