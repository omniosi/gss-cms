<?php require_once('../../couch/cms.php'); ?>
<?php $current_page = 'c-one' ?>
<cms:template title='GSS Clinical One'>

	<cms:editable name='content_image' label='Image' desc='Accompanying image for main text' width='130' type='image' />

</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="right" data-role="page">

		<?php include '../../inc/header.php'; ?>

		<div class="container">

			<div class="main">

				<div class="col col-main">
					<img class="illus" src="<cms:show content_image />" alt="" width="130" />
					<div class="content">
						<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext'>
						<h1>Show us a Haystack, we’ll find your needle...</h1>
						<p>Because we know just how specialized this industry is, we can hone in like no one else. We’re talking about (and to) top tier scientists and researchers and executives at the very highest levels who understand not just the scientific complexities of the industry but the regulatory-speak as well. Walking the walk, talking the talk.</p>
						<p>This is all pretty serious stuff, and, as such, we here at GSS focus on a few key practice areas. These include pre-clinical, clinical, and corporate/functional support lines along with Executive level placement, Board development and strategic Advisory team development. And we do so in a number of fields. You could say, we specialize in areas of specialization.</p>
						<p class="links"><a href="#">Discovery Chemistry</a>, <a href="#">Biology</a>, <a href="#">Small and Large Molecule Pharmacology</a>, <a href="#">Leap Optimization</a>, <a href="#">DMPK including</a>, <a href="#">Toxicology</a>, <a href="#">Pathology</a>, <a href="#">LAR</a>, <a href="#">Quality Assurance</a>, <a href="#">Quality Control</a>, <a href="#">Regulatory Affairs</a>, <a href="#">Pharmaceutical Sciences &amp; Manufacturing</a>, <a href="#">Project Management</a>, <a href="#">Alliance Management</a></p>
					</cms:editable>
					</div>
				</div>
				<div class="col secondary">
					<div class="col-side">
						<cms:editable name='content_sidebar_column_1' label='Sidebar Column One' desc='Sidebar Text Column One' type='richtext'>
						<h1>Therapeutic Expertise:</h1>
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
						</ul>
						</cms:editable>
					</div>
					<div class="col-side">
						<cms:editable name='content_sidebar_column_2' label='Sidebar Column Two' desc='Sidebar Text Column Two' type='richtext'>
						<h1>GSS NEWS</h1>
						<p>This is where all the GSS news is updated. You can click through to see current searches, finished placements, or monthly or quarterly newsletters. it is more in depth than the scroll on the bottom of the page. This is where all the GSS news is updated.<a class="more" href="#">more</a></p>
						<p>This is where all the GSS news is updated. You can click through to see current searches, finished placements, or monthly or quarterly newsletters. it is more in depth than the scroll on the bottom of the page. This is where all the GSS news is updated.<a class="more" href="#">more</a></p>
					</cms:editable>
					</div>
				</div>

				<span class="contentnav right col">
					<a href="about.php" data-transition="slide">
						<i class="icon-chevron-right icon-4x"></i>
					</a>
				</span>
			
			</div>
		</div>

			<?php include '../../inc/footer.php'; ?>

	</div> <!-- page 1 (right) -->

</body>

</html>
<?php COUCH::invoke(); ?>