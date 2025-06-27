<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=vs;charset=utf8mb4", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupérer et valider les données
$jeu = strtolower(trim($_POST['jeu'] ?? ''));

$mappingJeuTable = [
    'loup garou' => 'loup_garou',
    'undercover' => 'undercover'
];

if (!array_key_exists($jeu, $mappingJeuTable)) {
    die("Jeu non reconnu.");
}
$table = $mappingJeuTable[$jeu];

// Récupérer les points et autres données
function getValue($key) {
    return isset($_POST[$key]) ? (int) $_POST[$key] : 0;
}

$dataYamin = [
    'victoire' => getValue('pointsYamin'),
    'defaite' => getValue('defaitesYamin'),
    'defaite_eclair' => getValue('defaitesEclairYamin')
];

$dataHalima = [
    'victoire' => getValue('pointsHalima'),
    'defaite' => getValue('defaitesHalima'),
    'defaite_eclair' => getValue('defaitesEclairHalima')
];

function getIdPersonne(PDO $pdo, string $prenom): int {
    $stmt = $pdo->prepare("SELECT id FROM persos WHERE prenom = ?");
    $stmt->execute([$prenom]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        return (int) $row['id'];
    }
    die("Le joueur '$prenom' n'existe pas.");
}

function insertOrUpdateStats(PDO $pdo, string $table, int $id_personne, array $stats) {
    $check = $pdo->prepare("SELECT * FROM $table WHERE id_personne = ?");
    $check->execute([$id_personne]);

    if ($check->fetch()) {
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

$idYamin = getIdPersonne($pdo, 'Yamin');
$idHalima = getIdPersonne($pdo, 'Halima');

insertOrUpdateStats($pdo, $table, $idYamin, $dataYamin);
insertOrUpdateStats($pdo, $table, $idHalima, $dataHalima);

// Redirection ou message de confirmation
header("Location: /vs/page/game.php");
exit;
?>
