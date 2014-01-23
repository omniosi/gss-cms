<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='GSS home' />
<!doctype html>

<html>

<head profile="http://www.w3.org/2005/10/profile">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">
	<title>GSS</title>
	<link href='http://fonts.googleapis.com/css?family=Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css"> -->
  <link rel="stylesheet" href="lib/Font-Awesome/css/font-awesome.min.css">
  <!--[if IE 7]>
	  <link rel="stylesheet" href="lib/Font-Awesome/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="icon" type="image/png" href="img/o_favicon.png"> -->
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile.structure-1.3.2.min.css">
  <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.webticker.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

</head>
	
<body>

	<div id="home" data-role="page">
		<!-- <div data-role="content"> -->
			<div style="min-height: 1928px;" class="homepage">
				<div id="intro">
					<div id="logo" alt="GSS">
						<img src="img/logo_gss_alt.png" alt="GSS logo" width="200" height="200">
						<div id="swap">
							<cms:editable name='main_content' type='richtext'>
							<p id="mission">We are a client-centric, global, retained search firm focused exclsively on the healthcare industry, fancy for “We put the right people with the right companies.”</p>
						</cms:editable>
							<p id="tagline">Search <span>&</span> Employ</p>
						</div>
					</div>
					<a id="direction">
						<p>click</p>
						<p><i class="icon-chevron-down icon-4x"></i></p>
					</a>
				</div>
				<div id="under">
					<div class="main-left">
						<div id="main-icon-left">
							<div id="main-text-left" class="more">
								<p>Discovery</p>
								<p>Pre Clinical</p>
								<p>Product Development</p>
							</div>
						</div>
						<a href="html/preclinical/one.html" data-transition="slide" data-direction="reverse"><div id="left-btn" class="button"><i class="icon-chevron-left icon-4x"></i></div></a>
					</div><div class="main-right">
						<div id="main-icon-right">
							<div id="main-text-right" class="more">
								<p>Clinical Sciences</p>
								<p>Medical Affairs</p>
								<p>Drug safety</p>
							</div>
						</div>
						<a href="html/clinical/one.html" data-transition="slide"><div id="right-btn" class="button"><i class="icon-chevron-right icon-4x"></i></div></a>
					</div>
				</div>
			</div>

		<!-- </div> -->
	</div> <!-- page 1 (home) -->

	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>