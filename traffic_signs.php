<?php require_once( 'couch/cms.php' );

$title = "Traffic & Safety Signs"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Traffic &amp; Safety Signs		</h2>
</cms:editable>
<cms:editable name='Content' type='richtext'>
<p>Graphics - Traffic and Safety Signs</p>
<p style="text-align: center;"><img alt="traffic" src="/images/traffic.gif" height="479" width="850" /></p> 
</cms:editable>
</div>
	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>