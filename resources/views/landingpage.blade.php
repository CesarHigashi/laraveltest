<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesar Higashi - Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css"> 
    <link rel="stylesheet" href="css/templatemo-ocean-vibes.css"> 
<!--
    
TemplateMo 554 Ocean Vibes

https://templatemo.com/tm-554-ocean-vibes

-->
</head>
<body>
    <header class="tm-site-header">
        <h1 class="tm-mt-0 tm-mb-15"><span class="tm-color-primary">CESAR</span> <span class="tm-color-gray-2">HIGASHI</span></h1>
        <em class="tm-tagline tm-color-light-gray">Estudiante de Ingenieria en Informatica</em>
    </header>

    <!-- Video banner 400 px height -->
    <div id="tm-video-container">
        <video autoplay muted loop id="tm-video">
            <source src="video/ocean-sea-wave-video.mp4" type="video/mp4">
        </video>  
        <i id="tm-video-control-button" class="fas fa-pause"></i>
    </div>
    <div class="tm-container">
        <nav class="tm-main-nav">
            <ul id="inline-popups">
                <li class="tm-nav-item">
                    <a href="#intro" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Introducción
                        <i class="fas fa-3x fa-water"></i>
                    </a>                
                </li>
               
                <li class="tm-nav-item">
                    <a href="#about" data-effect="mfp-move-from-top" class="tm-nav-link">
                        Acerca de mí
                        <i class="fas fa-3x fa-tint"></i>
                    </a>
                </li>
            </ul>
            <div class="tm-nav-item">
                <a href="contacto" class="tm-nav-link">
                    Contactame
                    <i class="far fa-3x fa-comments"></i>
                </a>
            </div>
        </nav>

        <!-- Popup itself -->
        <div id="intro" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Regresar a inicio
                <i class="fas fa-times"></i>
            </a>
            <div class="tm-row tm-intro-row">
                <img src="img/jefe.jpg" class="tm-mb-30">
                <div class="tm-col tm-bg-white tm-intro-pad">
                    <h2 class="tm-color-primary tm-page-title">Mi presentación</h2>
                    <div class="tm-row tm-content-row">
                        <div class="tm-col-6 tm-intro-col-l">
                            <p>
                                Me llamo Cesar Higashi. Soy estudiante de Ingeniaría en Informatica en la Universidad de Guadalajara.
                            </p>
                            <p>
                                Tengo muchas ganas de aprender a desarrollar aplicaciones para internet.
                            </p>
                            <p class="tm-mb-0">
                                Tengo conocimientos en Leguajes como C, C++, Python, JavaScript y PHP.
                            </p>
                        </div>
                        <div class="tm-col-6">
                            <p>
                                Otras de mis aficiones son los videojuegos, la musica, las peliculas y seguir aprendiendo.
                            </p>
                            <p>
                                De mis videojuegos favoritos puedo mencionar Halo, Call of Duty, Assassin's Creed y Titanfall.
                                Algunas de mis bandas favoritas son: Pink Floyd, Kiss, Tears for Fears, Supertramp, Fleetwood Mac, etc.
                                Las peliculas que mas me gustan son las de Studio Ghibli.
                                Los temas que mas me gusta esstudiar son sobre ciencias e hisstoria universal.
                            </p>
                            <div class="tm-text-center">
                                <a href="#" class="tm-btn tm-btn-primary mfp-prevent-close tm-btn-next">
                                    Siguiente página
                                </a>
                            </div>                            
                        </div>
                    </div>
                </div>                
            </div> 
        </div>

        <div id="about" class="popup mfp-with-anim mfp-hide tm-bg-gray">
            <a href="#" class="tm-close-popup">
                Regresar a inicio
                <i class="fas fa-times"></i>
            </a>
            <h2 class="tm-color-primary tm-about-col tm-mb-40 tm-page-title">Acerca de mí</h2>
            <div class="tm-row tm-about-row">
                <div class="tm-col tm-about-col tm-about-left">                    
                    <img  src="img/Dory.jpeg" class="tm-mb-30">
                    <p class="tm-mb-40">
                        Comence a estudiar Ingenieria en Informatica en 2020.
                    </p>
                    <p class="tm-mb-40">
                        Comence con pocos conocimientos de programacion en aquel año, pero comence a aprender y a apacionarme mas por lo que iba conociendo.
                    </p>
                    <p class="tm-mn-40">
                        A lo largo de lo que llevo de carrera, (2020B - 2022A) he trabajado en diferentes proyectos que me han ido enseñando mas habilidades.
                    </p>
                </div>
                <div class="tm-col tm-about-col">
                    <p class="tm-mb-40">
                        De los proyectos que he trabajado estan los siguentes:
                        <ul>
                            <li><p>Un sistema de una veterinaria: Fue el primer proyecto 'grande' donde use todos mis conocimientos de POO de alquel entonces</p></li>
                            <li><p>Un proyecto de un 'juego': Fue un proyecto para conocer sobre la escritura de archivos usando lenguajes de programacion</p></li>
                            <li><p>Una pagina web conectada a una base de datos: Fue un proyecto de Base de Datos, donde realice mi primer trabajo con HTML, CSS y una base de datos</p></li>
                            <li><p>Una agenda academica (DORY): Fue una apliacion web desarrollada en equipo, haciendo uso de ReactNative y donde use un poco de JavaScript</p></li>
                        </ul>
                    </p>
                    <p class="tm-mb-40">
                        Estos son los trabajos mas significativos para mi, pues siento que son los trabajos que mas me han enseñado a desarrollar y programar en estos años.
                    </p>
                </div>               
            </div>
        </div>
    </div>

    <footer class="tm-footer">
        <span>Copyright &copy; 2022 CESAR HIGASHI</span>
    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/templatemo-script.js"></script>
</body>
</html>