<div class="fiche-personnage">
  <div class="fiche-image">
    <img src="/vs/img/perso/yamin.png" alt="Image du personnage">
    <p>Yamin</p>
    <img src="/vs/img/perso/yamin3.png" alt="Image du personnage">
    <p>Yamin quand il joue</p>
  </div>
  <title>Fiche Perso: Yamin</title>
  <div class="fiche-info">
    <h2>Yamin AKA le mentaliste AKA le manipulateur</h2>
    
    <div class="info-section">
      <h3>Style de jeu</h3>
      <p>Parlant généralement en premier et arrive facilement à s'imposer lors de débats,il joue de ses mots et de sa ruse, pour tourner le jeu en sa faveur. Pour pouvoir gagner, il arrive à rester sérieux et impassible pour que personne n'arrive à savoir s'il est à éliminer ou à laisser. Son mode de fonctionnement est le suivant: il sème d'abord le doute dans les supitions de ses adversairs puis en profite pour éliminer les éléments les plus génants pour gagner. Diviser pour mieux régner </p>
      <p>Malgré tout, cette capacité à entrer dans la tête de ses adversaires lui apporte l'une des plus grosses malchances vis-à-vis des parties, il aura toujours de fortes de chances de mourir au premier tour, par simplement la peur qu'il procure à ceux en face de lui, ce qui peut retourner sa stratégie contre lui.</p>
    </div>
    
    <div class="info-section">
      <h3>Comment le battre ?</h3>
      <p>Rester à distance de ce qu'il dit et surtout essayer de distinguer si dans une partie il est allié ou adversaire. La seule option est de potentiellement partir dans le sens opposé de ce qu'il dit mais généralement soit il a une bonne intuition, soit le temps que tu t'en rendes compte tu as déjà perdu.</p>
    </div>
    
    <div class="info-section">
      <h3>Cible préférée</h3>
      <p>Halima ou simplement toute personne qu'il arrive à retourner dans son sens pour gagner</p>
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
