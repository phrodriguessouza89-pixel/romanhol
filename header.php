<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romanhol Advogados</title>
    <!-- Bootstrapp CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style/css/style.css">
    
    <style>
        /* FORÇA BRUTA: Oculta barra do Google */
        iframe.goog-te-banner-frame {
            display: none !important;
            width: 0px !important;
            height: 0px !important;
            visibility: hidden !important;
        }
        .goog-te-banner-frame {
            display: none !important;
            visibility: hidden !important;
        }
        body {
            position: static !important;
            top: 0px !important;
        }
        
        /* Oculta tooltips e destaques */
        .goog-tooltip, .goog-tooltip:hover {
            display: none !important;
        }
        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important; 
            box-shadow: none !important;
        }
        
        /* Oculta o widget original do Google */
        #google_translate_element {
            display: none;
        }
    </style>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
    <div class="body-mask"></div>
    <!-- Header All Site
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Logo 
                <div class="col-6 col-md-3">
                    <div class="header-logo">
                        <img src="<?php bloginfo('template_url'); ?>/imgs/logos/romanhol-branca.png" alt="" class="img-fluid">
                    </div>
                </div>
                <!-- Menu Desk 
                <div class="col-6 col-md-9">
                    <div class="header-nav">
                        <button class="mobile-icon">
                            <i class="fas fa-bars"></i>
                        </button>
                        <nav class="desk-menu">
                            <ul>
                                <li><a href="https://localhost/romanhol/">Home<span></span></a></li>
                                <li><a href="https://localhost/romanhol/a-romanhol-advogados/">A Romanhol<span></span></a></li>
                                <li><a href="https://adm.romanhol.adv.br">Romanhol Administração Judicial<span></span></a></li>
                                <li><a href="https://localhost/romanhol/areas-de-atuacao/">Atuação<span></span></a></li>
                                <li><a href="https://localhost/romanhol/equipe/">Equipe<span></span></a></li>
                                <li><a href="https://localhost/romanhol/artigos/">Artigos<span></span></a></li>
                                <li><a href="https://localhost/romanhol/carreira/">Carreira<span></span></a></li>
                                <!-- <li><a href="">Arquivos<span></span></a></li> 
                                <li><a href="https://localhost/romanhol/contato/">Contato<span></span></a></li>
                                <!-- <li><a href="">En <i class="fas fa-caret-down"></i></a></li> 
                            </ul>
                        </nav>
                    </div>
                </div>                
            </div>
        </div>
        
    </header>-->


    
    <header>

        <div class="container">
            <div class="row">
                <!-- Menu Icon -->
                <div class="col-3 col-md-4">
                    <div class="header-menu-icon">
                        <button class="mobile-icon">
                            <img src="<?php bloginfo('template_url'); ?>/imgs/logos/menu-icon.png" alt="" class="img-fluid">
                        </button>
                    </div>
                </div>
                <!-- Logo -->
                <div class="col-6 col-md-4 text-center">
                    <div class="header-logo">
                        <a href="<?php echo get_site_url(); ?>/">
                            <img src="<?php bloginfo('template_url'); ?>/imgs/logos/romanhol-branca.png" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- Login Icon -->
                <div class="col-3 col-md-4 text-right">
                    <div class="header-login">
                        <!-- <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/imgs/logos/login.png" alt="" class="img-fluid">
                            <span>Login</span>
                        </a> -->
                        <ul>
                            <!-- SISTEMA DE TRADUÇÃO GOOGLE (Via Cookie - Método Infalível) -->
                             <div id="google_translate_element" style="display:none;"></div>
                             
                             <!-- Script de Limpeza Forçada da Barra -->
                             <script type="text/javascript">
                                 // Função que roda repetidamente para garantir que a barra suma
                                 (function(){
                                     var intervalId = setInterval(function(){
                                         // Busca o iframe maldito
                                         var frame = document.querySelector('iframe.goog-te-banner-frame');
                                         var frame2 = document.querySelector('.goog-te-banner-frame');
                                         
                                         if(frame) {
                                             frame.style.display = 'none';
                                             frame.style.width = '0px';
                                             frame.style.height = '0px';
                                             frame.style.visibility = 'hidden';
                                             frame.parentNode.removeChild(frame);
                                         }
                                         if(frame2) {
                                             frame2.style.display = 'none';
                                             frame2.parentNode.removeChild(frame2);
                                         }
                                         
                                         // Força o corpo para o topo
                                         document.body.style.top = '0px';
                                         document.body.style.marginTop = '0px';
                                         document.body.style.position = 'static';
                                     }, 200); // Roda a cada 200ms
                                     
                                     // Para o intervalo após 5 segundos para economizar recurso
                                     setTimeout(function(){ clearInterval(intervalId); }, 5000);
                                 })();
                             </script>

                             <script type="text/javascript">
                                 function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'pt', 
                                        includedLanguages: 'en,pt', 
                                        autoDisplay: false
                                    }, 'google_translate_element');
                                }
                            </script>
                            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

                            <script type="text/javascript">
                                function romanholChangeLang(lang) {
                                    // Método via Cookie (Força bruta para garantir funcionamento)
                                    var currentCookie = document.cookie;
                                    var domain = window.location.hostname;
                                    
                                    if (lang === 'pt') {
                                        // Limpa cookies de tradução para voltar ao original
                                        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                                        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=" + domain;
                                        document.cookie = "googtrans=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=." + domain;
                                    } else {
                                        // Define cookie para forçar inglês (/pt/en)
                                        document.cookie = "googtrans=/pt/en; path=/;";
                                        document.cookie = "googtrans=/pt/en; path=/; domain=" + domain;
                                        document.cookie = "googtrans=/pt/en; path=/; domain=." + domain;
                                    }
                                    
                                    // Recarrega a página para aplicar
                                    window.location.reload();
                                }
                            </script>

                            <!-- Bandeiras de Controle -->
                            <li>
                                <a href="javascript:void(0)" onclick="romanholChangeLang('pt');" title="Português">
                                    <img src="<?php bloginfo('template_url'); ?>/imgs/pt.png" alt="Português" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="romanholChangeLang('en');" title="English">
                                    <img src="<?php bloginfo('template_url'); ?>/imgs/eng.png" alt="English" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-mobile">
            <div class="container">
                <div class="row">
                    <!-- Menu Icon -->
                    <div class="col-3 col-md-4">
                        <div class="header-menu-icon">
                            <button class="mobile-icon">
                                <img src="<?php bloginfo('template_url'); ?>/imgs/logos/menu-close.png" alt="" class="img-fluid">
                            </button>
                        </div>
                    </div>
                    <!-- Logo -->
                    <div class="col-6 col-md-4 text-center">
                        <div class="header-logo">
                            <a href="">
                                <img src="<?php bloginfo('template_url'); ?>/imgs/logos/romanhol-branca-adm.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- Login Icon -->
                    <div class="col-3 col-md-4 text-right">
                        <div class="header-login">
                            <!-- <a href="">
                            <img src="<?php bloginfo('template_url'); ?>/imgs/logos/login.png" alt="" class="img-fluid">
                            <span>Login</span>
                        </a> 
                        <ul>
                            <li><a href=""><img src="<?php bloginfo('template_url'); ?>/imgs/pt.png" alt="" class="img-fluid"></a></li>
                            <li><a href=""><img src="<?php bloginfo('template_url'); ?>/imgs/eng.png" alt="" class="img-fluid"></a></li>
                        </ul>-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <nav class="menu">
                            <ul>
                                <li><a href="<?php echo get_site_url(); ?>/">Home<span></span></a></li>
                                <li><a href="<?php echo get_site_url(); ?>/a-romanhol-advogados/">A Romanhol<span></span></a></li>
                                <li><a href="http://adm.romanhol.adv.br/">Administração Judicial<span></span></a></li>
                                <li><a href="<?php echo get_site_url(); ?>/areas-de-atuacao/">Atuação<span></span></a></li>
                                <li><a href="<?php echo get_site_url(); ?>/equipe/">Equipe<span></span></a></li>
                                <li><a href="<?php echo get_site_url(); ?>/artigos/">Artigos<span></span></a></li>
                                <li><a href="<?php echo get_site_url(); ?>/carreira/">Carreira<span></span></a></li>
                                <!-- <li><a href="">Arquivos<span></span></a></li> -->
                                <li><a href="<?php echo get_site_url(); ?>/contato/">Contato<span></span></a></li>
                                <!-- <li><a href="">En <i class="fas fa-caret-down"></i></a></li> -->
                                

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col">
                        <div class="menu-info">
                            <div>
                                <a href="tel:+556236457000" target="_blank">
                                    <span><i class="fas fa-phone"></i></span>
                                    <p>+55 (62) 3645-7000</p>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.google.com/maps/place/Romanhol+Advogados+Associados/@-16.703799,-49.242308,13z/data=!4m5!3m4!1s0x0:0x5eea0bf7c475ae5d!8m2!3d-16.7037993!4d-49.2423077?hl=pt-BR" target="_blank">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <p class="mapa-web">Avenida Deputado Jamel Cecílio, 2496, Edifício New Business Style, 15º andar, Jardim Goiás, Goiânia-GO, CEP: 74.810-100</p>
                                    <p class="mapa-mobile">Ver no mapa</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="banner-social">
                Siga-nos <div></div> <a href="https://www.linkedin.com/company/romanholadvogados" target="_blank"><i class="fab fa-linkedin"></i></a> <a href="https://www.instagram.com/romanholadv/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </header>