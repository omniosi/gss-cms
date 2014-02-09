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