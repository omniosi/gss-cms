<cms:form action='' method='post' id='contact_form'>
 <div>
  <label for="fullname">Name</label>
  <cms:input type="text" name="fullname" id="fullname" required='1' /><br>
  <cms:if k_error_name>
   <p id='name_error'>Enter a name</p><br>
  </cms:if>
  
  <label for="email">Email</label>
  <cms:input type="text" name="email" id="email" required='1' validator='email' /><br>
  <cms:if k_error_email>
   <p id='email_error'>Enter a valid email address</p><br>
  </cms:if>
  
  <label for="phone">Phone</label>
  <cms:input type="text" name="phone" id="phone" required='1' validator='integer | exact_len=10' /><br>
  <cms:if k_error_phone>
   <p id='phone_error'>Enter a valid phone number</p><br>
  </cms:if>
  
  <label for="message">Message</label>
  <cms:input type="textarea" name="message" id="message" required='1'></cms:input>
  <cms:if k_error_message>
   <p id='message_error'>Enter a message</p><br>
  </cms:if>

  <cms:if k_success>
   <p id='mail_success'>Thank you. We'll get back to you as soon as possible.</p>

   <cms:send_mail from=k_email_from to=k_email_to subject='Feedback from your site'>
    The following is an email sent by a visitor to your site:
    <cms:show k_success />
   </cms:send_mail>
  </cms:if>
  <!-- <p id='mail_fail'>Sorry, an error has occurred. Please try again later.</p> -->

  <div id='button'>
   <input type='submit' id='send_message' value='Submit' />
  </div>
 </div>
</cms:form>
