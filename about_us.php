<?php require_once( 'couch/cms.php' );

$title = "About Us"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='about_us_title' type='richtext'>
	<h2>
			About Us		</h2>
</cms:editable>

<cms:editable name='about_us_content' type='richtext'>
<p>Vital Signs is your one-stop, full-service, signage and graphics center, encompassing nearly all types of signs and installation. Whether you need trade show graphics, property management site signs, storefront lighted signs, illuminated channel letters, large banners, digital color signs &amp; banners, changeable message boards, to name a few, or simply a one-time birthday banner...just give us a call.</p>
<p>&nbsp;</p>
<p>Family owned and operated since 1989, Vital Signs offers an extensive product and service line. With 3,000 square feet of office and production space, we are committed to complete customer satisfaction, and on time delivery. We offer the finest, fastest and most professional signage in the area at affordable prices.</p>
<p>&nbsp;</p>
<p>Although many of our signage projects are complex and require a long lead time, we are still able to handle your same-day rush orders. We're known for our quick turnaround and on-time delivery. Our highly trained staff makes every effort to satisfy your needs in terms of price, turnaround, and quality, as we advise you on sign construction, location and design.</p>
<p>&nbsp;</p>
<p>Our customers range from retail stores and real estate developers to manufacturing and service companies. Let us help you with fleet graphics, safety signs, message center signs, menu boards, architectural signage, trade show exhibits, charity events, corporate and building identity and promotional banners. All consultation and estimating is provided free of charge.</p>
<p>&nbsp;</p>
<p>Your signs are your silent sales force that speak volumes about you and your product. We are ready to share our expertise with you to design, produce and install your signs to maximize your exposure and image.</p>
<p>&nbsp;</p>
<p>This site includes many functions that allow you to work with us from your office or home. Of course, it's sometimes still necessary (or preferred) to conduct business in-person. That being said, we've provided the necessary information to locate us or make contact with one of our representatives.</p>
<p>&nbsp;</p>
<p><strong>Vital Signs Inc.</strong><br><strong>2349 Washington Road</strong><br><strong>Washington, IL. 61571</strong></p>
<p><strong>Phone:(309) 745-9361</strong><br><strong>Fax (309) 745-8774</strong><br><strong>E-mail:
<a href="mailto:tim@vitalsigns.us.com">tim@vitalsigns.us.com</a>
</p>
<p>Mon. - Thur. 8 AM - 5 PM Fri. 8 AM - 4:30 PM Saturday by appointment only</p>
<p><a href="http://www.vitalsigns.us.com/index.php/about-us/2-uncategorised/24-about-us-our-staff"> Click Here To Meet Our Staff</a></p> 
</cms:editable>	
</div>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>