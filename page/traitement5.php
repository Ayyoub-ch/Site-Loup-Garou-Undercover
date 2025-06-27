<?php
$dsn = "mysql:host=localhost;dbname=vs2;charset=utf8mb4";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

$prenoms = $_POST['personnages'] ?? [];

if (empty($prenoms) || !is_array($prenoms)) {
    die("Aucun personnage sélectionné.");
}

foreach ($prenoms as $prenom) {
    $prenom = trim($prenom);
    if ($prenom === '') continue;

    // Récupérer l'ID depuis le prénom
    $stmt = $pdo->prepare("SELECT id FROM persos WHERE prenom = ?");
    $stmt->execute([$prenom]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$row) continue;

    $id_personne = $row['id'];

    // Supprimer de toutes les tables
    $pdo->prepare("DELETE FROM fiches WHERE nom = ?")->execute([$prenom]);
    $pdo->prepare("DELETE FROM loup_garou2 WHERE id_personne = ?")->execute([$id_personne]);
    $pdo->prepare("DELETE FROM undercover2 WHERE id_personne = ?")->execute([$id_personne]);
    $pdo->prepare("DELETE FROM persos WHERE id = ?")->execute([$id_personne]);

    // Supprimer le fichier associé
    $nom_fichier = strtolower(preg_replace('/[^a-z0-9]/', '_', iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $prenom)));
    $chemin_fichier = "../page/perso/" . $nom_fichier . ".php";
    if (file_exists($chemin_fichier)) {
        unlink($chemin_fichier);
    }
}

// Redirection finale
header("Location: /vs/page/fiche_perso.php");
exit;
?>
