<title>Création de la fiche personnage</title>
<h1> PAS ENCORE ABOUTI (coming soon)</h1>
<h1>Mais votre personnage a été ajouté</h1>
<h2>Créer une fiche personnage</h2>

<form method="POST" action="/vs/page/traitement_fiche.php" enctype="multipart/form-data" class="fiche-form">
  <div class="form-colonne">
    <!-- Colonne gauche : infos & texte -->
    <label for="nom">Nom du personnage :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="surnoms">Surnoms :</label>
    <input type="text" id="surnoms" name="surnoms">

    <label for="style">Style de jeu :</label>
    <textarea id="style" name="style" rows="4" required></textarea>

    <label for="strategie">Comment le battre ?</label>
    <textarea id="strategie" name="strategie" rows="4" required></textarea>

    <label for="cible">Cible préférée :</label>
    <textarea id="cible" name="cible" rows="2" required></textarea>
  </div>

  <div class="form-colonne">
    <!-- Colonne droite : images -->
    <label for="image1">Image principale :</label>
    <input type="file" id="image1" name="image1" accept="image/*" required>

  </div>

  <button type="submit" class="submit-button">Créer la fiche</button>
</form>

<a href="javascript:history.back()" class="btn-retour">
    <img src="/vs/img/return.png" alt="Bouton retour" />
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
    background-image: url('/vs/img/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 24px;
    font-family: 'Edo SZ', cursive;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

h1 {
    color: red;
    text-shadow: 2px 2px 5px black;
    font-size: 2em;
    text-align: center;
}

h2 {
    color: white;
    text-shadow: 2px 2px 5px black;
    font-size: 2em;
    text-align: center;
}

.fiche-form {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.6);
    color: white;
    max-width: 900px;
    width: 100%;
    box-sizing: border-box;
}

.form-colonne {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px;
    min-width: 300px;
}

.fiche-form label {
    font-size: 1.2em;
    color: white;
    text-shadow: 1px 1px 2px black;
}

.fiche-form input[type="text"],
.fiche-form textarea,
.fiche-form input[type="file"] {
    padding: 10px;
    font-size: 1em;
    border-radius: 10px;
    border: none;
    outline: none;
    background: rgba(255, 255, 255, 0.8);
    font-family: 'Edo SZ', cursive;
    color: black;
}

textarea {
    resize: vertical;
}

.submit-button {
    background-color: #333;
    color: white;
    font-size: 1.4em;
    padding: 12px 20px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
    align-self: center;
    font-family: 'Edo SZ', cursive;
}

.submit-button:hover {
    background-color: #555;
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
</style>
