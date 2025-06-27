<title>Choisissez votre mode</title>
<style>
    @font-face {
        font-family: 'Edo SZ';
        src: url('fonts/edosz.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    /*changement pour que l'écran soit bien  étiré
    html, body {
        height: 100%;
        min-height: 100vh;
    }*/

    body {
        background-image: url('img/background.png');
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
        margin: 80px 0 40px;
        color: white;
        text-shadow: 2px 2px 4px #000;
    }

    .menu-options {
        display: flex;
        gap: 200px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 200px; /* avant c'était 70px */
        margin-bottom: 200px;
    }

    figure {
        margin: 0;
        text-align: center;
        cursor: pointer;
    }

    figure img {
        width: 250px;
        height: auto;
        border-radius: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        transition: transform 0.3s, box-shadow 0.3s;
        display: block;
        margin: 0 auto;
    }

    figure:hover img {
        transform: scale(1.05);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.6);
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

<h1>CHOOSE YOUR MODE</h1>

<div class="menu-options">
    <figure onclick="location.href='index.php?action=all'">
        <img src="img/all.png" alt="all">
        <figcaption>Tous</figcaption>
    </figure>

    <figure onclick="location.href='index.php?action=accueil'">
        <img src="img/vs2.png" alt="vs2">
        <figcaption>Yamin VS Halima</figcaption>
    </figure>
</div>

<a href="javascript:history.back()" class="btn-retour">
    <img src="img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="img/home.png" alt="Accueil" />
</a>

<a href="/vs/index.php?action=mode" class="btn-mode">
    <img src="img/back_to_all.png" alt="Accueil" />
</a>