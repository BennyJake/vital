<?php require_once( 'couch/cms.php' );

$title = "Engraved Signs And Engraving Services"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<style type="text/css" >

.box_skitter_large100 {width:700px;height:347px;}



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

var ass100 = jQuery.noConflict();

ass100(document).ready(function(){

ass100('.box_skitter_large100').skitter(

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

<div class="box_skitter box_skitter_large100" >

<ul>

            <li><img src="/images/slides/engrave1.jpg" class="directionRight"  /></li><li><img src="/images/slides/engrave2.jpg" class="directionRight"  /></li><li><img src="/images/slides/engrave3.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>




<div class="item-page">
<cms:editable name='engraved_signs_and_engraving_services_title' type='richtext'>
	<h2>
			Interior Signs - Engraved Signs And Engraving Services		</h2>
</cms:editable>

<cms:editable name='engraved_signs_and_engraving_services_content' type='richtext'>
<p><span style="font-size: 12pt;"><strong><span style="color: #ff0000;">Engraved Signs &amp; Engraving Services<br /></span></strong></span>Here at Vital Signs we have a full engraving department where we can produce everything from name badges to ADA room signs, Let us be your experts on how best to fill your requirments on these type of signs. We here at Vital Signs also understand the requirements of signing your locations for the Americans with Disabilities Act, ADA provides those with special needs, access to public places. We’ve studied the law and have determined that, in certain instances, signs When you want a sign to commemorate a person, an event or building, think cast metal! Engineered to last several lifetimes...cast metal will endure the elements and beyond. Custom cast with poured metal (aluminum and bronze), colored with a variety of finishes and textures, mounted in many different ways...and for extra detail, etched metal is your best solution!</p>
<p>&nbsp;</p>
<p><strong>Call us today at Vital Signs Inc. to get your project started or click get quote botton to left and send us your information.</strong><span style="font-size: 12pt;"><strong><span style="color: #ff0000;"><br /></span></strong></span></p> 
</cms:editable>
</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>