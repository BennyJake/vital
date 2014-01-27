<?php require_once( 'couch/cms.php' );

$title = "Post Panel Signs"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>


<style type="text/css" >

.box_skitter_large96 {width:750px;height:347px;}



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

var ass96 = jQuery.noConflict();

ass96(document).ready(function(){

ass96('.box_skitter_large96').skitter(

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

<div class="box_skitter box_skitter_large96" >

<ul>

            <li><img src="/images/slides/channel-letters0.jpg" class="directionRight"  /></li><li><img src="/images/slides/channel-letters1.jpg" class="directionRight"  /></li><li><img src="/images/slides/channel-letters2.jpg" class="directionRight"  /></li><li><img src="/images/slides/channel-letters3.jpg" class="directionRight"  /></li><li><img src="/images/slides/channel-letters4.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>




<div class="item-page">
<cms:editable name='building_letters_title' type='richtext'>
	<h2>
			Exterior Signs - Building Letters		</h2>
</cms:editable>

<cms:editable name='building_letters_content' type='richtext'>
<p><strong>Illuminated Letters</strong></p>
<p>If you've ever driven past a strip mall at night, then you're probably familiar with the effectiveness of channel letter signs. One of the most common ways to illuminate your business is through channel letters.</p>
<p>Three of the most common types of channel letters are standard, reverse and open.</p>
<p>&nbsp;</p>
<p><strong>Standard channel letters</strong> have colored acrylic faces illuminated by for the most part Led’s but we can still also do neon tubing if desired, either is housed in a aluminum or plastic letter.</p>
<p>&nbsp;</p>
<p><strong>Reverse channel letters</strong> are often called Halo-lit letters as the lighting comes from behind the letters. The entire letter is made of solid aluminum construction and the back is left open, thereby exposing the light source. The letters are offset mounted, usually 2" away from the wall surface such that the LED or Neon lighting is allowed to shine through the back with a halo effect on the wall surface. By day, the signage can easily be seen and by night, the signage comes to life.</p>
<p>&nbsp;</p>
<p><strong>Open channel letters</strong> aren't really open at all. These signs are manufactured much like the standard channel letter, but utilize clear acrylic faces to expose the raw neon of the sign. At night you can actually see the neon tubing (light source) inset within the aluminum letter, a very interesting alternative to Regular channel letters.</p> 
</cms:editable>	
</div>


    


	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>