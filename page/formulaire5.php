<title>Suppresion des personnages </title>
<h1>Gestion des fiches personnages</h1>

<!-- ======= SECTION SUPPRESSION ======= -->
<h2>Supprimer un ou plusieurs personnages</h2>

<form method="POST" action="/vs/page/traitement5.php" class="fiche-form">
  <div class="form-colonne">
    <p>Coche les personnages à supprimer :</p>

    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=vs2;charset=utf8mb4", "root", "");
    $stmt = $pdo->query("SELECT prenom FROM persos ORDER BY prenom");

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $prenom = htmlspecialchars($row['prenom']);
        echo "<label><input type='checkbox' name='personnages[]' value=\"$prenom\"> $prenom</label><br>";
    }
    ?>

    <button type="submit" class="submit-button" style="background-color:#a00; margin-top:20px;">
      Supprimer les personnages cochés
    </button>
  </div>
</form>



<a href="javascript:history.back()" class="btn-retour">
    <img src="/vs/img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="../img/home.png" alt="Accueil" />
</a>

<!-- Style conservé inchangé -->


<a href="javascript:history.back()" class="btn-retour">
    <img src="/vs/img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/index.php?action=menu" class="btn-accueil">
  <img src="/vs/img/home.png" alt="Accueil" />
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
