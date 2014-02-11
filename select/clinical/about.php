<?php require_once('../../couch/cms.php'); ?>
<?php $current_page = 'c-two' ?>
<cms:template title='GSS Clinical Two'>

	<cms:editable name='content_image' label='Image' desc='Acompanying image for main text' width='130' type='image' />

</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="right" class="p2" data-role="page">

<?php include '../../inc/header.php'; ?>

		<div class="container">
			<div class="main">
				<div class="col col-main">

					<img class="illus" src="<cms:show content_image />" alt="" width="130">

					<div class="content">

						<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext'>
						<h1>It’s not the size of the dog in the fight, it’s the size of the fight in the dog.</h1>
						<p>And because we’re small and scrappy, we can be a little more flexible and adaptable when it comes to your search, be it start-up or big and global. We’re consultative and partner with our clients to define and employ a winning strategy. We have great relationships across the industry, and we draw on these to build your team.</p>
						<h1>What you see is what you get.</h1>
						<p>And what you get is a team of ethical, hard-working, seasoned professionals dedicated to your search. Your GSS con- tact is actively involved in every stage in the process, from defining core requirements to successful offer negotiation.</p>
						<h1>A Milestone fee structure.</h1>
						<p>Pay-for-performance. And that keeps our team committed to speed, efficiency, accuracy and results. We are focused on providing an array of diverse, qualified and motivated candidates that meet the specific needs of your company.</p>
						<h1>Intelligence That’s Established.</h1>
						<p>Our vast network within the market makes for a recruitment strategy attuned to adaptations and evolutions within the market.</p>
						<h1>The Guys Who Get It.</h1>
						<p>Because of our recognition within the industry we are able to attract the best and brightest from both sides of the fence-- the best in class companies and the leading candidates.</p>
						<h1>We Have a Track Record of Accomplishment which speaks to our credibility.</h1>
						<p>Generally, our customers use us repeatedly. All of this sounds pretty impressive, sure. But sometimes you just got- ta let the numbers speak for themselves: A 90% completion rate versus an industry median of 65%...</p>
					</cms:editable>

					</div>
				</div>
				<div class="col secondary">

					<div class="col col-side">

						<cms:editable name='content_sidebar_column_1' label='Sidebar Column One' desc='Sidebar Text Column One' type='richtext'>
						<h1>Who Makes GSS, GSS</h1>
						<p>Christian Camp –<br>
							Bio to follow<a class="more" href="#">more</a></p>
						<p>Brian Harrington -<br>
							Bio to follow<a class="more" href="#">more</a></p>
						<p>Spencer Weneck –<br>
							Bio to follow<a class="more" href="#">more</a></p>
						<p>Peter Tomassi –<br>
							Bio to follow<a class="more" href="#">more</a></p>
						</cms:editable>

					</div>
				</div>

				<span class="contentnav right col">
					<a href="projects-testimonials.php" data-transition="slide">
						<i class="icon-chevron-right icon-4x"></i>
					</a>
				</span>

			</div>
		</div>

		<?php include '../../inc/footer.php'; ?>

	</div> <!-- page 2 (right) -->

</body>

</html>
<?php COUCH::invoke(); ?>