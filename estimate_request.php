<?php

require_once( 'php/process_form.php');

require_once( 'couch/cms.php' );

$title = "Exterior Signs"; ?>

<cms:template title="<?php echo $title; ?>" />

<?php require_once('inc/header.php'); ?>

<div class="item-page">

<h2>Estimate Request Form</h2>

<p>Please complete the form below...</p>

</div>


<a name="mid_110"></a>

<div class="foxcontainer" style="width:100% !important;">

<h2>Contact us</h2>


<form enctype="multipart/form-data" class="foxform" action="" method="post">
	<!-- mod_foxcontact 2.0.17 GNU/GPLv3 -->
	<div style="clear:both;">Please complete the form below for an Estimate Request.<br /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">This Is An</label><div style="width:85%;float:left;position:relative;margin-right: 12px !important;" ><select class="fox_dropdown foxtext" name="vital_purpose" style="width:100% !important;" onchange="DropdownAlignValue(this)" ><option value=""></option><option value="Estimate Request">Estimate Request</option><option value="Order Request">Order Request</option></select><span class="outer_dropdown defaultfoxfield" ><span class="inner_dropdown" style="background-image:url(/media/com_foxcontact/images/dropdown-arrow-right.png);background-position:right 0;" id="ddi_41d1c500625952f6c64f72118d7accc9" ></span></span></div>
&nbsp;</div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Your Name <span class="asterisk"></span></label><input class="foxtext" type="text" value="" title="Your Name" style="width:85% !important;" name="vital_name" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Company</label><input class="foxtext" type="text" value="" title="Company" style="width:85% !important;" name="vital_company" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Address</label><input class="foxtext" type="text" value="" title="Address" style="width:85% !important;" name="vital_address" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">City, State & Zip</label><input class="foxtext" type="text" value="" title="City, State & Zip" style="width:85% !important;" name="vital_city,_state,_and_zip" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Phone number</label><input class="foxtext" type="text" value="" title="Phone number" style="width:85% !important;" name="vital_phone_number" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Fax</label><input class="foxtext" type="text" value="" title="Fax" style="width:85% !important;" name="vital_fax" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Preferred Response</label><div style="width:85%;float:left;position:relative;margin-right: 12px !important;" ><select class="fox_dropdown foxtext" name="vital_preferred_response" style="width:100% !important;" onchange="DropdownAlignValue(this)" ><option value=""></option><option value="Email">Email</option><option value="Phone">Phone</option><option value="Fax">Fax</option><option value="Mail">Mail</option></select><span class="outer_dropdown defaultfoxfield" ><span class="inner_dropdown" style="background-image:url(/media/com_foxcontact/images/dropdown-arrow-right.png);background-position:right 0;" id="ddi_4659c114fd0b2a69275d28844649a636" ></span></span></div>
&nbsp;</div>

<div style="clear:both;"><label style="float:left;width:230px !important;">Your Email <span class="asterisk"></span></label><input class="foxtext" type="text" value="" title="Your Email" style="width:85% !important;" name="vital_email" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Artwork Provided Via...</label><div style="width:85%;float:left;position:relative;margin-right: 12px !important;" ><select class="fox_dropdown foxtext" name="vital_artwork_provided_by" style="width:100% !important;" onchange="DropdownAlignValue(this)" ><option value=""></option><option value="On-Line File Transfer">On-Line File Transfer</option><option value="On Disk">On Disk</option><option value="Hard Copy">Hard Copy</option><option value="Film Provided">Film Provided</option><option value="Please Estimate For Design">Please Estimate For Design</option></select><span class="outer_dropdown defaultfoxfield" ><span class="inner_dropdown" style="background-image:url(/media/com_foxcontact/images/dropdown-arrow-right.png);background-position:right 0;" id="ddi_18a1f52a60212ad1121be3c88fc52497" ></span></span></div>
&nbsp;</div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Project Name</label><input class="foxtext" type="text" value="" title="Project Name" style="width:85% !important;" name="vital_project_name" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Project Due Date</label><input class="foxtext" type="text" value="" title="Project Due Date" style="width:85% !important;" name="vital_project_due_date" /></div>
<div style="clear:both;"><label style="float:left;width:230px !important;">Additional Details</label><textarea rows="" cols="" class="foxtext" name="vital_additional_details" title="Additional Details" style="width:85% !important;height:180px !important;" ></textarea></div>

<div style="clear:both;">
<input type="checkbox" class="foxcheckbox" value="Yes" name="agree" id="c_08d93fbaecf5d7538979f2ae27ca1a89" />
<span id="s_08d93fbaecf5d7538979f2ae27ca1a89" onclick="ChangeCheckboxState('_08d93fbaecf5d7538979f2ae27ca1a89');" style="background-position: left 50%;" >I agree with your terms and conditions</span>
</div>
<div style="clear:both;">By submitting this form, you accept our privacy policy.</div>

    <div style="clear:both;"><div id="foxupload_mid_110"><div class="qq-uploader"><div class="qq-upload-drop-area" style="display: none;"><span>Drop files here to upload</span></div><div style="float: left; position: relative; overflow: hidden; direction: ltr;" class="qq-upload-button"><span class="qq-upload-button-caption">You Can Click Here To Upload Your File</span><input type="file" multiple="multiple" name="file" style="position: absolute; right: 0px; top: 0px; font-family: Arial; font-size: 118px; margin: 0px; padding: 0px; cursor: pointer; opacity: 0;"></div><ul class="qq-upload-list"></ul></div></div>
        <script type="text/javascript" language="javascript">createUploader('foxupload_mid_110', 0, 110);</script><noscript>&lt;input type="file" name="foxstdupload" /&gt;</noscript></div>

<div style="clear:both;">
    <input type="submit" value="Send my Message" />
</div>

</form>

</div>

<?php require_once('inc/footer.php'); ?>

<?php COUCH::invoke(); ?>