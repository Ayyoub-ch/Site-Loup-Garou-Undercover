<?php
// Connexion à la base
try {
    $pdo = new PDO("mysql:host=localhost;dbname=vs2;charset=utf8mb4", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupérer et valider le prénom
$prenom = trim($_POST['prenom'] ?? '');

if (empty($prenom)) {
    die("Le prénom est obligatoire.");
}

// Vérifier si le joueur existe déjà
$stmt = $pdo->prepare("SELECT id FROM persos WHERE prenom = ?");
$stmt->execute([$prenom]);

if ($stmt->fetch()) {
    die("Ce joueur existe déjà.");
}

// Insérer le joueur
$insert = $pdo->prepare("INSERT INTO persos (prenom) VALUES (?)");
$insert->execute([$prenom]);

// Affichage de confirmation
echo "<h2>Joueur '$prenom' ajouté avec succès.</h2>";
echo '<br><a href="ajouter_joueur.php">Ajouter un autre joueur</a>';
echo '<br><a href="formulaire.php">Retour au formulaire de score</a>';



// 4. Redirection
header("Location: stats2.php");
exit;
?>
