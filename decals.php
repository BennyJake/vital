<?php require_once( 'couch/cms.php' );

$title = "Decals"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Decals		</h2>
</cms:editable>
<cms:editable name='Content' type='richtext'>
<p><strong>Decals</strong><br />Personalize, Customize, and Organize! Labels and Decals help your business inside and out. They organize your working space and continously work to promote your business. Are you proud of your business and continuously striving to improve your image? Add a proffesional touch, with Labels and Decals from Vital Signs Inc.</p> 
</cms:editable>	
</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>