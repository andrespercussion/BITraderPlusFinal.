<!DOCTYPE html>
<html lang="es">
<head>
     <title>BITraderPlus+</title>
    <link rel="stylesheet" href="index2.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    
</head>
<body>
    <div class="contenedor active" id="contenedor">
        <header class="header">
            <div class= "contenedor-logo">
                <button id="boton-menu" class="boton-menu"><i class="fa-solid fa-bars"></i></button>
                <a href="index.php" class="logo"><i class="fas fa-play"></i> <span>BITLive</span></a>
            </div>

            <div class="barra-busqueda">
            <input type="text" placeholder="Buscar">
            <button type="submit"><i class="fa-solid fa-search"></i></button>
        </div>
        
        <div class="botones-header">
            <button><i class="fa-solid fa-upload"></i></button>
            <button><i class="fa-solid fa-th"></i></button>
            <button><i class="fa-solid fa-bell"></i></button>
            <button><a href="cerrar-sesion.php" ><i class="fa-solid fa-right-to-bracket"></i></a></button>
            <a href="#" class="avatar"><img src="media/favicon-32x32.png" alt=""></a> 
        </div>
        
        
        </header>
    
        <nav class="menu-lateral">
            <a href="#" class="active"><i class="fa fa-solid fa-house"></i>inicio</a>
            <a href="#"><i class="fa fa-solid fa-star"></i>suscripcion</a>

<hr>

            <a href="#"><i class="fa fa-solid fa-folder"></i>FRX</a>
            <a href="#"><i class="fa fa-solid fa-folder"></i>HFX</a>
            <a href="#"><i class="fa fa-solid fa-folder"></i>DCX</a>
        </nav>
    
        <interfas class="interfas">

 <!-- Reproductor -->
 <main class="player">
    <section class="main-video">
    <video   src="videos/BITraderPlus+ video portada.mp4" autoplay  ></video>
   
</section>

    <!-- Controles -->
    <nav class="controls">
        <button class="button play">
            <i class="fas fa-play"></i>
        </button>
        <button class="button stop">
            <i class="fas fa-stop"></i>
        </button>
        <input type="range" min="0" max="100" step="0.1" value="0" class="progress">
        <small class="timestamp">
            00:00
        </small>
    </nav>

    
</main>

<!--Lista de Reproduccion-->
<section class="video-playlist">
<h3 class="titulo">Videos Recomendados</h3>
<div class="indicadores"></div>

  <div class="video-playlist-carrusel" >
 <!--button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
 <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button-->
    <div class="videos"></div>
       </div>
     </section>
    
     
     
     <script src="interfas.js"></script>
    <script src="https://kit.fontawesome.com/f7caa02850.js" crossorigin="anonymous"></script>
        </body>
        </html>
    