<!DOCTYPE html>
<!--
   __         _                                          
  /__\__ ___ | | ___                                     
 /_\/ __/ _ \| |/ _ \                                    
//_| (_| (_) | |  __/                                    
\__/\___\___/|_|\___|                                    
                                                         
 _____      _    __  _     ____                          
/__   \__ _(_)   \ \(_)   /___ \_   _  __ _ _ __         
  / /\/ _` | |    \ \ |  //  / / | | |/ _` | '_ \        
 / / | (_| | | /\_/ / | / \_/ /| |_| | (_| | | | |       
 \/   \__,_|_| \___/|_| \___,_\ \__,_|\__,_|_| |_|       
                                                         
   ____ _     ___                                        
  /___ (_)   / _ \___  _ __   __ _                       
 //  / / |  / /_\/ _ \| '_ \ / _` |                      
/ \_/ /| | / /_\\ (_) | | | | (_| |                      
\___,_\|_| \____/\___/|_| |_|\__, |                      
                             |___/                       
   ___ _                _                            _   
  / __\ |__   _____   _(_)_ __   ___ ___  _   _ _ __| |_ 
 / /  | '_ \ / _ \ \ / / | '_ \ / __/ _ \| | | | '__| __|
/ /___| | | |  __/\ V /| | | | | (_| (_) | |_| | |  | |_ 
\____/|_| |_|\___| \_/ |_|_| |_|\___\___/ \__,_|_|   \__|

Justine Frasier - 08/2017

-->

<html>
    <head>
        <title>École de Tai Ji Quan et Qi Gong - Chevincourt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Julee" rel="stylesheet">
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="lib/owlCarousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <script src="lib/owlCarousel/owl.carousel.js" type="text/javascript"></script>
        <link href="lib/owlCarousel/owl.theme.default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <!-- HEADER -->
        <header>
            <div class="row justify-content-center">
                <div class="decoBeforeMenu"><img src="images/ornement-gauche.png" alt="ornement gauche"/></div>
                <ul class="navigation">
                    <li><a href="#sectionOne">Les disciplines</a></li>
                    <li><a href="#sectionTwo">L'école</a></li>
                    <li><a href="#sectionTree">Les horaires</a></li>
                    <li><a href="#map">Contacter l'école</a></li>
                </ul>
                <div class="decoAfterMenu"><img src="images/ornement-droite.png" alt="ornement droite"/></div>
            </div>
        </header>

        <!-- Section 1 : titre + présentation disciplines -->
        <section id="sectionOne">
            <div id="titleSite" class="row">
                <h1 class="col-lg-12">école de tai ji quan et qi gong</h1>
            </div>
            <div id="subtitle" class="row">
                <h2 class="col-lg-12">à Chevincourt</h2>
            </div>
            <div id="disciplineDesc" class="row">
                <div class="col-lg-4 col-xs-12 taijiPresentation">
                    <div class="row">
                        <h3 class="col-lg-12">Tai Ji Quan</h3>
                    </div>
                    <div class="row">
                        <p class="col-lg-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor lectus id dictum scelerisque. Vivamus porta convallis augue, non laoreet arcu pretium ut. Ut vitae tempor orci, eu luctus dui. In pellentesque a enim eget laoreet. Pellentesque mattis erat commodo, sagittis ipsum vel, posuere mi.</p> 
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12 qigongPresentation">
                    <div class="row">
                        <h3 class="col-lg-12">Qi Gong</h3>
                    </div>
                    <div class="row">
                        <p class="col-lg-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor lectus id dictum scelerisque. Vivamus porta convallis augue, non laoreet arcu pretium ut. Ut vitae tempor orci, eu luctus dui. In pellentesque a enim eget laoreet. Pellentesque mattis erat commodo, sagittis ipsum vel, posuere mi.</p> 
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 : présentation prof + carousel photos sorties -->
        <section id="sectionTwo">
            <div class="row titleTrip">
                <img src="images/ornement-gauche.png" alt="ornement gauche"/>
                <h2 id="titleCarousel">L'école</h2>
                <img src="images/ornement-droite.png" alt="ornement droite"/>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xs-12 professorPresentation">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-xs-12 professorPhoto">
                            <img src="images/avatar.png" alt="Professeur Tai ji"/>
                        </div>
                        <div class="col-lg-9 col-md-9 col-xs-12 professorDesc">
                            <h3>Ludovique Cleveque - Professeur</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor lectus id dictum scelerisque. Vivamus porta convallis augue, non laoreet arcu pretium ut. Ut vitae tempor orci, eu luctus dui. In pellentesque a enim eget laoreet. Pellentesque mattis erat commodo, sagittis ipsum vel, posuere mi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row titleTrip">
                <img src="images/ornement-gauche.png" alt="ornement gauche"/>
                <h2 id="titleCarousel">Les sorties</h2>
                <img src="images/ornement-droite.png" alt="ornement droite"/>
            </div>
            <!--CAROUSEL PHOTOS-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xs-12">
                    <div class="owl-carousel">
                        <div class="items">
                            <img src="images/background_zen.jpg" alt=""/>
                        </div>
                        <div class="items">
                            <img src="images/background_zen.jpg" alt=""/>
                        </div>
                        <div class="items">
                            <img src="images/background_zen.jpg" alt=""/>
                        </div>
                    </div>
                    
                    <div class="tripDesc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras auctor lectus id dictum scelerisque. Vivamus porta convallis augue, non laoreet arcu pretium ut. Ut vitae tempor orci, eu luctus dui. In pellentesque a enim eget laoreet. Pellentesque mattis erat commodo, sagittis ipsum vel, posuere mi.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 : Lieu horraires + map + formualire contact -->
        <section id="sectionTree">
            <div class="row titleMap">
                <img src="images/ornement-gauche.png" alt="ornement gauche"/>
                <h2 id="titleMap">Lieu et horaires</h2>
                <img src="images/ornement-droite.png" alt="ornement droite"/>
            </div>
            <div class="row icons justify-content-center">
                <div class="col-lg-2 groupCalendar">
                    <div class="row iconCalendar justify-content-center">
                        <img src="images/calendar.png" alt="calendrier"/>
                    </div>
                    <div class="row txtCalendar justify-content-center">
                        <p>Tous les lundis et jeudis de 18h00 à 20h00</p>
                    </div>
                </div>
                <div class="col-lg-2 groupPin">
                    <div class="row iconPin justify-content-center">
                        <img src="images/pinmap.png" alt="pin map"/>
                    </div>
                    <div class="row txtPin justify-content-center">
                        <p>À la Salle Polyvalente de Chevincourt 60150</p>
                    </div>
                </div>
            </div>

            <section id="map">
                <div class="row justify-content-end">
                    <div class="col-lg-6 col-xs-12 contactForm">
                        <div class="col-lg-7">
                            <div class="contactText">
                                <p>Renseignements et inscription au :</p>
                                <div class="row justify-content-center">
                                    <div class="col-lg-1 col-xs-1 iconPhone"><img src="images/phone.png" alt="phone"/></div>
                                    <div class="col-lg-4 col-xs-6"><p>06.03.22.58.77</p></div>
                                </div>
                                <p>ou</p>
                            </div>
                            <div class="contactFormDetails">
                                <form action="formMail.php" method="post" name="contact" enctype="multipart/form-data">
                                    <input type="text" id="name" name="name" placeholder="Votre nom">
                                    <input id="email" type="text" name="email" placeholder="Votre adresse email">
                                    <textarea id="textMsg" name="textMsg" placeholder="Votre message"></textarea>
                                    <input name="btnSubmit" id="btnSubmit" type="submit" value="Envoyer" class="btnSubmit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- FOOTER -->
        <footer>

            <div class="upFooter">
                <div class="row justify-content-center">
                    <img src="images/logo-ffk.png" alt="logos ffk"/>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <p>Cette école de Tai Ji Quan et Qi Gong est affiliée <br>à la fédération Française de Karaté et des Disciplines Associées.</p>
                    </div>
                </div>
            </div>

            <div class="downFooter">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xs-12">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-3 col-xs-12 about">
                                <h4>à propos</h4>
                                <p>L'école de Tai Ji Quan et Qi Gong de Chevincourt, vous accueilles de 18h00 à 20h00 les lundis et jeudis soirs.</p>
                            </div>
                            <div class="col-lg-4 col-md-3 col-xs-12 sitemap">
                                <h4>plan du site</h4>
                                <ul>
                                    <li><a href="#sectionOne">Les disciplines</a></li>
                                    <li><a href="#sectionTwo">L'école</a></li>
                                    <li><a href="#sectionTree">Les horaires</a></li>
                                    <li><a href="#map">Contacter l'école</a></li>
                                    <li><a href="mentions-legales.html">Mentions légales</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-3 col-xs-12 contactFooter">
                                <h4>contact</h4>
                                <div class="row">
                                    <div class="col-lg-1 col-xs-1 iconPhoneFooter">
                                        <img src="images/phone.png" alt="phone"/>
                                    </div>
                                    <div class="col-lg-10 col-xs-10">
                                        <p>06.03.22.58.77</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1 col-xs-1 iconMapFooter">
                                        <img src="images/pin.png" alt="pin"/>
                                    </div>
                                    <div class="col-lg-10 col-xs-10">
                                        <p>Salle Polyvalente <br>
                                            Rue principale, <br>
                                            60150 Chevincourt</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-xs-12">
                        <p>Tous droits réservés à l'École de Tai Ji Chuan et Qi Gong de Chevincourt - <a href="mentions-legales.html">Mentions légales</a> - Justine Frasier <?php echo strftime('%Y'); ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            $(document).ready(function () {
                /*Marge des ancres*/
                function scroll_if_anchor(href) {
                    href = typeof (href) == "string" ? href : $(this).attr("href");

                    var fromTop = 120;

                    if (href.indexOf("#") == 0) {
                        var $target = $(href);
                        if ($target.length) {
                            $('html, body').animate({scrollTop: $target.offset().top - fromTop});
                            if (history && "pushState" in history) {
                                history.pushState({}, document.title, window.location.pathname + href);
                                return false;
                            }
                        }
                    }
                }

                scroll_if_anchor(window.location.hash);
                $("body").on("click", "a", scroll_if_anchor);

                /*Carousel*/
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                    items: 3,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                });
                $('.play').on('click', function () {
                    owl.trigger('play.owl.autoplay', [1000])
                })
                $('.stop').on('click', function () {
                    owl.trigger('stop.owl.autoplay')
                })
            });
        </script>
    </body>
</html>
