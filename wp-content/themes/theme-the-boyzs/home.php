<?php
/**
 * Template Name: Accueil
 * Template Post Type: page
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des pages à afficher ?
if ( have_posts() ) : 
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while ( have_posts() ) : the_post(); 
?>

    <article>
        <h2><?php the_title(); // Titre de la page ?></h2>
        <?php the_content(); // Contenu principal de la page ?>
    </article>

    <section name="swiper">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="text">
                        <div class="fondnoir"></div>
                        <div class="text1"><p>NOUS PROTÉGEONS VOS DROITS</p></div>
                        <span>CIVILS</span>
                        <div class="text2">DEPUIS 1963</div>
                        <div class="boutonhero">
                            <button class="swiper-button">DONNER</button>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/medias/4manholdinghands.PNG" alt="Los Angeles">
                </div>
                <div class="swiper-slide">
                    <div class="text">
                        <div class="fondnoir"></div>
                        <div class="text3">NOUS COMPTONS SUR VOUS</div>
                        <p>De nombreuses recrues sont recherchées pour marquer collectivement des points pour les droits humains.</p>
                        <div class="boutonhero">
                            <button>DEVENIR MEMBRE</button>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/medias/image_article_jmartel_livre_20240709-731x1118.png" alt="Chicago">
                </div>
                <div class="swiper-slide">
                    <div class="text">
                        <div class="fondnoir"></div>
                        <div class="text3">SOYEZ INFORMÉS</div>
                        <p>Consulter les publications de la LDL permet d'alimenter les discussions sur les enjeux des droits humains!</p>
                        <div class="boutonhero">
                            <button>S'INFORMER</button>
                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/medias/image_carnet_droit_humain_generique_20231006-448x448.png" alt="New York">
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section>
        <p class="h1" id="textcarte">À la une</p>
        <hr id="barrecarte">
        <div class="section-card">
            <a href="headline.html">
                <article class="section-card__card">
                    <img src="<?php echo get_template_directory_uri(); ?>/medias/nouvelle1.png" alt="nouvelle #1">
                    <div class="section-card__container">
                        <h4>Pour l'interdiction des interpellations policières une bonne fois pour toute.</h4>
                        <h5>4 septembre 2024 | Communiqués</h5>
                    </div>
                </article>
            </a>
            <a href="">
                <article class="section-card__card">
                    <img src="<?php echo get_template_directory_uri(); ?>/medias/nouvelle2.png" alt="nouvelle #2">
                    <div class="section-card__container">
                        <h4>Le Canada doit stopper de façon urgente l'exportation d'armes à destination d'Israël</h4>
                        <h5>27 août 2024 | Lettre ouverte</h5>
                    </div>
                </article>
            </a>
            <a href="">
                <article class="section-card__card">
                    <img src="<?php echo get_template_directory_uri(); ?>/medias/nouvelle3.png" alt="nouvelle #3">
                    <div class="section-card__container">
                        <h4>Haine et panique morale au croisement de la transphobie et de la domination adulte.</h4>
                        <h5>27 août 2024 | Lettre ouverte</h5>
                    </div>
                </article>
            </a>
        </div>
        <div class="cardbouton">
            <button class="section-card__button">Voir plus</button>
        </div>
    </section>

    <section style="background-color: white;">
        <h1>Nos luttes</h1>
        <hr>
        <div class="lutte-wrapper">
            <div class="lutte-wrapper__left-section">
                <ul class="lutte-wrapper__fight-list">
                    <li><a href="#">Droits des personnes en détention <span class="arrow">→</span></a></li>
                    <li><a href="https://the-boyzs.tim-momo.com/lutte/droits-des-peuples-autochtones/">Droits des peuples autochtones <span class="arrow">→</span></a></li>
                    <li><a href="https://the-boyzs.tim-momo.com/lutte/racisme-exclusion-sociale-et-laicite-de-letat/">Racisme, exclusion sociale et laïcité <span class="arrow">→</span></a></li>
                    <li><a href="#">Droits des personnes migrantes <span class="arrow">→</span></a></li>
                    <li><a href="#">Environnement et droits humains <span class="arrow">→</span></a></li>
                    <li><a href="https://the-boyzs.tim-momo.com/lutte/droits-humains-et-covid-19/">Droits à la santé <span class="arrow">→</span></a></li>
                </ul>
            </div>
            <div class="lutte-wrapper__right-section">
                <img src="<?php echo get_template_directory_uri(); ?>/medias/Pngtree-three fists up raised high_9140570 1.png" alt="Lutte image">
            </div>
        </div>
        <div class="lutte-wrapper__see-more">
            <button>Voir plus</button>
        </div>
    </section>

    <section>
        <p class="h1" id="texttemoi">Témoignages</p>
        <hr id="barretemoi">
        <div class="testimony-wrapper">
            <article class="testimony-wrapper__testimonial" id="left">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <p class="testimony-wrapper__source">Source d'où provient le témoignage</p>
            </article>
            <article class="testimony-wrapper__testimonial right-align" dir="rtl">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <p class="testimony-wrapper__source right-align">Source d'où provient le témoignage</p>
            </article>
            <article class="testimony-wrapper__testimonial" id="left">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <p class="testimony-wrapper__source">Source d'où provient le témoignage</p>
            </article>
        </div>
    </section>

<?php 
    endwhile; // Fermeture de la boucle
else : 
    get_template_part('partials/404'); // Affiche partials/404.php si aucun contenu
endif;

get_footer(); // Affiche footer.php 
