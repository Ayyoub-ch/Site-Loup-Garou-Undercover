<h1>Choisissez votre Personnage</h1>
<title>Fiche des Joueurs</title>

<div class="menu-options">
    <?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=vs2;charset=utf8mb4", "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT id, prenom FROM persos ORDER BY id ASC");
        while ($row = $stmt->fetch()) {
            $id = (int)$row['id'];
            $prenom = htmlspecialchars($row['prenom']);
            $prenom_url = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $prenom)); // nettoie le nom pour l'URL
            $prenom_clean = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $prenom)); // nettoie pour les noms de fichiers


            echo "<figure onclick=\"location.href='/vs/page/perso/{$prenom_url}.php'\">";
            echo "<img src='/vs/img/perso/{$prenom_clean}.png' alt='Image de {$prenom}'>";
            echo "<figcaption>{$prenom}</figcaption>";
            echo "</figure>";
        }
    } catch (PDOException $e) {
        echo "<p>Erreur BDD : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>

</div>



<a href="javascript:history.back()" class="btn-retour">
    <img src="/vs/img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="../img/home.png" alt="Accueil" />
</a>






<title>Choisissez votre option</title>
       <style>
        @font-face {
            font-family: 'Edo SZ';
            src: url('/vs/fonts//edosz.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            background-image: url('/vs/img/background.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            font-family: 'Edo SZ', cursive;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 4em;
            margin: 80px 0 40px; /* ↑ Titre plus éloigné du haut et du reste */
            color: white;
            text-shadow: 2px 2px 4px #000;
        }

        .menu-options {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px 30px; /* 30px entre les images horizontalement et verticalement */
            margin-top: 70px;
            margin-bottom: 200px;
            max-width: 1100px; /* pour garder les images centrées */
            margin-left: auto;
            margin-right: auto;
        }

        .menu-options figure {
            flex: 0 0 23%; /* environ 25% moins le gap, pour avoir 4 par ligne */
            margin: 0;
            cursor: pointer;
            text-align: center;
        }



        .menu-options img:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0,0,0,0.6);
        }

        figure {
        margin: 0; /* enlève marge par défaut */
        text-align: center;
        cursor: pointer;
    }

    figure img {
        width: 250px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.4);
        transition: transform 0.3s, box-shadow 0.3s;
        display: block;
        margin: 0 auto; /* centre l’image dans figure */
    }

    figure:hover img {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0,0,0,0.6);
    }

    figcaption {
        font-family: 'Edo SZ', cursive;
        font-size: 2em;
        color: white;
        margin-top: 15px;
        text-shadow: 1px 1px 2px #000;
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

    </style>