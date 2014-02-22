<!-- Contact Form -->
<cms:form action='' method='post' id='contact_form'>
        <h3>Contact Form</h3>
    <div class="hr dotted clearfix">&nbsp;</div>
    <ul>                        
        <li class="clearfix"> 
            <label for="name">Name</label>
            <cms:input type='text' name='name' id='name' required='1' />
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

        <div id="button">
        <input type='submit' id='send_message' class="button" value='Submit' data-role="none" />
        </div>
        </li> 
    </ul> 
</cms:form>