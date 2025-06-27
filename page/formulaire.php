<title>Compte des scores </title>
<form class="game-form" id="gameForm" method="POST" action="/vs/page/traitement.php">
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

        <h3>Yamin</h3>
        <label for="pointsYamin">Victoires :</label>
        <input type="number" id="pointsYamin" name="pointsYamin" value="0" required>

        <label for="defaitesYamin">Défaites :</label>
        <input type="number" id="defaitesYamin" name="defaitesYamin" value="0">

        <label for="defaitesEclairYamin">Défaites rapides :</label>
        <input type="number" id="defaitesEclairYamin" name="defaitesEclairYamin" value="0">

        <h3>Halima</h3>
        <label for="pointsHalima">Victoires :</label>
        <input type="number" id="pointsHalima" name="pointsHalima" value="0" required>

        <label for="defaitesHalima">Défaites :</label>
        <input type="number" id="defaitesHalima" name="defaitesHalima" value="0">

        <label for="defaitesEclairHalima">Défaites rapides :</label>
        <input type="number" id="defaitesEclairHalima" name="defaitesEclairHalima" value="0">

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
    flex-direction: column;
    gap: 48px;
    align-items: center;
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

.game-form input {
    padding: 8px;
    font-size: 1em;
    border-radius: 5px;
    border: 1px solid #ccc;
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

.game-form {
    display: flex;
    flex-direction: column;
    width: 300px;
    margin: 350  auto;
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

#result {
    text-align: center;
    font-size: 1.2em;
}


</style>


