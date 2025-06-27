<div class="fiche-personnage">
  <div class="fiche-image">
    <img src="/vs/img/perso/florine.png" alt="Image du personnage">
    <p>Florine</p>
    <img src="/vs/img/perso/florine2.png" alt="Image du personnage">
    <p>Florine quand on ne la suspecte pas</p>
  </div>
  <div class="fiche-info">
    <h2>Florine</h2>
    <title>Fiche Perso: Florine</title>
    <div class="info-section">
      <h3>Style de jeu</h3>
      <p>Sensiblement similaire à comment Nicolas joue, Florine arrive à cacher son rôle assez facilement lors des parties, exception pour l'Undercover où c'est plus compliqué sans doute de rebondir sur le mot précédent si le mot de base est compliqué.</p>
    </div>
    
    <div class="info-section">
      <h3>Comment la battre ?</h3>
      <p>Pas trop d'idées la dessus, mais si elle a un rôle important, on pourra savoir en fonction de si des gens sont morts durant la nuit ou si son mot rejoint celui des joueurs précédents.</p>
    </div>
    
    <div class="info-section">
      <h3>Cible préférée</h3>
      <p>Pas de cible en particulier, mais généralement elle suivra le groupe sauf si son avis tranche radicalement.</p>
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
