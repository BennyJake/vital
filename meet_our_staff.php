<?php require_once( 'couch/cms.php' );

$title = "Our Staff"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='our_staff_title' type='richtext'>
	<h2>
			About Us - Our Staff		</h2>
</cms:editable>
<cms:editable name='our_staff_content' type='richtext'>
<p>Although we're proud of our products, services, and technology, nothing matches the pride we have in our staff. You see, we learned long ago that we're really in the business of building relationships. For that reason, we put a premium on hiring only the most qualified individuals to serve on our team.</p>
<p>&nbsp;</p>
<p>Meet <strong>Tim &amp; Robyn</strong> who are the owners of Vital Signs Inc. Tim schedules and tracks all jobs through our system. consults with customers on complicated sign projects, pulls city permits, prices all electrical signs and will survey your sign needs to make suggestions on the best method of installation and sign materials.<br /> Robyn heads up the engraving department and consults with customers on large and complicated projects on color, ADA and overall layouts.</p>
<p>&nbsp;</p>
<p><strong>Ken</strong>, our Graphic Department Manager, a 12 year sign veteran, Ken specializes in designing all types of signs on the computer including full vehicle wraps. Well versed in Corel Draw, Illustrator, Photo Shop, FlexiSign and Casmate, Ken can take your graphics, logos and type and submit a handsome sign layout for your approval, as well as, prepare a file for digital and vinyl output, metal and electric sign fabrication. You will often see him running the digital printer, laminator and plotter, scheduling jobs, ordering materials and helping clients.</p>
<p>&nbsp;</p>
<p><strong>Beth</strong>, also a 16 year sign veteran, handles the accounting end of the business answers your questions on proofs, invoices, specification changes, job deliveries, schedule updates, consults with clients on sign design, colors, material works some in production and handles some of the phone and counter activity.</p>
<p>&nbsp;</p>
<p><strong>James</strong>, our Shop manager schedules and works to complete and install sign projects . He is well versed in many areas of sign production. He installs dimensional letters, lighted signs, vinyl lettering for vehicles and windows, banners and site signs and is a certified installer of full vehicle wraps. He also consults with customers on right location of signs and methods of install.</p>
<p>&nbsp;</p>
<p><strong>Beca</strong>, works in the engraving department and handles some of the phone questions on proofs, invoices, specification changes, job deliveries, schedule updates and counter activity.</p>
<p>&nbsp;</p>
<p><strong>Josh</strong>, a vehicle wrap artist and sign designer is very versatile! He designs layouts for full wrap vehicles and is a certified installer of full vehicle wraps. He installs vehicle lettering, and assists in many of the production and tough sign assemblies.</p>
<p>&nbsp;</p>
<p>Come in and meet our staff, see our samples, and let us help you design your custom sign.</p>
<p><span class="content"></span></p> 
</cms:editable>
</div

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>