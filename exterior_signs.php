<?php require_once( 'couch/cms.php' );

$title = "Exterior Signs"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='exterior_signs_title' type='richtext'>
	<h2>
			Exterior Signs		</h2>
</cms:editable>			
<cms:editable name='exterior_signs_content' type='richtext'>			
<p>&nbsp;</p>
<p><span style="font-size: 14pt; color: #ff0000;"><strong>Ground Mounted Signs</strong></span></p>
<table style="width: 100%;" border="0" cellpadding="7" cellspacing="0">
<tbody>
<tr>
<td align="center" width="25%"><a href="ground_mounted_signs.php"><img alt="ext-signs1" src="img/exterior_signs/ext-signs1.gif" height="144" width="107" /></a><span style="font-size: 12pt;"><br /><span style="font-size: 14pt;"><a href="ground_mounted_signs.php">Pylon Signs</a></span></span></td>
<td align="center" width="25%"><a href="ground_mounted_monument_signs.php"><span style="font-size: 14pt;"><img alt="ext-signs2" src="img/exterior_signs/ext-signs2.gif" height="144" width="115" /></span></a><br /><span style="font-size: 14pt;"><a href="ground_mounted_monument_signs.php">Monument Signs</a></span></td>
<td align="center" width="25%"><a href="post_panel_signs.php"><span style="font-size: 12pt;"><img alt="ext-signs3" src="img/exterior_signs/ext-signs3.gif" height="144" width="135" /></span></a><br /><span style="font-size: 14pt;"><a href="post_panel_signs.php">Post &amp; Panel Signs</a></span></td>
<td align="center" width="25%"></td>
</tr>
</tbody>
</table>
<p><span style="font-size: 14pt;"><span style="color: #ff0000;"><strong>&nbsp; <br /></strong></span></span></p>
<p><span style="font-size: 14pt;"><span style="color: #ff0000;"><strong>Building Signs, Dimensional Letters &amp; Awnings</strong></span></span></p>
<table style="width: 100%;" border="0" cellpadding="7" cellspacing="0">
<tbody>
<tr>
<td align="center" width="25%"><a href="building-signs.php"><img alt="ext-signs5" src="img/exterior_signs/ext-signs5.gif" height="139" width="171" /></a><br /><span style="font-size: 12pt;"><a href="building_signs.php">Wall Mounted Signs</a></span></td>
<td align="center" width="25%"><span alt="ext-signs6" src="/images/ext-signs6.gif" height="139" width="178"></span><span style="font-size: 12pt;"> </span><a href="building_letters.php"><img alt="ext-signs4" src="img/exterior_signs/ext-signs4.gif" height="144" width="213" /></a><br /><span style="font-size: 12pt;"><a href="building_letters.php">llluminated &amp; Non Illuminated Letters </a></span></td>
<td align="center" width="25%"><span style="font-size: 12pt;"><a href="awnings.php"><img alt="ext-signs7" src="img/exterior_signs/ext-signs7.gif" height="139" width="187" /></a></span><br /><span style="font-size: 12pt;"><a href="awnings.php">Awnings</a></span></td>
<td align="center" width="25%"><span style="font-size: 12pt;"></span></td>
<td align="center" width="25%"><span alt="ext-signs8" src="/img/exterior_signs/ext-signs8.gif" height="139" width="49"></span></td>
</tr>
</tbody>
</table>
<p></p> 
</cms:editable>
</div>

<?php require_once('inc/footer.php'); ?>

<?php COUCH::invoke(); ?>