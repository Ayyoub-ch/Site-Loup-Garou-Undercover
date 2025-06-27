<div class="fiche-personnage">
  <div class="fiche-image">
    <img src="/vs/img/perso/yasser.png" alt="Image du personnage">
  </div>
  <div class="fiche-info">
    <h2>Yasser AKA le Nouveau du Village </h2>
    <title>Fiche Perso: Yasser</title>
    <div class="info-section">
      <h3>Style de jeu</h3>
      <p>A première vue, on ne sait pas comment il joue car il fait des pronostics hasardeux. Mais ce qui est sur c'est que lorsqu'il est loup, on le sait très bien. Il parle assez souvent, mais ces prédictions sont toujours tournées dans l'unique but de gagner seul, ce qui fait que même si ses pronostics sont mauvais, ce sera uniquement pour lui, parfois même quand cela arrive il meurt de suite après.</p>
      <p>Etant nouveau dans le village et n'arrivant pas toujours à cerner les bonnes personnes à viser, cela lui arrive de se faire tuer ou de juste mourir à cause du fait que le village l'entende trop durant la nuit comme de jour, de ce fait il doit souvent quitter le village.</p>
    </div>
    
    <div class="info-section">
      <h3>Comment le battre</h3>
      <p>Si tu es à côté de lui et que ça fait énormément de bruit, tu sais qu'il est loup durant la nuit. Autrement pour le battre, tu pourras entendre les mouvements de l'air générés par ses doigts, ce qui le crame automatiquement. Si tu es loin de lui, tu peux simpleemnt le soupçonner d'un acte assez convainquant, car dans le cas contraire, ce qu'il dira le trahira les 3/4 du temps. Mais pour autant, il n'est pas à sous estimer, il peut discerner le bon du mauvais et c'est l'un des seuls qui se méfie le plus de Yamin en raison de son pressing par ce dernier</p>
    </div>
    
    <div class="info-section">
      <h3>Cible préférée</h3>
      <p>Il vise notamment Yamin car il est le suspect n°1 du village de Logic@l et Ayyoub car il est le plus silencieux, ce que Yasser considère comme suspect . Parfois il choisira Salah car c'est le choix de la facilité, étant souvent en face ou à côté de lui</p>
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
