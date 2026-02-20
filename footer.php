<style>
    div.wpcf7-validation-errors, div.wpcf7-acceptance-missing {
    border: 2px solid #f05a24;
    color: #fff;
}
div.wpcf7-mail-sent-ok {
    border: 2px solid #f05a24;
    color: #fff;
}
</style>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="contact-form-header">
                        <h2>Fale conosco</h2>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="20" title="Formulario contato home"]') ?>
                </div>
            </div>
        </div>

        <div class="row footer-localization">
            <div class="col-md-6">
                <div class="footer-localization-head">
                    <hr>
                    <h5>Nossa localização</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15285.846813351565!2d-49.2423077!3d-16.7037993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5eea0bf7c475ae5d!2sRomanhol%20Advogados%20Associados!5e0!3m2!1spt-BR!2sbr!4v1591124962598!5m2!1spt-BR!2sbr" width="80%" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-localization-info">
                    <h5>Onde nos encontrar</h5>
                    <p>
                        Avenida Deputado Jamel Cecílio,
                        2496, Edifício New Business Style, 15º andar,  Jardim Goiás, Goiânia- GO  CEP: 74.810-100 
                    </p>                    
                    <span><a href="https://www.google.com/maps/place/Romanhol+Business+Consulting/@-16.7038255,-49.2424256,21z/data=!4m12!1m6!3m5!1s0x0:0x7a87ed96a66f7d8d!2sEdif%C3%ADcio+New+Business+Style!8m2!3d-16.703832!4d-49.242352!3m4!1s0x935ef1a9f2b5816f:0x27158a895d54150d!8m2!3d-16.7037918!4d-49.2423441" target="_blank">Ver no Mapa</a></span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-linkedin">
                    Siga-nos <div></div> <a href="https://www.linkedin.com/company/romanholadvogados" target="_blank"><i class="fab fa-linkedin"></i></a> 
                    <a href="https://www.instagram.com/romanholadv/" target="_blank"><i class="fab fa-instagram"></i></a> <br>
                    Tel: <span><a href="tel:+556236457000">+ 55 (62) 3645 7000 </a></span>
                    
                    <div style="margin-top: 20px; border-left: 3px solid #d35400; padding-left: 10px;">
                        <span style="color: #bbb; font-size: 0.9em; display: block;">Dúvidas?</span>
                        <a href="mailto:admjudicial@romanhol.com.br" style="color: #d35400; font-weight: bold;">admjudicial@romanhol.com.br</a>
                    </div>
                </div>
            </div>            
        </div>

        <div class="row footer-copy">
            <div class="col-md-12">
                <p>© <script>
                    document.write(new Date().getFullYear());
                </script> Romanhol Advogados - Todos os direitos reservados</p>

            </div>
        </div>
    </div>

</footer>

    <!-- Jquery | Popper.js | Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php wp_footer() ?>
</body>
</html>