<?php require_once('../../couch/cms.php'); ?>
<?php $current_page = 'p-four' ?>
<cms:template title='GSS Pre-Clinical Four'>
</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="left" class="p4" data-role="page">

<?php include '../../inc/header.php'; ?>

		<div class="container">
			<div class="main">

			<span class="contentnav left col">
 				<a href="areas-expertise.php" data-transition="slide" data-direction="reverse">
					<i class="icon-chevron-left icon-4x"></i>
				</a>
			</span>

				<div class="col col-main">

					<?php include '../../inc/form.php'; ?> 

					<div class="content">

						<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext'>
						<h1>As a service provider, we are happy to offer the following tools that can be helpful to candidates preparing for success in the job search process:
						</h1>
						<ul>
							<li>
								<h2>Interview checklist</h2>
								<p>
									Learn how to present yourself and sell your skills more persuasively.
								</p>
								<a href="#">Download PDF</a>
							</li>
							<li>
								<h2>Helping you score with an offer</h2>
								<p>
									Find out key responses to questions that will help get you to "yes".
								</p>
								<a href="#">Download PDF</a>
							</li>
							<li>
								<h2>Resigning diplomatically</h2>
								<p>
									Making sure you leave your current job on the best terms possible.
								</p>
								<a href="#">Download PDF</a>
							</li>
							<li>
								<h2>Behavioral interviews</h2>
								<p>
									Behavioral interviews are now employed by all companies. Learn how to share your past experiences in a variety of situations.
 								</p>
								<a href="#">Download PDF</a>
							</li>
						</ul>
						</cms:editable>

					</div>
				</div>
			</div>
		</div>

		<?php include '../../inc/footer.php'; ?>

	</div> <!-- page 4 (left) -->
	<script type="text/javascript">
		
	</script>
</body>

</html>
<?php COUCH::invoke(); ?>