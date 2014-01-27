<?php require_once( 'couch/cms.php' );

$title = "Quick Reference"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>


<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Resources / Support - Quick Reference		</h2>
</cms:editable>

<cms:editable name='Content' type='richtext'>
<p class="headline">&nbsp;</p>
<p>We pride ourselves on being a state-of-the-art company, but we also know how frustrating technology can be. It seems like the minute you’ve mastered a computer program, the software company launches an updated version with new features to learn. If you've ever experienced this first hand, you know what we're talking about. Fortunately, we've compiled a comprehensive arsenal of helpful hints and resources for overcoming these technology-induced obstacles.</p>
<p>&nbsp;</p>
<p>You'll also find useful software to download, marketing tips and many other items that will make it easier to do business with our company.</p>
<p><span class="content"></span></p> 
</cms:editable>
</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>