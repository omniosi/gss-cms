<?php require_once( '../../couch/cms.php' ); ?>
<?php $current_page = 'p-three' ?>
<cms:template title='GSS Pre-Clinical Three'>
	<cms:editable name='column1' label='First Column' desc='First column of logos' type='group' />
	<cms:editable name='logo_one' label='Logo One' desc='First image in column one' width='135' group='column1' type='image' />
	<cms:editable name='logo_two' label='Logo Two' desc='Second image in column one' width='135' group='column1' type='image' />
	<cms:editable name='logo_three' label='Logo Three' desc='Third image in column one' width='135' group='column1' type='image' />
	<cms:editable name='logo_four' label='Logo Four' desc='Fourth image in column one' width='135' group='column1' type='image' />
	<cms:editable name='logo_five' label='Logo Five' desc='Fifth image in column one' width='135' group='column1' type='image' />
	<cms:editable name='logo_six' label='Logo Six' desc='Sixth image in column one' width='135' group='column1' type='image' />

	<cms:editable name='column2' label='Second Column' desc='Second column of logos' type='group' />
	<cms:editable name='logoB_one' label='Logo One' desc='First image in column two' width='135' group='column2' type='image' />
	<cms:editable name='logoB_two' label='Logo Two' desc='Second image in column two' width='135' group='column2' type='image' />
	<cms:editable name='logoB_three' label='Logo Three' desc='Third image in column two' width='135' group='column2' type='image' />
	<cms:editable name='logoB_four' label='Logo Four' desc='Fourth image in column two' width='135' group='column2' type='image' />
	<cms:editable name='logoB_five' label='Logo Five' desc='Fifth image in column two' width='135' group='column2' type='image' />
	<cms:editable name='logoB_six' label='Logo Six' desc='Sixth image in column two' width='135' group='column2' type='image' />



</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="left" class="p3" data-role="page">

<?php include '../../inc/header.php'; ?>

		<div class="container pagecontent">
			<div class="main">

				<span class="contentnav left col">
	 				<a href="contact-resources.php" data-transition="slide" data-direction="reverse">
						<i class="icon-chevron-left icon-4x"></i>
					</a>
				</span>

				<div class="col col-main">
					<ul class="logobox">
						<li class="col-two">
							<ul>
								<li><img src="<cms:show logo_one />" width="135"></li>
								<li><img src="<cms:show logo_two />" width="135"></li>
								<li><img src="<cms:show logo_three />" width="135"></li>
								<li><img src="<cms:show logo_four />" width="135"></li>
								<li><img src="<cms:show logo_five />" width="135"></li>
								<li><img src="<cms:show logo_six />" width="135"></li>
							</ul>
						</li>
					</ul>
					<ul class="logobox">
						<li class="col-two">
							<ul>
								<li><img src="<cms:show logoB_one />" width="135"></li>
								<li><img src="<cms:show logoB_two />" width="135"></li>
								<li><img src="<cms:show logoB_three />" width="135"></li>
								<li><img src="<cms:show logoB_four />" width="135"></li>
								<li><img src="<cms:show logoB_five />" width="135"></li>
								<li><img src="<cms:show logoB_six />" width="135"></li>
							</ul>
						</li>
					</ul>
					<div class="content">
						<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext'>
						<h1>People We’ve Helped Get New Business Cards</h1>
						<p>Senior Vice President, Respiratory/Immunology</p>
						<p>Chief Scientific Officer, Oncology</p>
						<p>Chief Scientific Officer, CNS/Neuro</p>
						<p>Chief Technology Officer</p>
						<p>Senior Vice President, Pharmaceutical Sciences & Manufacturing</p>
						<p>Senior Vice President, Safety Strategy</p>
						<p>Senior Vice President, Regulatory Affairs & Quality</p>
						<p>Vice President Process Sciences (Biologics)</p>
						<p>Vice President Process Development (Biologics)</p>
						<p>Vice President, In Vivo Pharmacology</p>
						<p>Vice President, Regulatory Affairs & Quality</p>
						<p>Associate Vice President, Product Value Enhancement</p>
						<p>Associate Vice President, Sterile Technical Operations</p>
						<p>Executive Director, Site Lead, Oncology Discovery</p>
						<p>Director, Reliability Engineering & Maintenance</p>
						<p>Director, Preclinical Quantitative Pharmacology</p>
						<p>Senior Vice President, Safety Strategy</p>
						<p>Senior Vice President, Regulatory Affairs & Quality</p>
						<p>Vice President Process Sciences (Biologics)</p>
						<p>Vice President Process Development (Biologics)</p>
						<p>Vice President, In Vivo Pharmacology</p>
						<a href="#">more</a>
						</cms:editable>

					</div>
				</div>
				<div class="col secondary">

					<div class="col col-side">

						<cms:editable name='content_sidebar_column_1' label='Sidebar Column One' desc='Sidebar Text Column One' type='richtext'>
						<h1>And People We Owe Thank-you Notes</h1>
						<p class="quotes">“We determined after seeing a few candidates that our priorities were different than we had first envisioned. With GSS, we made adjustments and brought in the right person for the job soon after.”
							<em class="credits">--Henry Blair,<br>Former CEO at Dyax</em>
						</p>
						<p class="quotes">“I’ve known Brian Harrington for a long time. His insights have been helpful in helping us prioritize which candidates deserve a second look.”
							<em class="credits">--SVP at Pfizer</em>
						</p>
						<p class="quotes">“I wished we’d had room to hire three of the candi- dates we interviewed. GSS was awesome.”
							<em class="credits">--Christian Steele</em>
						</p>
						<p class="quotes">“We determined after seeing a few candidates that our priorities were different than we had first envisioned. With GSS, we made adjustments and brought in the right person for the job soon after.”
							<em class="credits">--Henry Blair,<br>Former CEO at Dyax</em>
						</p>
						</cms:editable>

					</div>
				</div>
			</div>
		</div>

<?php include '../../inc/footer.php'; ?>

	</div> <!-- page 3 (left) -->

</body>

</html>
<?php COUCH::invoke(); ?>