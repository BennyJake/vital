<?php require_once( 'couch/cms.php' );

$title = "Contact Us"; ?>

<cms:template title="<?php echo $title; ?>" />

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
</div>

<?php require_once('inc/footer.php'); ?>

<?php COUCH::invoke(); ?>