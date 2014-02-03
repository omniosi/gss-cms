<?php require_once('../../couch/cms.php'); ?>
<?php $current_page = 'p-two' ?>
<cms:template title='GSS Pre-Clinical Two' clonable='1' commentable='1'>

<cms:editable name='content_image' label='Image' desc='Acompanying image for main text' width='130' type='image' />
	<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext' />
	<cms:editable name='content_sidebar_column_1' label='Sidebar Column One' desc='Sidebar Text Column One' type='richtext' />
</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="left" class="p2" data-role="page">

<?php include '../../inc/header.php'; ?>

		<div class="container">
			<div class="main">

			<span class="contentnav left col">
 				<a href="three.html" data-transition="slide" data-direction="reverse">
					<i class="icon-chevron-left icon-4x"></i>
				</a>
			</span>

				<div class="col col-main">

					<img class="illus" src="<cms:show content_image />" alt="" width="130">

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