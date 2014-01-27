<?php require_once( 'couch/cms.php' );

$title = "Full Vehicle Wraps"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<style type="text/css" >

.box_skitter_large91 {width:714px;height:286px;}



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

var ass91 = jQuery.noConflict();

ass91(document).ready(function(){

ass91('.box_skitter_large91').skitter(

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

<div class="box_skitter box_skitter_large91" >

<ul>

            <li><img src="/images/slides/veh-full-1.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-2.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-3.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-4.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-5.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-6.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-7.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-8.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-9.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-10.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-11.jpg" class="directionRight"  /></li><li><img src="/images/slides/veh-full-12.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>




<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Vehicle Graphics - Full Vehicle Wraps		</h2>
</cms:editable>

<cms:editable name='Content' type='richtext'>
<p><strong>Full Vehicle Wraps</strong></p>
<p>Full Vehicle Wraps Vehicle Wraps done by Vital Signs creates high quality, high resolution car, truck and fleet wraps. With a vehicle wrap, you can maximize the area your advertising reaches by making it move. Vital Signs vehicle wraps are cost effective and can provide your business with a new look. Traditional advertising methods would suggest the more money you spend, the more advertising you will receive; but with a moving vehicle wrap, you only have to pay a one-time fee to advertise and be seen by a whole city just imagine how many prospective customers see your vehicle in one day’s time! The more you drive, the more exposure you business will get.</p>
<p>&nbsp;</p>
<p><strong>Cost!</strong> When purchasing a car, truck or RV wrap from Vital; Signs Inc. for you or your business, it comes down to one thing: how much do you want your business to be seen? With our in house graphic design, we are able to have low, competitive prices and stay within your budget to get your new vehicle or fleet wrap on the street. A study from the American Trucking Association says that 91% of people notice words and pictures when displayed on trucks. By investing in a vehicle wrap, you are greatly widening the area of impact of your advertising. Vehicle wraps by Vital Signs allows your company to advertise more, while spending less.</p> 
</cms:editable>
</div>
	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>