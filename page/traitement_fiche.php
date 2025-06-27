<?php
$dsn = "mysql:host=localhost;dbname=vs2;charset=utf8mb4";
$user = "root"; // change si nécessaire
$pass = "";      // change si nécessaire

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Connexion échouée : " . $e->getMessage());
}

// Récupérer les champs texte
$nom = $_POST['nom'] ?? '';
$surnoms = $_POST['surnoms'] ?? '';
$style = $_POST['style'] ?? '';
$strategie = $_POST['strategie'] ?? '';
$cible = $_POST['cible'] ?? '';

// Nettoyage du nom pour usage dans fichiers (ex : malik)
$nom_clean = trim($nom);
$nom_clean = preg_replace('/[^\PC\s]/u', '', $nom_clean); // enlève les caractères invisibles
$nom_ascii = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $nom_clean);
$nom_fichier = strtolower(preg_replace('/[^a-z0-9]/', '_', $nom_ascii));

if ($nom_fichier === '') {
    $nom_fichier = 'perso';
}

// Traitement de l’image unique
$upload_dir = '../img/perso/';
$image_path = null;

if (isset($_FILES["image1"]) && $_FILES["image1"]['error'] === UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["image1"]['tmp_name'];
    $original_name = basename($_FILES["image1"]['name']);
    $extension = pathinfo($original_name, PATHINFO_EXTENSION); // jpg, png, etc.
    $target_path = $upload_dir . $nom_fichier . '.' . $extension;

    if (move_uploaded_file($tmp_name, $target_path)) {
        $image_path = $target_path;
    }
}

// Préparer et exécuter la requête d'insertion
try {
    $stmt = $pdo->prepare("INSERT INTO fiches (nom, surnoms, style, strategie, cible, image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $nom,
        $surnoms,
        $style,
        $strategie,
        $cible,
        $image_path,
    ]);

    // Générer une fiche PHP dans page/perso/
    $fiche_path = '../page/perso/' . $nom_fichier . '.php';
    $image_name = basename($image_path);

    $fiche_content = <<<HTML
<div class="fiche-personnage">
  <div class="fiche-image">
    <img src="/vs/img/perso/$image_name" alt="Image du personnage">
    <p>$nom</p>
  </div>
  <title>Fiche Perso: $nom</title>
  <div class="fiche-info">
    <h2>$nom AKA $surnoms</h2>
    
    <div class="info-section">
      <h3>Style de jeu</h3>
      <p>$style</p>
    </div>
    
    <div class="info-section">
      <h3>Comment le battre ?</h3>
      <p>$strategie</p>
    </div>
    
    <div class="info-section">
      <h3>Cible préférée</h3>
      <p>$cible</p>
    </div>
  </div>
</div>

<a href="javascript:history.back()" class="btn-retour">
    <img src="/vs/img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
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
    margin: 0;
    padding: 0;
    font-family: 'Edo SZ', cursive !important;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.fiche-personnage {
    display: flex;
    max-width: 900px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.6);
    margin: 50px auto;
    padding: 30px;
    color: white;
    font-family: 'Edo SZ', cursive;
    backdrop-filter: blur(10px);
}
.fiche-image {
    flex: 1;
    max-width: 350px;
    margin-right: 40px;
}
.fiche-image img {
    width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.4);
    display: block;
}
.fiche-info {
    flex: 2;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.fiche-info h2 {
    font-size: 3em;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px #000;
}
.info-section {
    margin-bottom: 25px;
}
.info-section h3 {
    font-size: 1.8em;
    margin-bottom: 8px;
    text-shadow: 1px 1px 3px #000;
    border-bottom: 2px solid white;
    padding-bottom: 5px;
    max-width: max-content;
}
.info-section p {
    font-size: 1.4em;
    line-height: 1.5;
    color: #eee;
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
HTML;

    file_put_contents($fiche_path, $fiche_content);

    // Redirection après succès
    header("Location: fiche_perso.php?success=1");
    exit;

} catch (PDOException $e) {
    die("Erreur lors de l'insertion : " . $e->getMessage());
}
?>
