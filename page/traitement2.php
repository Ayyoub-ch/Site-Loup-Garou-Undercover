<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=vs2;charset=utf8mb4", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// 1. Récupérer le nom du jeu
$jeu = strtolower(trim($_POST['jeu'] ?? ''));

$mappingJeuTable = [
    'loup garou' => 'loup_garou2',
    'undercover' => 'undercover2'
];

if (!array_key_exists($jeu, $mappingJeuTable)) {
    die("Jeu non reconnu.");
}
$table = $mappingJeuTable[$jeu];

// 2. Fonction pour insérer ou mettre à jour les statistiques
function insertOrUpdateStats(PDO $pdo, string $table, int $id_personne, array $stats) {
    $check = $pdo->prepare("SELECT * FROM $table WHERE id_personne = ?");
    $check->execute([$id_personne]);

    if ($check->fetch()) {
        // Mise à jour
        $update = $pdo->prepare("
            UPDATE $table 
            SET victoire = victoire + ?, 
                defaite = defaite + ?, 
                defaite_eclair = defaite_eclair + ? 
            WHERE id_personne = ?
        ");
        $update->execute([
            $stats['victoire'], 
            $stats['defaite'], 
            $stats['defaite_eclair'], 
            $id_personne
        ]);
    } else {
        // Insertion
        $insert = $pdo->prepare("
            INSERT INTO $table (id_personne, victoire, defaite, defaite_eclair) 
            VALUES (?, ?, ?, ?)
        ");
        $insert->execute([
            $id_personne, 
            $stats['victoire'], 
            $stats['defaite'], 
            $stats['defaite_eclair']
        ]);
    }
}

// 3. Boucle sur tous les joueurs du formulaire
// ($_POST['points'], $_POST['defaites'], $_POST['defaites_eclair']) sont des tableaux associatifs avec les ID des joueurs

foreach ($_POST['points'] as $id => $victoires) {
    $id_personne = (int) $id;

    $defaites = isset($_POST['defaites'][$id]) ? (int) $_POST['defaites'][$id] : 0;
    $defaitesEclair = isset($_POST['defaites_eclair'][$id]) ? (int) $_POST['defaites_eclair'][$id] : 0;

    $stats = [
        'victoire' => (int) $victoires,
        'defaite' => $defaites,
        'defaite_eclair' => $defaitesEclair
    ];

    insertOrUpdateStats($pdo, $table, $id_personne, $stats);
}

// 4. Redirection
header("Location: stats2.php");
exit;
?>
