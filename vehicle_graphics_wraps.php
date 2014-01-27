<?php require_once( 'couch/cms.php' );

$title = "Vehicle Graphics"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">
<cms:editable name='Title' type='richtext'>
	<h2>
			Vehicle Graphics		</h2>
</cms:editable>

<cms:editable name='Content' type='richtext'>
<p>Vehicle Graphics are another very common form of signage. Vehicle graphics provide mobile advertising for your business. Whether you are driving somewhere or simply parked, vehicle graphics is a low cost advertising alternative and effective way to “get your name out there”. Advertising your business and its products and services, 24/7, vehicle graphics speaks volumes about who you are and what you do.</p>
<p><em><strong>View Details On: </strong></em></p>
<ul>
<li><a href="/index.php/vehicle-graphics-wraps/full-vehicle-wraps"><strong>Full Vehicle Wraps</strong></a></li>
<li><a href="/index.php/vehicle-graphics-wraps/partial-vehicle-wraps"><strong>Partial Vehicle Wraps</strong></a></li>
<li><a href="/index.php/vehicle-graphics-wraps/cut-vinyl"><strong>Cut Vinyl</strong></a></li>
<li><a href="/index.php/vehicle-graphics-wraps/clearview-window-film"><strong>Clearview Window Film</strong></a></li>
</ul> 
</cms:editable>
</div>

	</td>
	</tr>
	</table>

<?php require_once('inc/footer.php'); ?>
	
<?php COUCH::invoke(); ?>