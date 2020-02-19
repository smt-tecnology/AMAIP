<!DOCTYPE html>
<html lang="es">
    <?php include('templates/head.php'); ?>
    <?php include('templates/scripts.php'); ?>
    <body class="home home-1 has-block-heading-line">
        <div class="site-wrapper">
            <!-- Header -->
            <?php include('templates/header.php'); ?>
            <!-- Contenido del Sitio -->
            <div class="single-header">
                <div class="container">
                    <h1 class="titulo-nosotros text-center" ><strong>Asociate con nosotros</strong></h1>
                    <h3 class="subtitulo">¿Qué significa ser socio?</h3>
                    <div class="container">
                        <ul class="lista-curso">
                            <li class="item">Que te sientas representado y con apoyo absoluto por una institución que trabaja, permanentemente en busca de mejorar la vida laboral en el mundo del fitnes.</li>
                            <li class="item">Que creas en una formación continua constante y estando siempre a la vanguardia.</li>
                            <li class="item">Que compartas nuestros valores y nos representes con mucho profesionalismo.</li>
                            <li class="item">El costo por Socio es de tan sólo $5000 por año. Y podras comenzar a usar todos nuestros beneficios, como asi también participar de todos nuestros workshop</li>
                            <li class="item">¡Es una misión de la cuál podes ser parte!, no dejes pasar la oportunidad!</li>
                        </ul>
                        <div class="info row text-center">
                            <div class="col-4">
                                <h5>
                                    Si quieres conocer mas acerca de nosotros. <br>
                                    <a href="quienesomos.php">Haz Click Aqui</a>
                                </h5>                                
                            </div>
                            <div class="col-4">
                                <h5>
                                    Contactanos en nuestro WhatsApp. <br> 
                                    <a clas href="https://api.whatsapp.com/send?phone=541164598487&text=Hola!%20Quiero%20recibir%20mas%20info!">Haz Click Aqui</a>
                                </h5>
                            </div>
                            <div class="col-4">
                                <h5>
                                    Conoce los Beneficios por Asociarte. <br>
                                    <a href="beneficios.php">Haz Click Aqui</a>
                                </h5>
                            </div>
                        </div>
                        <a mp-mode="dftl" href="https://www.mercadopago.com/mla/checkout/start?pref_id=273670865-3f1f21f0-f457-43fc-ab16-d62353701e77" name="MP-payButton" class='red-ar-l-ov-none'>ASOCIARME</a>
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
                            window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;
                            })();
                        </script>
                    </div>
                    <div class="entry-interaction entry-interaction--horizontal">
                        <div class="entry-interaction__left">
                            <?php include('templates/boton-redes.php'); ?>
                        </div>
                    </div>   
                </div>    
            </div>
            <!-- Footer -->
            <?php include('templates/footer.php'); ?>
        </div>
    </body>
</html>