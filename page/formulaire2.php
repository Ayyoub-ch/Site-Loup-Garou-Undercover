<title>Compte des scores </title>
<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=vs2;charset=utf8mb4", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$joueurs = $pdo->query("SELECT id, prenom FROM persos ORDER BY prenom")->fetchAll(PDO::FETCH_ASSOC);
?>


<form class="game-form" id="gameForm" method="POST" action="/vs/page/traitement2.php">
    <!-- Étape 1 : Choix du jeu -->
    <div id="step1">
        <h2>Quel jeu avez-vous joué aujourd'hui ?</h2>
        <label for="jeu">Nom du jeu :</label>
        <input type="text" id="jeu" name="jeu" required>
        <button type="button" onclick="goToStep2()">Suivant</button>
    </div>

    <!-- Étape 2 : Résultats -->
    <div id="step2" style="display: none;">
        <h2>Entrez les résultats pour le jeu : <span id="jeuChoisi"></span></h2>

        <?php foreach ($joueurs as $joueur): ?>
            <h3><?= htmlspecialchars($joueur['prenom']) ?></h3>

            <label>Victoires :</label>
            <input type="number" name="points[<?= $joueur['id'] ?>]" value="0" required>

            <label>Défaites :</label>
            <input type="number" name="defaites[<?= $joueur['id'] ?>]" value="0">

            <label>Défaites rapides :</label>
            <input type="number" name="defaites_eclair[<?= $joueur['id'] ?>]" value="0">
        <?php endforeach; ?>

        <button type="submit">Envoyer</button>
    </div>

    <div id="result" style="display: none; margin-top: 20px;"></div>
</form>



<script>
function goToStep2() {
    const jeu = document.getElementById('jeu').value.trim();
    if (!jeu) {
        alert("Veuillez entrer le nom du jeu.");
        return;
    }
    document.getElementById('jeuChoisi').innerText = jeu;
    document.getElementById('step1').style.display = 'none';
    document.getElementById('step2').style.display = 'block';
}
</script>

<!-- Boutons retour/accueil et style = identiques à ton message -->
<a href="javascript:history.back()" class="btn-retour">
    <img src="../img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="../img/home.png" alt="Accueil" />
</a>

<style>
    @font-face {
    font-family: 'Edo SZ';
    src: url('/vs/fonts/edosz.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

    body {
        background-image: url('../img/background.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin: 0;
        font-family: 'Edo SZ', cursive !important;
        padding: 24px;
        display: flex;
        color: white;
        flex-direction: column;
        gap: 48px;
        align-items: center;
    }

    .btn-retour {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 1000;
        cursor: pointer;
        display: inline-block;
        width: 50px;
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
        width: 50px;
        height: auto;
    }

    .btn-accueil img {
        width: 100%;
        height: auto;
        display: block;
    }

    .game-form {
        display: flex;
        flex-direction: column;
        width: 300px;
        margin: 40px auto;
        font-family: 'Edo SZ', cursive;
    }

    .game-form label {
        margin-top: 15px;
        font-size: 1.2em;
    }

    .game-form input[type="text"],
    .game-form input[type="number"] {
        padding: 8px;
        font-size: 1em;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        margin-top: 5px;
    }

    .game-form button {
        margin-top: 20px;
        padding: 10px;
        font-size: 1.2em;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .game-form button:hover {
        background-color: #555;
    }

    h2 {
        font-family: 'Edo SZ', cursive;
        font-size: 1.6em;
        color: white;
        text-align: center;
        text-shadow: 1px 1px 2px black;
    }

    h3 {
        margin-top: 30px;
        font-size: 1.4em;
        color: white;
        text-shadow: 1px 1px 2px black;
    }

    #result {
        text-align: center;
        font-size: 1.2em;
    }
    </style>