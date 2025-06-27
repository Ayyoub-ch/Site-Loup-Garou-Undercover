<div class="fiche-personnage">
  <div class="fiche-image">
    <img src="/vs/img/perso/salah.png" alt="Image du personnage">
    <p>Salah</p>
    <img src="/vs/img/perso/salah2.png" alt="Image du personnage">
    <p>Salah quand on ne le vise pas </p>
  </div>
  <div class="fiche-info">
    <h2>Salah AKA le Lion de l'Atlas</h2>
    <title>Fiche Perso: Salah</title>
    <div class="info-section">
      <h3>Style de jeu</h3>
      <p>Joueur analysant les bruits et mouvements des autres, s'il possède une intuition, il ne la lâchera pas de la partie, il essayera de trouver le coupable ou s'il est "coupable", il fera tout pour se montrer discret et agira de sorte à ce que personne ne puisse le soupçonner .</p>
    </div>
    
    <div class="info-section">
      <h3>Comment le battre ?</h3>
      <p>Le seul moyen est de le viser et de lui faire perdre les moyens, comme ça il fera des erreurs et on pourra discerner plus simplement son rôle, autrement je ne vois pas comment le vaincre .</p>
    </div>
    
    <div class="info-section">
      <h3>Cible préférée</h3>
      <p>Il n'a pas de cible en particulier, mais s'il vise quelqu'un, il le visera pour le restant de la partie s'il n'est pas encore mort, comme un peu tout le monde, il visera Yamin ou Halima, mais parfois Erwan ou Matthieu sera là .</p>
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
