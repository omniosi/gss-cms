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

					<?php // include '../../inc/former.php'; ?> 
<!-- Contact Form -->
<cms:form action='' method='post' id='contact_form'>
        <h3>Contact Form</h3>
    <div class="hr dotted clearfix">&nbsp;</div>
    <ul>                        
        <li class="clearfix"> 
            <label for="name">Name</label>
            <cms:input type='text' name='name' id='name' required='1' data-role="none" />
            <div class="clear"></div>
            <cms:if k_error_name>
                <p id='name_error' class='error' style="display:block">Insert a Name</p>
            </cms:if>
        </li> 
        <li class="clearfix"> 
            <label for="email">Email Address</label>
            <cms:input type='text' name='email' id='email' required='1' validator='email' data-role="none" />
            <div class="clear"></div>
            <cms:if k_error_email>
                <p id='email_error' class='error' style="display:block">Enter a valid email address</p>
            </cms:if>
        </li> 
        <li class="clearfix"> 
            <label for="subject">Subject</label>
            <cms:input type='text' name='subject' id='subject' required='1' data-role="none" />
            <div class="clear"></div>
            <cms:if k_error_subject>
                <p id='subject_error' class='error' style="display:block">Enter a message subject</p>
            </cms:if>
        </li> 
        <li class="clearfix"> 
            <label for="message">Message</label>
            <cms:input type='textarea' name='message' id='message' required='1' rows="30" cols="30" data-role="none"></cms:input>
            <div class="clear"></div>
            <cms:if k_error_message>
                <p id='message_error' class='error' style="display:block">Enter a message</p>
            </cms:if>
        </li> 
        <li class="clearfix"> 
        
        <cms:if k_success > 
            <p id='mail_success' class='success' style="display:block">Thank you. I'll get back to you as soon as possible.</p>
            
            <cms:send_mail from=k_email_from to=k_email_to subject='Feedback from your site'>
                The following is an email sent by a visitor to your site:
                <cms:show k_success />
            </cms:send_mail>
        </cms:if>

        <!-- <div id="button"> -->
        <!-- <input type='submit' id='send_message' class="button" value='Submit' /> -->
        <input type='submit' id='send_message' value='Submit' data-role='none' />
        <!-- </div> -->
        </li> 
    </ul> 
</cms:form>



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
	
</body>

</html>
<?php COUCH::invoke(); ?>