<?php require_once( '../../couch/cms.php' ); ?>
<?php $current_page = 'p-one' ?>
<cms:template title='GSS Pre-Clinical One'>

	<cms:editable name='content_image' label='Image' desc='Accompanying image for main text' width='130' type='image' />
	<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext' />
	<cms:editable name='content_sidebar_column_1' label='Sidebar Column One' desc='Sidebar Text Column One' type='richtext' />
	<cms:editable name='content_sidebar_column_2' label='Sidebar Column Two' desc='Sidebar Text Column Two' type='richtext' />

</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>


<body>

<div id="left" data-role="page">

<?php include '../../inc/header.php'; ?>
<!-- 

		<div class="container" data-role="content">
			<div class="menu">
				<li>Areas &amp; Expertise</li>
				<li><a href="two.html">About</a></li>
				<li><a href="three.html">Projects &amp; Testimonials</a></li>
				<li><a href="four.html">Contact &amp; Resources</a></li>
				<li><a href="../../" data-transition="slidedown">Home</a></li>
			</div>
		</div>

		<div class="titlebar">
			<div class="sec-nav">
				<a href="../../" data-transition="slidedown" class="home-btn"></a>
				<div class="title">
					Preclinical & Product Development<br>
					<span>Practice Areas &amp; Theraputic Expertise</span>
				</div>
				
				<span class="sign-post">
					<ul>
						<li>
							preclinical
						</li><a href="../clinical/one.html" data-transition="slide"><li class="righty">
							clinical
						</li></a>
					</ul>
					<span class="spinner"></span>
				</span>
			</div>
		</div> -->

		<div class="container" data-role="content">

			<div class="main">

			<span class="contentnav left col">
 				<a href="two.php" data-transition="slide" data-direction="reverse">
					<i class="icon-chevron-left icon-4x"></i>
				</a>
			</span>

				<div class="col col-main">
					<img class="illus" src="<cms:show content_image />" alt="" width="130">
					<div class="content">
						<cms:show content_main />
<!-- 						<h1>It’s not rocket science...</h1>
						<p>But it’s pretty close. The Pharma/Biotech industry is a science-based marketplace, and a complex and highly specialized one at that. We’re talking about (and to) top-tier scientists and researchers and executives at the very highest levels who understand not just the scientific complexities of the industry but the regulatory-speak as well.</p>
						<p>This is all pretty serious stuff, and, as such, we here at GSS focus on a few key practice areas. These include pre-clinical, clinical, and corporate/functional support lines along with Executive level placement, Board development and strategic Advisory team development. And we do so in a number of fields. You could say, we specialize in areas of specialization.</p>
						<p class="links"><a href="#">Discovery Chemistry</a>, <a href="#">Biology</a>, <a href="#">Small and Large Molecule Pharmacology</a>, <a href="#">Leap Optimization</a>, <a href="#">DMPK including</a>, <a href="#">Toxicology</a>, <a href="#">Pathology</a>, <a href="#">LAR</a>, <a href="#">Quality Assurance</a>, <a href="#">Quality Control</a>, <a href="#">Regulatory Affairs</a>, <a href="#">Pharmaceutical Sciences &amp; Manufacturing</a>, <a href="#">Project Management</a>, <a href="#">Alliance Management</a></p> -->
					</div>
				</div>
				<div class="col secondary">
					<div class="col-side">
						<cms:show content_sidebar_column_1 />
<!-- 						<h1>Therapeutic Expertise:</h1>
						<ul>
							<li>Oncology</li>
							<li>Hematology</li>
							<li>Inflammation</li>
							<li>Rheumatology</li>
							<li>Dermatology</li>
							<li>Immunology</li>
							<li>Allergy</li>
							<li>Respiratory</li>
							<li>Pulmonary</li>
							<li>Infectious Disease</li>
							<li>Endocrinology</li>
							<li>Metabolism – 
								<ul>
									<li>Bone</li>
									<li>Diabetes</li>
									<li>Obesity</li>
								</ul>
							</li>
							<li>Vaccines</li>
							<li>Cardiovascular</li> 
							<li>Neurosciences</li>
							<li>Gastroenterology</li> 
							<li>Urology</li>
							<li>Nephrology</li> 
							<li>Transplantation</li> 
							<li>Pain</li>			
						</ul> -->
					</div>
					<div class="col-side">
						<cms:show content_sidebar_column_2 />
<!-- 						<h1>GSS NEWS</h1>
						<p>This is where all the GSS news is updated. You can click through to see current searches, finished placements, or monthly or quarterly newsletters. it is more in depth than the scroll on the bottom of the page. This is where all the GSS news is updated. You can click through to see current <a class="more" href="#">more</a></p>
						<p>This is where all the GSS news is updated. You can click through to see current searches, finished placements, or monthly or quarterly newsletters. it is more in depth than the scroll on the bottom of the page. This is where all the GSS news is updated.<a class="more" href="#">more</a></p> -->
					</div>
				</div>
			</div>
		</div>

<?php include '../../inc/footer.php'; ?>
<!-- 			<div class="footer">

				<ul id="rssticker">
					<li id='item1'>European and US groups agree to share data but with restrictions</li>
					<li id='item2'>GSK reviews policies for sales staff in China</li>
					<li id='item3'>GSK admits wrongdoing in China</li>
					<li id='item4'>
						My Fourth News Item
					</li>
					<li id='item5'>
						My Fifth News Item
					</li>
					<li id='item6'>
						My Sixth News Item
					</li>
					<li id='item7'>
						My Seventh News Item
					</li>
					<li id='item8'>
						My Eighth News Item
					</li>
					<li id='item9'>
						My Ninth News Item
					</li>
					<li id='item10'>
						My Tenth News Item
					</li>
				</ul>

				<div class="contact">
					<ul class="address">
						<li>GSS</li>
						<li>4 Grand Street</li>
						<li>Bethel, CT 06801</li>
						<li>Tel: 203.798.8100</li>
						<li>Fax: 203.798.2000</li>
						<li><a href="mailto:info@searchgss.com">info@searchgss.com</a></li>
					</ul>
					<ul class="share">
						<li><a href="#"><i class="icon-rss-sign icon-3x"></i></a></li>
						<li><a href="#"><i class="icon-facebook-sign icon-3x"></i></a></li>
						<li><a href="#"><i class="icon-twitter-sign icon-3x"></i></a></li>
						<li><a href="#"><i class="icon-linkedin-sign icon-3x"></i></a></li>
					</ul>
					<p class="legal">© 2010 Global Search Solutions, LLC. All rights reserved.</p>
				</div>
			</div> -->
	</div> <!-- page 2 (left) -->

	<script type="text/javascript" src="../js/script.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>