<?php
session_start();

require_once('php/simple-php-captcha/simple-php-captcha.php');
require_once('php/php-mailer/PHPMailerAutoload.php');

// Step 1 - Enter your email address below.
$email = 'info@amaip.com.ar';

// If the e-mail is not working, change the debug option to 2 | $debug = 2;
$debug = 0;

if(isset($_POST['emailSent'])) {

	$subject = $_POST['message'];

	// Step 2 - If you don't want a "captcha" verification, remove that IF.
	if (strtolower($_POST['captcha']) == strtolower($_SESSION['captcha']['code'])) {

		// Step 3 - Configure the fields list that you want to receive on the email.
		$fields = array(
			0 => array(
				'text' => 'Telefono',
				'val' => $_POST['name']
			),
			1 => array(
				'text' => 'Correo electronico',
				'val' => $_POST['email']
			),
			2 => array(
				'text' => 'Nombre y Mensaje',
				'val' => $_POST['message']
			),
			
		);

		$message = '';

		foreach($fields as $field) {
			$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
		}

		$mail = new PHPMailer(true);

		try {

			$mail->SMTPDebug = $debug;                            // Debug Mode

			// Step 3 (Optional) - If you don't receive the email, try to configure the parameters below:

			//$mail->IsSMTP();                                         // Set mailer to use SMTP
			//$mail->Host = 'mail.yourserver.com';				       // Specify main and backup server
			//$mail->SMTPAuth = true;                                  // Enable SMTP authentication
			//$mail->Username = 'user@example.com';                    // SMTP username
			//$mail->Password = 'secret';                              // SMTP password
			//$mail->SMTPSecure = 'tls';                               // Enable encryption, 'ssl' also accepted
			//$mail->Port = 587;   								       // TCP port to connect to

			$mail->AddAddress($email);	 						       // Add a recipient

			//$mail->AddAddress('person2@domain.com', 'Person 2');     // Add another recipient
			//$mail->AddCC('person3@domain.com', 'Person 3');          // Add a "Cc" address. 
			//$mail->AddBCC('person4@domain.com', 'Person 4');         // Add a "Bcc" address. 

			$mail->SetFrom($email, $_POST['name']);
			$mail->AddReplyTo($_POST['email'], $_POST['name']);

			$mail->IsHTML(true);                                  // Set email format to HTML

			$mail->CharSet = 'UTF-8';

			$mail->Subject = $subject;
			$mail->Body    = $message;

			// Step 4 - If you don't want to attach any files, remove that code below
			if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
				$mail->AddAttachment($_FILES['attachment']['tmp_name'], $_FILES['attachment']['name']);
			}

			$mail->Send();

			$arrResult = array ('response'=>'success');

		} catch (phpmailerException $e) {
			$arrResult = array ('response'=>'error','errorMessage'=>$e->errorMessage());
		} catch (Exception $e) {
			$arrResult = array ('response'=>'error','errorMessage'=>$e->getMessage());
		}

	} else {

		$arrResult = array ('response'=>'captchaError');

	}

}
?>
<!DOCTYPE html>
<!-- devcode: !production -->
<html>
<!-- endcode -->
<!-- devcode: production -->
<html>
<!-- endcode -->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Contacto AMAIP</title>	

		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="http://amaip.com.ar/">
										<img alt="" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-search hidden-xs">
										
									</div>
									
								</div>
								<div class="header-row">
									<div class="header-nav">
										
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														
														<ul class="dropdown-menu">
															
														
															
														</ul>
													</li>
													
													<li class="dropdown">
														
													
														<ul class="dropdown-menu">
															
														
															
														</ul>
													</li>
													<li class="dropdown">
														
													</li>
													
													<li>
														<a class="" href="http://amaip.com.ar/">
															VOLVER AL INICIO
														</a>
														
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">


				

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="offset-anchor" id="contact-sent"></div>

							<?php
							if (isset($arrResult)) {
								if($arrResult['response'] == 'success') {
								?>
								<div class="alert alert-success" id="contactSuccess">
									<strong>perfecto!</strong> su mensaje se envio con exito.
								</div>
								<?php
								} else if($arrResult['response'] == 'error') {
								?>
								<div class="alert alert-danger" id="contactError">
									<strong>Error!</strong> no se pudo enviar el mensaje.
									<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"><?php echo $arrResult['errorMessage'];?></span>
								</div>
								<?php
								} else if($arrResult['response'] == 'captchaError') {
								?>
								<div class="alert alert-danger" id="contactError">
									<strong>Error!</strong> fallo verificacion.
								</div>
								<?php
								}
							}
							?>

							
							<form id="contactFormAdvanced" action="<?php echo basename($_SERVER['PHP_SELF']); ?>#contact-sent" method="POST" enctype="multipart/form-data">
								<input type="hidden" value="true" name="emailSent" id="emailSent">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Teléfono *</label>
											<input type="text" value="" data-msg-required="Por favor ingrese su telefono." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Correo electronico *</label>
											<input type="email" value="" data-msg-required="Por favor ingrese su email." data-msg-email="ingrese un email valido." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
							
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											
											
										</div>
										
									</div>
								</div>
							
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Nombre y Mensaje *</label>
											<textarea maxlength="5000" data-msg-required="por favor ingrese nombre y mensaje." rows="6" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label>No soy robot *</label>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<div class="captcha form-control">
												<div class="captcha-image">
													<?php
													$_SESSION['captcha'] = simple_php_captcha(array(
														'min_length' => 6,
														'max_length' => 6,
														'min_font_size' => 22,
														'max_font_size' => 22,
														'angle_max' => 3
													));

													$_SESSION['captchaCode'] = $_SESSION['captcha']['code'];

													echo '<img id="captcha-image" src="' . "php/simple-php-captcha/simple-php-captcha.php/" . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
													?>
												</div>
												<div class="captcha-refresh">
													<a href="#" id="refreshCaptcha"><i class="fa fa-refresh"></i></a>
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="ingrese codigo de verificacion." placeholder="ingrese codigo de verificacion." class="form-control input-lg captcha-input" name="captcha" id="captcha" required>
										</div>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" id="contactFormSubmit" value="Enviar Mensaje" class="btn btn-primary btn-lg pull-right" data-loading-text="cargando...">
									</div>
								</div>
							</form>
						</div><br><br>
						<div class="col-md-6">

							<h4 class="heading-primary mt-lg"> <strong>FORMULARIO DE CONTACTO</strong></h4>
							<p class="lead"><strong>AMAIP - ÚNICA INSTITUCION NACIONAL QUE ENTREGA CERTIFICADOS OFICIALES AVALADOS POR I.N.A.E.S</strong>
</p>


							<hr>

							<h4 class="heading-primary">Datos de <strong>Contacto</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Av. Cabildo 34
1426 Buenos Aires.</li>
								<li><i class="fa fa-phone"></i> <strong>Teléfono:</strong> 
+549-11-6-459-8487 <img alt="" width="34" height="34" src="img/whatsapp.fw.png"></li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@amaip.com.ar"> info@amaip.com.ar</a></li>
							</ul><br><br>


							<hr>

							

						</div>
					</div>

				</div>

			</div>

			
		</div><br><br>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "217 Summit Boulevard, Birmingham, AL 35243",
				html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			},{
				address: "645 E. Shaw Avenue, Fresno, CA 93710",
				html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			},{
				address: "New York, NY 10017",
				html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			}];

			// Map Initial Location
			var initLatitude = 37.09024;
			var initLongitude = -95.71289;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 5
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
