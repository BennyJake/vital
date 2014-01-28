<?php require_once( 'couch/cms.php' );

$title = "Contact Us"; ?>

<cms:template title="<?php echo $title; ?>"/>

<?php require_once('inc/header.php'); ?>

<div class="item-page">

<cms:editable name='contact_us_title' type='richtext'>
	<h2>
			Contact Us		</h2>
</cms:editable>
<cms:editable name='contact_us_content' type='richtext'>
<p style="text-align: center;"><span style="font-size: 24pt; color: #ff0000;">Vital Signs Inc.</span><br><span style="font-size: 18pt;"> 2349 Washington Road&nbsp;•&nbsp;Washington, IL. 61571</span><br><span style="font-size: 18pt;"> Phone: (309) 745-9361&nbsp;•&nbsp;Fax (309) 745-8774</span><br><span style="font-size: 18pt;"> <a href="http://www.vitalsigns.us.com/contact.html">
<a href="mailto:tim@vitalsigns.us.com">tim@vitalsigns.us.com</a></p>
<p>&nbsp;</p>
<p>We want to hear from you. Please submit any questions, suggestions, or general feedback in the space below along with your name and e-mail address. We'll get back to you as soon as we can. Thanks!</p> 
</cms:editable>
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
                <cms:input type='text' name='email' id='email' required='1' validator='email' />
                <div class="clear"></div>
                <cms:if k_error_email>
                    <p id='email_error' class='error' style="display:block">Enter a valid email address</p>
                </cms:if>
            </li>
            <li class="clearfix">
                <label for="subject">Subject</label>
                <cms:input type='text' name='subject' id='subject' required='1' />
                <div class="clear"></div>
                <cms:if k_error_subject>
                    <p id='subject_error' class='error' style="display:block">Enter a message subject</p>
                </cms:if>
            </li>
            <li class="clearfix">
                <label for="message">Message</label>
                <cms:input type='textarea' name='message' id='message' required='1' rows="30" cols="30"></cms:input>
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
                    <input type='submit' id='send_message' class="button" value='Submit' />
                </div>
            </li>
        </ul>
    </cms:form><!-- END Contact Form -->
</div>

<?php require_once('inc/footer.php'); ?>

<?php COUCH::invoke(); ?>