<title>Choisissez votre jeu</title>
<h1>CHOOSE YOUR GAME </h1>

<div class="container">
    <figure>
        <a href="/vs/index.php?action=loup_garou">
        <img src="../img/loup_garou.png"  alt="loup"  style="width: 350px; height: auto;"/></a> 
        <figcaption>Loup-Garou</figcaption>
    </figure>

<figure>
    <a href="/vs/index.php?action=undercover">
    <img src="../img/undercover.png" alt="undercover"  style="width: 350px; height: auto;"/></a> 
    <figcaption>Undercover</figcaption>
</figure>



<a href="javascript:history.back()" class="btn-retour">
    <img src="../img/return.png" alt="Bouton retour" />
</a>

<a href="/vs/page/menu.php" class="btn-accueil">
  <img src="../img/home.png" alt="Accueil" />
</a>


<style>
@font-face {
  font-family: 'Mortal Kombat 5';
  src: url('../fonts/mortal_kombat/mk4.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

body {
  font-family: 'Mortal Kombat 5';
  background-image: url('../img/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin: 0;
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 48px;
    align-items: center;
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


h1 {
    align-items: center;
    color: #fff;
}

.container {
    display: flex;
    justify-content: center; /* centre les images horizontalement */
    gap: 100px; /* espace entre les images */
    flex-wrap: wrap; /* permet de passer à la ligne si l'écran est petit */
    margin-top: 200px; /* descend les images depuis le haut */
}

figure {
    flex: 1;
    max-width: 300px;
    text-align: center;
}

img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

figcaption {
    margin-top: 12px;
    font-size: 2rem;
    color: #555;
    font-weight: 500;
}
</style>