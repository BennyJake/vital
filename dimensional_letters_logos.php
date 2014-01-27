<?php require_once( 'couch/cms.php' );

$title = "Dimensional Letters And Logos"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<style type="text/css" >

.box_skitter_large98 {width:750px;height:347px;}



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

var ass98 = jQuery.noConflict();

ass98(document).ready(function(){

ass98('.box_skitter_large98').skitter(

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

<div class="box_skitter box_skitter_large98" >

<ul>

            <li><img src="/images/slides/demletters1.jpg" class="directionRight"  /></li><li><img src="/images/slides/demletters2.jpg" class="directionRight"  /></li><li><img src="/images/slides/demletters3.jpg" class="directionRight"  /></li><li><img src="/images/slides/demletters4.jpg" class="directionRight"  /></li><li><img src="/images/slides/demletters5.jpg" class="directionRight"  /></li><li><img src="/images/slides/demletters6.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>




<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Interior Signs - Dimensional Letters And Logos		</h2>
</cms:editable>

<cms:editable name='Content' type='richtext'>
<p><span style="font-size: 12pt; color: #ff0000;"><strong>Dimensional Letters &amp; Logos</strong></span><br /><span style="font-size: 12pt;">These letters are used for business identification, decoration on office buildings, retail centers, churches, schools and community buildings. These 3D letters/logos are offered in a variety of different materials, such as individually routed metal, plastic and foam, and are installed directly onto the exterior or interior of a building, monument sign, or building façade. Dimensional signage is often the medium of choice for interior signage, primarily used for lobby walls, reception areas, conference rooms or any other interior wall that requires lettering and logos. Colors, materials, and designs are almost endless.</span></p>
<p><span style="font-size: 12pt;"><br /></span></p>
<p><span style="font-size: 12pt;">Please feel free to call us here at Vital Signs Inc. and we can direct you to locations where we have fabricated and installed these types of signs. If you'd like a quote, please click on request quote button to the left to give us your information on form<br />and we will do a free site survey, and recommend the best solution for your space.</span></p>
</cms:editable>

</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>