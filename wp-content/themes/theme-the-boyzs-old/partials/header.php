<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Raphael, Maik, Pierre-Luc" content="John Doe">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="/sources/medias/ldl-icone.ico">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href=https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css />
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <div class="posfix">
        <div class="disclaimer" id="disclaimer">
            <p>Ce site est un une refonte dans le contexte d'un projet étudiant.
                <strong><a href="https://liguedesdroits.ca/">Consulter le site original</a></strong>
                
            </p>
            <i class="fa-solid fa-x fa-2x" id="disclaimer-close"></i>
        </div>
        <header class="navbar">
            <div class="navbar-top">
                <div class="navbar-top__searchbar">
                    <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                    <input type="text" placeholder="  RECHERCHER">
                </div>
    
                <img class="logo" src="medias/ldl-logo-horizontale-270.png" alt="logoldl">
    
                <div class="navbar-top__buttons">
                    <button class="cta-button secondary">S'INFORMER</button>
                    <button class="cta-button">DONNER</button>
                </div>
    
            </div>
    
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
            <nav class="navbar-bottom">
                <ul class="nav-links">
                    <li><a class="nav-link__active" href="index.html">ACCUEIL</a></li>
                    <li><a class="nav-link" href="luttes.html">LUTTES</a></li>
                    <li><a class="nav-link" href="team.html">ÉQUIPE</a></li>
                    <li><a class="nav-link" href="news.html">NOUVELLES</a></li>
                    <li><a class="nav-link" href="about.html">À PROPOS</a></li>
                    <li><a class="nav-link" href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
    
            <div class="mobile-menu-overlay">
                <div class="mobile-menu-content">
                    <img class="logo" src="medias/ldl-logo-horizontale-270.png" alt="logoldl">
                    <div class="searchbar">
                        <i class="fa-solid fa-magnifying-glass fa-2x"></i>
                        <input type="text" placeholder="  RECHERCHER">
                    </div>
                    <ul class="nav-links">
                    <li><a class="nav-link" href="index.html">ACCUEIL</a></li>
                    <li><a  href="luttes.html">LUTTES</a></li>
                    <li><a  href="team.html">ÉQUIPE</a></li>
                    <li><a  href="news.html">NOUVELLES</a></li>
                    <li><a  href="about.html">À PROPOS</a></li>
                    <li><a  href="contact.html">CONTACT</a></li>
                    </ul>
                    <div class="buttons">
                        <button class="cta-button secondary">S'INFORMER</button>
                        <button class="cta-button">DONNER</button>
                    </div>
                </div>
            </div>
        </header>
    </div>