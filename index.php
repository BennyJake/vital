<?php require_once( 'couch/cms.php' );

$title = "Home"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>




<div class="blog-featured">

<div class="items-leading">
			<div class="leading-0">
		<cms:editable name='index_title' type='richtext'>	
	<h2>
					Welcome To Vital Signs			</h2>
</cms:editable>






<p><map name="FPMap0"> 
<area href="http://www.vitalsigns.us.com/index.php/exterior-signs" shape="rect" coords="21, 7, 166, 221">
 
<area href="http://www.vitalsigns.us.com/index.php/digital-signs" shape="rect" coords="177, 46, 377, 226">
 
<area href="http://www.vitalsigns.us.com/index.php/banners-displays-traffic" shape="rect" coords="384, 62, 560, 221">
 
<area href="http://www.vitalsigns.us.com/index.php/interior-signs" shape="rect" coords="24, 221, 147, 374">
 
<area href="http://www.vitalsigns.us.com/index.php/vehicle-graphics-wraps" shape="rect" coords="148, 239, 285, 391">
 
<area href="http://www.vitalsigns.us.com/index.php/displays" shape="rect" coords="304, 231, 427, 400">
 
<area href="http://www.vitalsigns.us.com/index.php/traffic-signs" shape="rect" coords="441, 221, 560, 388">
 </map><img src="img/home-signs2.gif" usemap="#FPMap0" height="430" align="right" border="0" width="561"></p>
 <cms:editable name='index_content' type='richtext'>
<p>Welcome to Vital Signs, one of Peoria areas, premiere, full service 
sign companies serving all of Central Illinois since 1989. Whether you 
need A full vehicle wrap, Lighted Sign or a Interior Sign or Banner the 
professionals at Vital Signs are trained in the art of design, the craft
 of sign fabrication and the complex techniques that are often needed to
 install your signs. As you navigate through our site, you’ll probably 
recognize many of the signs we have produced and installed during our 
years of operation.</p>
<p>&nbsp;</p>
<p>We truly do all kinds of signs, we’d like to invite you to view a few
 of our signature products by clicking on the Items you are interested 
in below. By clicking on the Product Gallery tab you can view a even 
more extensive view of signs with details that we have completed. This 
still is only a handful of the many signs we have to offer.</p>
<p>&nbsp;</p>
<p>Please check out our samples on-line or come by to visit Vital Signs 
Inc. complete showroom. We hope you’ll see exactly what you need for 
your important signage project!</p>
</cms:editable>

<div class="item-separator"></div>
		</div>
			</div>



</div>

<?php require_once('inc/footer.php'); ?>

<?php COUCH::invoke(); ?>