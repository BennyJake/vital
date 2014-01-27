<?php require_once( 'couch/cms.php' );

$title = "Resources & Support"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Resources / Support		</h2>
</cms:editable>
<cms:editable name='Content' type='richtext'>
<p>Every industry comes with its own language. We want to know everything about your business so we can provide you with the right final product.</p>
<p>And we also want you to feel confident in the processes we employ to get your projects done. So we make every attempt to educate you about our business. We've collected several resources and have posted them here to help you feel comfortable about speaking our language.</p>
<p>Feel free to browse through our FAQs, glossaries, helpful hints about completing projects, marketing ideas, downloadable software archives, and application tips and tricks. If you think of anything we've left out, please let us know.</p>
<p>&nbsp;</p>
<p><strong>See Also:</strong></p>
<ul>
<li>Questions &amp; Answers</li>
<li>Glossary of Terms</li>
<li>Quick Reference</li>
</ul>
<p><span class="content"></span></p> 
</cms:editable>
</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>