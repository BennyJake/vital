<?php require_once( 'couch/cms.php' );

$title = "Questions & Answers"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>



<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Resources / Support - Questions &amp; Answers		</h2>
</cms:editable>
<cms:editable name='Content' type='richtext'>
<p>Have you ever had a question and either didn't know where to find the answer or were too afraid to ask? If so, you've come to the right place.</p>
<p>As the name would suggest, this section is a compilation of answers to the questions our clients commonly ask. Just start by following one of the links below.</p>
<p>If you think of question that is not on this list, please click on "Ask a Question" and let us know what you're thinking. If enough people ask the same question, we'll post the answer in this section for future visitors.</p>
<ol class="collection_toc">
<li><a href="/resources/faqs.html#item2999736">How long does it take for you to complete my order?</a></li>
<li><a href="/resources/faqs.html#item2999737">What is a "proof"?</a></li>
<li><a href="/resources/faqs.html#item2999738">Why do I need to look at a proof if I've already given you everything I need to have done?</a></li>
<li><a href="/resources/faqs.html#item2999739">Do I still need to approve a proof if I bring my work in on disk?</a></li>
<li><a href="/resources/faqs.html#item2999740">How do I go about getting an estimate from you?</a></li>
</ol><ol class="content_collection_items spacing_double">
<li id="item2999736">
<div class="collection_item_label">How long does it take for you to complete my order?</div>
<div class="collection_item_description">
<p>There really isn't a short answer to this question. Some jobs can be produced in minutes and some may take weeks or months. Let us know when you need your job completed and we'll let you know if it can be done. We go to great lengths to meet your most stringent demands.</p>
</div>
</li>
<li class="Alt" id="item2999737">
<div class="collection_item_label">What is a "proof"?</div>
<div class="collection_item_description">
<p>A proof is a way of ensuring that we have set your type accurately and that everything is positioned according to your requirements. Typically, we will produce a proof which will be sent to you online or printed on paper which can be viewed in our store or delivered to you in person.</p>
<p>On multiple color jobs, we can produce a color proof on our color output device to show an accurate representation of the final product.</p>
</div>
</li>
<li id="item2999738">
<div class="collection_item_label">Why do I need to look at a proof if I've already given you everything I need to have done?</div>
<div class="collection_item_description">
<p>We employ human beings to produce your work and, last time we checked, humans are not perfect. Your approval on the final proof is assurance that you have looked over every aspect of our work and approve it as accurate. It benefits everyone if errors are caught in the proofing process rather than after the job is completed and delivered.</p>
</div>
</li>
<li class="Alt" id="item2999739">
<div class="collection_item_label">Do I still need to approve a proof if I bring my work in on disk?</div>
<div class="collection_item_description">
<p>It may seem like a proof wouldn't be needed in this case but it really is. Output devices process digital information using a variety of processing languages. Your approval of the proof which we will provide assures that the output device used has correctly interpreted and processed the information you have provided.</p>
</div>
</li>
<li id="item2999740">
<div class="collection_item_label"><a href="/products_services/estimate.html">How do I go about getting an estimate from you?</a></div>
<div class="collection_item_description">
<p>Well, since you are here, we would suggest you use our online estimate request form. Otherwise, the best way to ensure that we get all the information necessary to do an accurate quote, give us a call and talk with one of our customer service representatives.</p>
</div>
</li>
</ol>
<p><span class="content"></span></p> 
</cms:editable>	
</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>