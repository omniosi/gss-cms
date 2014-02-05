<?php require_once( '../../couch/cms.php' ); ?>
<?php $current_page = 'p-three' ?>
<cms:template title='GSS Pre-Clinical Three' commentable='1'>

	<cms:editable name='content_image' label='Image' desc='Accompanying image for main text' width='130' type='image' />
	<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext' />
	<cms:editable name='content_sidebar_column_1' label='Sidebar Column One' desc='Sidebar Text Column One' type='richtext' />

</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="left" class="p3" data-role="page">

<?php include '../../inc/header.php'; ?>

		<div class="container">
			<div class="main">

			<span class="contentnav left col">
 				<a href="four.php" data-transition="slide" data-direction="reverse">
					<i class="icon-chevron-left icon-4x"></i>
				</a>
			</span>

				<div class="col col-main">
					<ul class="logobox">
						<li class="col-two">
							<ul>
								<li class=""><img src="../../img/logobox-amgen.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-lantheus.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-momenta.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-mmrf.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-purdue.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-shire.jpg" width="135" height="70"></li>
							</ul>
						</li>
					</ul>
					<ul class="logobox">
						<li class="col-two">
							<ul>
								<li class=""><img src="../../img/logobox-flexion.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-merck.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-mylan.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-pac-bio.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-roche.jpg" width="135" height="70"></li>
								<li class=""><img src="../../img/logobox-aveo.jpg" width="135" height="70"></li>
							</ul>
						</li>
					</ul>
					<div class="content">
						<cms:show content_main />

					</div>
				</div>
				<div class="col secondary">

					<div class="col col-side">

						<cms:show content_sidebar_column_1 />

					</div>
				</div>
			</div>
		</div>

<?php include '../../inc/footer.php'; ?>

	</div> <!-- page 3 (right) -->

	<script type="text/javascript" src="../../js/script.js"></script>

</body>

</html>
<?php COUCH::invoke(); ?>