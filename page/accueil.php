<title>Chargement en cours ... </title>
<h1>1</h1>
<h2>17 juin</h2>

<div class="center-images">
    <div class="player">
        <div class="image-wrapper">
            <img src="img/case_blue.png" alt="Case Blue">
            <img src="img/perso/yamin2.png" alt="Yamin" class="inner-player">
        </div>
        <h2>Yamin</h2>
    </div>

    <img src="img/vs.png" alt="VS" class="watch-image">

    <div class="player">
        <div class="image-wrapper">
            <img src="img/case_red.png" alt="Case Red">
            <img src="img/perso/halima2.png" alt="Halima" class="inner-player">
        </div>
        <h2>Halima</h2>
    </div>
</div>

<div class="watch-container">
    <img src="img/watch.png" alt="Watch" class="watch-image">
</div>

<div id="loading-screen" style="display: none; position: fixed; top: 0; left: 0; 
width: 100%; height: 100%; background-color: rgba(0,0,0,0.8); 
color: white; font-size: 3em; justify-content: center; 
align-items: center; z-index: 9999; flex-direction: column; font-family: 'Edo SZ', cursive;">
    <p>Chargement…</p>
    <img src="img/loading.png" alt="Loading" style="width: 150px; margin-top: 20px;">
</div>

<script>
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('loading-screen').style.display = 'flex';
            setTimeout(function() {
                window.location.href = 'page/menu.php';
            }, 1000);
        }, 1000);
    };
</script>



<style>

    /* Animation rotation */
  @keyframes rotation {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }

  /* Style pour faire tourner l'image */
  #loading-screen img {
    animation: rotation 2s linear infinite;
  }


    @font-face {
    font-family: 'Edo SZ';
    src: url('fonts//edosz.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

/*changement pour que l'écran soit bien  étiré*/
    html, body {
        height: 100%;
        min-height: 100vh;
    }

body {
    background-image: url('img/background.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 0;
    padding: 0;
    color: white;
}

.image-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px; /* Espace de 20px entre les images et le footer */
}

.center-images {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px; /* espace entre les 3 blocs (image-texte, montre, image-texte) */
    margin-bottom: 50px;
}

.player {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.center-images img {
    width: 350px; /* taille standard des cases */
    height: auto;
}

.watch-container {
    display: flex;
    justify-content: center;
    margin-top: 40px;
}

.watch-image {
    width: 350px;
    height: auto;
}


h1, h2 {
    font-family: 'Edo SZ', cursive;
    text-align: center; /* Centre le texte horizontalement */
    font-size: 2.5em; /* Ajuste la taille de la police, vous pouvez utiliser 'em', 'rem', 'px', etc. */
    margin: 20px 0; /* Ajoute un espace autour des titres pour une meilleure présentation */
}

h1 {
    font-size: 5em; /* Augmente la taille du texte */
}

h2 {
    font-size: 3em; /* Augmente la taille du texte */
    margin-top: 10px;
    text-align: center;
}

header h1 {
  margin: 0; /* Supprime les marges par défaut du h1 */
  width: 200%;
  font-size: 3em; /* Augmente la taille du texte */
}

.image-wrapper {
    position: relative;
    width: 450px;
    height: auto;
}

.image-wrapper img:first-child {
    width: 100%;
    height: auto;
    display: block;
}

.inner-player {
    position: absolute;
    top: 52%; /* Ajuste ici si tu veux plus haut/bas */
    left: 50%;
    transform: translate(-50%, -50%);
    width: 110px; /* Taille de la photo dans la case */
    height: auto;
    /*border-radius: 50%;  Pour une image ronde */
    z-index: 2;
}


</style>