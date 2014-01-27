<?php require_once( 'couch/cms.php' );

$title = "Exhibit Displays"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>


<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Exhibit Displays		</h2>
</cms:editable>
<cms:editable name='Content' type='richtext'>
<p>Graphics - Exhibit Displays</p> 
</cms:editable>
</div>


    
</td><td width="1%">



<style type="text/css" >

.box_skitter_large101 {width:400px;height:397px;}



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

var ass101 = jQuery.noConflict();

ass101(document).ready(function(){

ass101('.box_skitter_large101').skitter(

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

<div class="box_skitter box_skitter_large101" >

<ul>

            <li><img src="/images/slides/displays1.jpg" class="directionRight"  /></li><li><img src="/images/slides/displays2.jpg" class="directionRight"  /></li><li><img src="/images/slides/displays3.jpg" class="directionRight"  /></li><li><img src="/images/slides/displays4.jpg" class="directionRight"  /></li><li><img src="/images/slides/displays5.jpg" class="directionRight"  /></li><li><img src="/images/slides/displays6.jpg" class="directionRight"  /></li>
</ul>

</div>

</div>

</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>