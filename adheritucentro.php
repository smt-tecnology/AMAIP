<!DOCTYPE html>
<html lang="es">
    <?php include('templates/head.php'); ?>
    <?php include('templates/scripts.php'); ?>
    <body class="home home-1 has-block-heading-line">
        <div class="site-wrapper">
            <!-- Header -->
            <?php include('templates/header.php'); ?>
            <!-- Contenido del sitio -->
            <div class="single-header">
                <div class="container">
                    <!-- Descripción -->
                    <h3 style="text-align: center;">Adherí tu centro:</h3>
                    <h3 style="text-align: center;">¿Qué significa adherir tu centro?</h3>
                    <ul style="margin-left: 50px;">
                        <li>
                            Si tenés un centro dónde enseñas las disciplinas que AMAIP certifica, el asociarte te brinda la posibilidad de ser partícipe en los múlples beneficios que te damos para que tu organización crezca; ya sea comercialmente, atrayendo clientes
                            como profesionalmente, a partir de compartir nuestra experiencia y nuestros permisos legales e institucionales aprobados por entidades nacionales.
                        </li>
                        <li>
                            No sólo compartiremos con vos nuestra experiencia en la formación de tu centro sino también te ayudaremos a contactar clientes y a potenciar tus clases a través de los múltiples beneficios.
                        </li>
                        <li>
                            La idea es que juntos abramos la puerta de nuestros centros para darles a nuestros alumnos la confianza y seguridad de ser formados por instituciones completamente reglamentadas y avaladas por organismos nacionales. Seremos parte de
                            la misma legalidad, tendrás tu carnet y tus certificados como socio de AMAIP.
                        </li>
                        <li>
                            El costo por adherirse es de tan sólo $5000 por año, sujeto a cambios.
                        </li>
                        <li>
                            ¡Es una misión de la cuál podes ser parte!, no dejes pasar la oportunidad!
                        </li>
                    </ul>
                    <h3>Entérate más sobre nosotros en <a href="quienesomos.php">quiénes somos</a>.</h3>
                    <h3>Contáctate para más información a nuestro <a href="https://api.whatsapp.com/send?phone=541164598487&text=Hola!%20Quiero%20recibir%20mas%20info!">Whatsapp</a><br>
                    </h3>
                    <h3>Conocé los <a href="beneficios.php">beneficios</a> por adherír tu centro</h3>
                    <!-- Boton de pago -->
                    <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=273670865-3f1f21f0-f457-43fc-ab16-d62353701e77" name="MP-payButton" class='red-ar-l-ov-none'>PAGAR</a>
                    <script type="text/javascript">
                        (function() {
                            function $MPC_load() {
                                window.$MPC_loaded !== true && (function() {
                                    var s = document.createElement("script");
                                    s.type = "text/javascript";
                                    s.async = true;
                                    s.src = document.location.protocol + "//secure.mlstatic.com/mptools/render.js";
                                    var x = document.getElementsByTagName('script')[0];
                                    x.parentNode.insertBefore(s, x);
                                    window.$MPC_loaded = true;
                                })();
                            }
                            window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window
                                .addEventListener('load', $MPC_load, false)) : null;
                        })();
                    </script>
                    
                    <br> <br>
                    
                    <!-- Botones de fanpages y apps -->
                    <div class="entry-interaction entry-interaction--horizontal">
                        <div class="entry-interaction__left">
                            <div class="post-sharing post-sharing--simple">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/amaipilates/" class="sharing-btn sharing-btn-primary facebook-btn facebook-theme-bg" data-toggle="tooltip" data-placement="top" title="Facebook">
                                            <i class="mdicon mdicon-facebook"></i>
                                            <span class="sharing-btn__text">FanPage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/114445681829327789068?hl=es" class="sharing-btn googleplus-btn googleplus-theme-bg" data-toggle="tooltip" data-placement="top" title="Google+">
                                            <i class="mdicon mdicon-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <?php include('templates/footer.php'); ?>
        </div>
    </body>
</html>