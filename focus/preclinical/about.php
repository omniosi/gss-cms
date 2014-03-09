<?php require_once('../../couch/cms.php'); ?>
<?php $current_page = 'p-two' ?>
<cms:template title='GSS Pre-Clinical Two'>

	<cms:editable name='content_image' label='Image' desc='Acompanying image for main text' width='130' type='image' />

</cms:template>
<!doctype html>

<html>

<?php include '../../inc/head.php'; ?>

<body>

	<div id="left" class="p2" data-role="page">

<?php include '../../inc/header.php'; ?>

		<div class="container pagecontent">
			<div class="main">

			<span class="contentnav left col">
 				<a href="projects-testimonials.php" data-transition="slide" data-direction="reverse">
					<i class="icon-chevron-left icon-4x"></i>
				</a>
			</span>

				<div class="col col-main">

					<img class="illus" src="<cms:show content_image />" alt="" width="130">

					<div class="content">

						<cms:editable name='content_main' label='Main Text' desc='Main Text Area' type='richtext'>
						<h1>We are a boutique, not a behemoth.</h1>
						<p>So we can be a little more flexible and adaptable when it comes to your search, be it start-up or big and global. We’re consultative and partner with our clients to define and employ a winning strategy. We have great relationships across the industry, and we draw on these to build your team.</p>
						<h1>What you see is what you get.</h1>
						<p>And what you get is a team of ethical, hard-working, seasoned professionals dedicated to your search. Your GSS contact is actively involved in every stage in the process, from defining core re- quirements to successful offer negotiation.</p>
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
						<p class="more">Christian Camp –<br>
							Bio to follow</p>
						<p class="more">Brian Harrington -<br>
							Bio to follow</p>
						<p class="more">Spencer Weneck –<br>
							Bio to follow</p>
						<p class="more">Peter Tomassi –<br>
							Bio to follow</p>
						</cms:editable>

					</div>
				</div>
			</div>
		</div>

		<?php include '../../inc/footer.php'; ?>

	</div> <!-- page 2 (left) -->

</body>

</html>
<?php COUCH::invoke(); ?>