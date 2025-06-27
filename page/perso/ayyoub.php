<div class="fiche-personnage">
  <div class="fiche-image">
    <img src="/vs/img/perso/ayyoub.png" alt="Image du personnage">
    <p>Ayyoub</p>
    <img src="/vs/img/perso/ayyoub3.png" alt="Image du personnage">
    <p>Ayyoub quand il joue</p>
    <img src="/vs/img/perso/ayyoub4.png" alt="Image du personnage">
    <p>Ayyoub quand il ne joue pas</p>
  </div>
  <title>Fiche Perso: Ayyoub</title>
  <div class="fiche-info">
    <h2>Ayyoub AKA Youb AKA L'endormi</h2>
    
    <div class="info-section">
      <h3>Style de jeu</h3>
      <p>Parle quasiment pas, sauf si cela est nécessaire dans une partie, il ne prend ni part au débat, ni au vote et généralement il suivra celui qui selon lui est le plus propre de la vérité </p>
      <p>Autrement ça lui arrive de parler et même de parfois débattre si cela devient dangereux pour lui ou pour son groupe, il essayera de ne pas donner de soupçon à qui que ce soit et si cela est utile, il pourra donner des indices aux joueurs sur son rôle dans la partie. Sinon cela lui arrive d'être complétement aléatoire, il peut faire des choix totalement hazardeux, ce qui peut dérouter les autres, ce qui fair qu'on ne peut pas de définir son style de jeu.</p>
    </div>
    
    <div class="info-section">
      <h3>Comment le battre ?</h3>
      <p>Il dort généralement avant et pendant la partie, donc il faut partir du principe que s'il dort ou qu'il ne parle pas alors c'est qu'il n'a aucun rôle important, dans le cas contraire, il a un rôle important. Mais même avec cette stratégie, cela peut se solder par une erreur ou même une fin de partie, car si vos le visez lui et qu'il a la mauvaise carte au mauvais moment, c'est fini.</p>
    </div>
    
    <div class="info-section">
      <h3>Cible préférée</h3>
      <p>N'importe qui fera l'affaire. Il peut viser tout le monde </p>
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
    font-family: 'Edo SZ', cursive;
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

.btn-mode {
  position: fixed;
  bottom: 20px; /* Plus proche du bas si tu veux */
  left: 50%;
  transform: translateX(-50%);
  z-index: 1000;
  cursor: pointer;
  display: inline-block;
  width: 100px;
  height: auto;
  background: transparent; /* S'assurer qu'il n'y ait pas de fond indésirable */
  border: none; /* Utile si c'est un bouton */
}

.btn-mode img {
  width: 100%;
  height: auto;
  display: block;
  pointer-events: none; /* Pour ne pas interférer si clics non voulus sur l'image */
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
