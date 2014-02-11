<?php require_once( 'couch/cms.php' ); ?>
<?php $current_page = 'Home Page' ?>
<cms:template title='GSS home'>
	<cms:editable name='preclinical_areas' label='Preclinical Areas' desc='3 Preclinical Areas of Expertise' type='group' />
	<cms:editable name='clinical_areas' label='Clinical Areas' desc='3 Clinical Areas of Expertise' type='group' />
</cms:template>
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
							<cms:editable name='intro_text' type='richtext'>
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
									<p><cms:editable name='preclinical_area1' label="Pre-Clinical Area 1" desc='Pre-Clinical Area 1 of 3' group='preclinical_areas' type='text'>Discovery</cms:editable></p>
									<p><cms:editable name='preclinical_area2' label="Pre-Clinical Area 2" desc='Pre-Clinical Area 2 of 3' group='preclinical_areas' type='text'>Pre Clinical</cms:editable></p>
									<p><cms:editable name='preclinical_area3' label="Pre-Clinical Area 3" desc='Pre-Clinical Area 3 of 3' group='preclinical_areas' type='text'>Product Development</cms:editable></p>
							</div>
						</div>
						<a href="select/preclinical/areas-expertise.php" data-transition="slide" data-direction="reverse"><div id="left-btn" class="button"><i class="icon-chevron-left icon-4x"></i></div></a>
					</div><div class="main-right">
						<div id="main-icon-right">
							<div id="main-text-right" class="more">
									<p><cms:editable name='clinical_area1' label="Clinical Area 1" desc='Clinical Area 1 of 3' group='clinical_areas' type='text'>Clinical Sciences</cms:editable></p>
									<p><cms:editable name='clinical_area2' label="Clinical Area 2" desc='Clinical Area 2 of 3' group='clinical_areas' type='text'>Medical Affairs</cms:editable></p>
									<p><cms:editable name='clinical_area3' label="Clinical Area 3" desc='Clinical Area 3 of 3' group='clinical_areas' type='text'>Drug safety</cms:editable></p>
							</div>
						</div>
						<a href="select/clinical/areas-expertise.html" data-transition="slide"><div id="right-btn" class="button"><i class="icon-chevron-right icon-4x"></i></div></a>
					</div>
				</div>
			</div>

		<!-- </div> -->
	</div> <!-- home page -->

	<script type="text/javascript" src="js/script.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>