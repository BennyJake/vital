<?php require_once( 'couch/cms.php' );

$title = "Banners & Misc. Signage"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Banners &amp; Misc. Signage		</h2>
</cms:editable>
<cms:editable name='Content' type='richtext'>
<p><strong>Banners &amp; Misc. Signage<br /></strong>Whether it be banners, decals, magnets,&nbsp; reality signs or the special sign for your garage or basement Vital Signs can help you achieve your goals. Banners can be printed on a wide variety of materials including 10 oz 13oz and 18oz vinyl, we can print digitally to include photographs and logos or use </p>
</cms:editable>
	
</div>
    
</td><td width="1%">

<style type="text/css" >

.box_skitter_large103 {width:400px;height:345px;}



.box_skitter {margin-bottom:40px;}


.box_skitter_small {width:200px;height:200px;}

.box_skitter {border:0px solid #000; background:#111111}
.label_skitter h5
{
padding-left: 10px !important;

}
.label_skitter h5,.label_skitter h5 a{

margin:0;


font-family: BebasNeueRegular !important;


font-size:22px !important;

font-weight:normal !important; 

text-decoration:none !important;

padding-right: 5px !important;

padding-bottom:0px !important;

padding-top:5px !important;

color:#fff !important;

line-height:27px !important;

display: block !important;
text-align:left !important;

}

.label_skitter p{

letter-spacing: 0.4px !important;

line-height:15px !important;

margin:0 !important;


font-family: Arial, Helvetica, sans-serif !important;


font-size:10px !important;

padding-left: 10px !important;

padding-right: 5px !important;

padding-bottom:2px !important;

padding-top:0px !important;

color:#fff !important;

z-index:10 !important;

display: block !important;
text-align:left !important;


}


.box_skitter .info_slide {position:absolute;top:100%; margin-top:15px; }

.box_skitter {margin-bottom:40px;}





</style>


<script src="http://vitalsigns.us.com/modules/mod_AutsonSlideShow/js/jquery-1.5.2.min.js" type="text/javascript"></script>


<script src="http://vitalsigns.us.com/modules/mod_AutsonSlideShow/js/jquery.easing.1.3.js" type="text/javascript"></script>

<script src="http://vitalsigns.us.com/modules/mod_AutsonSlideShow/js/jquery.animate-colors-min.js" type="text/javascript"></script>

<script src="http://vitalsigns.us.com/modules/mod_AutsonSlideShow/js/jquery.skitter.min.js" type="text/javascript"></script>

<script type='text/javascript'>

var ass103 = jQuery.noConflict();

ass103(document).ready(function(){

ass103('.box_skitter_large103').skitter(

{

dots: true,

fullscreen: false,

label: true,

interval:2500,

navigation:true,

label:true, 

numbers:false,

hideTools:false,

thumbs: false,

velocity:1,

animation: "directionRight",
numbers_align:'left',


animateNumberOut: {backgroundColor:'#333', color:'#fff'},

animateNumberOver: {backgroundColor:'#000', color:'#fff'},

animateNumberActive: {backgroundColor:'#cc3333', color:'#fff'}

}

);

});	

</script>
<div class="joomla_ass" align="center" >

<div class="border_box">

<div class="box_skitter box_skitter_large103" >

<ul>

            <li><img src="/images/slides/banners1.jpg" class="directionRight"  /></li><li><img src="/images/slides/banners2.jpg" class="directionRight"  /></li><li><img src="/images/slides/banners3.jpg" class="directionRight"  /></li><li><img src="/images/slides/banners4.jpg" class="directionRight"  /></li><li><img src="/images/slides/banners5.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>