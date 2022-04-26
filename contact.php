<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Artstart4you">
  
  <meta name="author" content="Class">

  <title>Artstart4you | Egyesületek</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">
    <!--alert messages start-->
    <div class="col-md-16 mb-md-5">
     <h5 class="text-center"><b> <?php echo $alert; ?></b></h5>
       
    </div>  
<!-- Header Start -->
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- header Nav Start -->
				<nav class="navbar">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.html">
								<img src="images/logo.png" alt="Logo">
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Kezdőlap</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tehetséggondozás <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="portfolio.html">Mesterkurzusok</a></li>
										<li><a href="portfolio-single.html">Pályázatok</a></li>
									</ul>
								</li>
								<!-- <li><a href="service.html">Támogatás</a></li> -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Egyesületek <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="class.html">Class Értékeink <br>Egyesület</a></li>
										<li><a href="muveszeti.html">Művészeti Alap <br>Értetek Egyesület</a></li>
										<!--<li><a href="blog-right-sidebar.html">Artstart4you</a></li>-->
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Média <span class="ion-ios-arrow-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="gallery.html">Fotók</a></li>
										<li><a href="coming-soon.html">Megjelenések</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Kapcsolat</a></li>
							</ul>
							</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
					</div>
				</div>
			</div>
			</header><!-- header close -->
<section class="page-title bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Lépj kapcsolatba velünk</h1>
          <p>Amennyiben üzenni szeretnél nekünk az alábbi adatok megoldásával megteheted</p>
        </div>
      </div>
    </div>
  </div>
</section>
<p></p>
<p></p>
<p></p>
<p></p>
<!-- contact form start -->
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row">
        <form action="" method="post" class="bg-light p-5 contact-form">
              <div class="col-md-6 col-sm-12">
                <label>Teljes név</label>
                <input type="text" name="fullName" class="form-control" required>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Tárgy </label>
                <input type="text" name="phone" class="form-control" required>
              </div>
              <div class="col-md-6 col-sm-12">
                <label>Üzenet</label>
                <textarea cols="30" rows="7" name="message" class="form-control" ></textarea>
              </div>
              <div class="col-md-6 col-sm-12">
                <input type="submit" name="submit" value="Üzenet küldése" class="btn btn-default">
              </div>
            </form>
        </div>
        <div class="contact-box row">
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <h2>Elérhetőségünk</h2>
                    <ul class="address-block">
                        <li>
                            <i class="ion-ios-location-outline"></i>Csíkszereda, Temesvári sugárút 24/28., Románia
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>Email: artstart4u2022@gmail.com
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>Telefon:
                        </li>
                    </ul>
                    <ul class="social-icons">
                        <li>
                            <!--<a href="http://www.themefisher.com"><i class="ion-social-twitter-outline"></i></a>-->
                        </li>
                        <li>
                            <a href="https://www.facebook.com/ArtStart4UEgyesuletek/?ref=page_internal"><i class="ion-social-facebook-outline"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="block">
                    <div class="google-map">
                        <div class="map" id="map_canvas" data-latitude="46.3641472" data-longitude="25.8010542" data-marker="images/marker.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-manu">
					<ul>
						<li><a href="#">Rólunk</a></li>
						<li><a href="contact.php">Kapcsolat</a></li>
						<li><a href="#">Egyesület tagjai</a></li>
                        <li><a href="impress.html">Impresszum</a></li>
						<li><a href="policy.html">Adatvédelem</a></li>
					</ul>
				</div>
        
				<p class="copyright">Copyright 2022 &copy; Design & Developed by <a href="#">Class Értékenk Egyesület</a>. Minden jog fenntartva.	
				</p>
        <div class="section-title text-center"><img src="images/magyarorszag.jpg" alt="Magyarország"></div>
			</div>
		</div>
	</div>
</footer>
    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- filter -->
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>

    <!-- Form Validator -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="plugins/google-map/map.js"></script>

    <script src="js/script.js"></script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.histrory.replaceState(null, null, window.location.href);
    }
  </script> 

    </body>

    </html>