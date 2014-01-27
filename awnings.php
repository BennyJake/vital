<?php require_once( 'couch/cms.php' );

$title = "Awnings"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<style type="text/css" >

.box_skitter_large106 {width:500px;height:311px;}



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

var ass106 = jQuery.noConflict();

ass106(document).ready(function(){

ass106('.box_skitter_large106').skitter(

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

<div class="box_skitter box_skitter_large106" >

<ul>

            <li><img src="/images/slides/awnings-1.jpg" class="directionRight"  /></li><li><img src="/images/slides/awnings-2.jpg" class="directionRight"  /></li><li><img src="/images/slides/awnings-3.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>




<div class="item-page">
<cms:editable name='awnings_title' type='richtext'>
	<h2>
			Exterior Signs - Awnings		</h2>
</cms:editable>

<cms:editable name='awnings_content' type='richtext'>
<p>Awnings are perhaps one of the best ways to advertise your company or product. A good awning not only improves the architectural appeal of your facilities look; it also has great curb appeal. Additionally, awnings are usually the most cost effective way to get a large amount of advertising up with a limited budget. In other words, you get more bang for your buck with a well designed, attractive awning. Here are some Awnings that Vital Signs has produced we can also manufacture an awning to custom fit any architect's needs; this allows a fluid transition between the awning and the building to which its mounted.</p>
<p>An excellent way to upgrade an awning design is with backlighting. This gives you 24-hour advertising potential -- twice the advertising for a fraction more cost!</p>
<p>&nbsp;</p>
<ul>
<li>&nbsp;</li>
</ul>
<p><img alt="awnings-specs2" src="/images/awnings-specs2.gif" height="619" width="850" /></p> 
</cms:editable>	
</div>


    


	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>