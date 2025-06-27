<title>Choisissez votre option</title>
    <style>
        @font-face {
            font-family: 'Edo SZ';
            src: url('../fonts/edosz.ttf') format('truetype');
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
            gap: 200px; /* ↑ Plus d’espace entre les images */
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 70px;  /* ↑ Espace au-dessus des images */
            margin-bottom: 200px; /* ↑ Plus d’espace en bas */
        }

        .menu-options img {
            width: 250px;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.4);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor: pointer;
            margin-top: 100px; /* ↓ Pour baisser un peu chaque image individuellement si besoin */
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

.btn-mode {
  position: fixed;
  bottom: 30px; /* En bas de la page */
  left: 50%; /* Centré horizontalement */
  transform: translateX(-50%); /* Décale de 50% de sa propre largeur vers la gauche pour centrer */
  z-index: 1000;
  cursor: pointer;
  display: inline-block;
  width: 100px; /* Largeur augmentée */
  height: auto;
}

.btn-mode img {
  width: 100%;
  height: auto;
  display: block;
}


    </style>


    <h1>Choisissez votre menu</h1>

<div class="menu-options">
    <figure onclick="location.href='formulaire.php'">
        <img src="/vs/img/results.png" alt="Menu 1">
        <figcaption>Ajouter un score</figcaption>
    </figure>
    <figure onclick="location.href='game.php'">
        <img src="/vs/img/score.png" alt="Menu 2">
        <figcaption>Voir les scores</figcaption>
    </figure>
    <figure onclick="location.href='stats.php'">
        <img src="/vs/img/stats.png" alt="Menu 3">
        <figcaption>Voir les stats</figcaption>
    </figure>
</div>


<a href="javascript:history.back()" class="btn-retour">
    <img src="/vs/img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="/vs/img/home.png" alt="Accueil" />
</a>

<a href="/vs/index.php?action=mode" class="btn-mode">
    <img src="/vs/img/back_to_all.png" alt="Accueil" />
</a>
