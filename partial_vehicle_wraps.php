<?php require_once( 'couch/cms.php' );

$title = "Partial Vehicle Wraps"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<style type="text/css" >

.box_skitter_large89 {width:714px;height:286px;}



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

var ass89 = jQuery.noConflict();

ass89(document).ready(function(){

ass89('.box_skitter_large89').skitter(

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

<div class="box_skitter box_skitter_large89" >

<ul>

            <li><img src="/images/slides/veh-partial-1.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-2.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-3.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-4.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-5.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-6.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-7.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-8.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-9.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-10.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-11.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-partial-13.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>




<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Vehicle Graphics - Partial Vehicle Wraps		</h2>
</cms:editable>

<cms:editable name='Content' type='richtext'>
<p><strong>Partial Vehicle Wraps</strong><br />Let your vehicle be the backdrop. Partial wraps use the same materials and techniques as full wraps, but allow the surface of your vehicle to act as a backdrop for your design. Partial wraps can help you cut down on cost while preserving an eye-catching design.</p> 
</cms:editable>
</div>


    


	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>