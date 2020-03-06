<head>
    <!-- Obtengo el nombre de la página y hago las redirecciones correspondientes -->
    <?php 
        $nombrePagina = $_SERVER['PHP_SELF'];
        if(substr($nombrePagina, -1) == "/"){
            echo '<meta http-equiv="refresh" content="0; url=https://amaip.com.ar' . substr($nombrePagina, 0, -1) . '">';
        }
        if(substr_count($nombrePagina, '.php') > 1){
            echo '<meta http-equiv="refresh" content="0; url=https://amaip.com.ar">';
        }
        $nombrePagina = array_pop(explode('/', $_SERVER['PHP_SELF']));
    ?>
    <!-- Configuraciones -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8">
    <!-- Configuraciones para móvil -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Título de la Página -->
    <title>AMAIP</title>
    <meta name="author" content="Binomio Digital">
    <meta name="author" content="SMT Tecnology">
    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" sizes="32x32" />
    <link rel="icon" href="img/favicon.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png" />
    <meta name="msapplication-TileImage" content="img/favicon.png" />
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500&display=swap" rel="stylesheet">
    <!-- Plugins / Frameworks -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Estilos -->
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Posicionamiento -->
    <?php
        //REGULARES 
        if($nombrePagina == "personaltrainer.php"){
            $description = "¡Realiza una capacitación de PERSONAL TRAINER en AMAIP en 2 meses por tan solo $3500 al mes! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Entrenador Personal - Personal Trainer - Curso de Personal Trainer";
        }
        else if($nombrePagina == "personalfuncional-gualeguaychu.php"){
            $description = "¡Realiza una capacitación de PERSONAL TRAINER y ENTRENAMIENTO FUNCIONAL en AMAIP en 3 meses por tan solo $2100 al mes! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Entrenamiento Funcional - Entrenador Personal - Personal Trainer - Curso de Personal Trainer - Curso de Entrenamiento Funcional";
        }
        else if($nombrePagina == "hatha.php"){
            $description = "¡Realiza una capacitación de HATHA YOGA en AMAIP en 3 meses por tan solo $2800 al mes! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Hatha - Yoga - Hatha Yoga - Curso de Yoga";
        }
        else if($nombrePagina == "reformer.php" || $nombrePagina == "reformerdoblas.php"){
            $description = "¡Realiza una capacitación de PILATES en AMAIP en 3 meses por tan solo $2800 al mes! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Pilates - Reformer - Mat - Pilates Reformer y Mat - Curso de Pilates";
        }
        //INTENSIVAS
        else if($nombrePagina == "box.php"){
            $description = "¡Realiza una capacitación intensiva de BOX FIT en AMAIP en 2 días por tan solo $2500! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Box - Fit - Box Fit - Curso de Box Fit";
        }
        else if($nombrePagina == "entrenamientofuncional.php"){
            $description = "¡Realiza una capacitación intensiva de ENTRENAMIENTO FUNCIONAL en AMAIP en 2 días por tan solo $2800! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Entrenamiento - Funcional - Entrenamiento Funcional - Curso de Entrenamiento Funcional";
        }
        else if($nombrePagina == "indoorbike.php"){
            $description = "¡Realiza una capacitación intensiva de INDOOR BIKE en AMAIP en 2 días por tan solo $2800! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Indoor - Bike - Indoor Bike - Curso de Indoor Bike";
        }
        else if($nombrePagina == "pilatesmat.php"){
            $description = "¡Realiza una capacitación intensiva de PILATES MAT en AMAIP en 2 días por tan solo $2800! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Pilates - Mat - Pilates Mat - Curso de Pilates Mat - Curso de Pilates";
        }
        else if($nombrePagina == "cursodepilates.php"){
            $description = "¡Realiza una capacitación intensiva de PILATES REFORMER en AMAIP en 2 días por tan solo $2800! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Pilates - Reformer - Pilates Reformer - Curso de Pilates Reformer - Curso de Pilates";
        }
        else if($nombrePagina == "streching.php"){
            $description = "¡Realiza una capacitación intensiva de STRETCHING en AMAIP en 2 días por tan solo $2500! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Stretching - Curso de Stretching";
        }
        else if($nombrePagina == "rcp.php"){
            $description = "¡Realiza una capacitación intensiva de RCP en AMAIP en 1 día por tan solo $1000!";
            $keywords = "RCP - Curso de RCP";
        }
        //ONLINE
        else if($nombrePagina == "reformeronline.php"){
            $description = "¡Realiza una capacitación online de PILATES REFORMER en AMAIP en 2 meses por tan solo $3000 al mes! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Pilates - Reformer - Pilates Reformer - Curso de Pilates Reformer - Curso de Pilates";
        }
        else if($nombrePagina == "personaltraineronline.php"){
            $description = "¡Realiza una capacitación online de PERSONAL TRAINER y ENTRENAMIENTO FUNCIONAL en AMAIP en 2 meses por tan solo $3500 al mes! - ÚNICO EN EL MERCADO: Oficial con reglamento de Educación Aprobado (Matricula Cf 2865).";
            $keywords = "Entrenamiento Funcional - Entrenador Personal - Personal Trainer - Curso de Personal Trainer - Curso de Entrenamiento Funcional";
        }
        //POR DEFECTO (INDEX Y DEMÁS)
        else{
            $description = "AMAIP  - Asociación Mutual Argentina de Instructores y Profesores";
            $keywords = "Pilates - Entrenamiento Funacional - Indoor Bike - Yoga - RCP - Personal Trainer - Stretching - Box Fit";
        }
    ?>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">
</head>