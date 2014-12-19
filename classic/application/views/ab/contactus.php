<?php
function dp($info_holderdy,$f,$fsl="")
{
$rt=$f;

if ($fsl == "F" && strtolower($f)== "annual output")
{
$rt="Annual Consumption";
}

foreach ($info_holderdy as &$value) 
{
if (strtolower($value->default_text) == strtolower($f))
{
$rt = $value->dp;
break;
}
}
return $rt;
}
?>
<div id="main_container" class="main_container">
<div> 
<div class="header_text">
<span>
<small><strong><?php echo dp($info_holder,"Contact Abrasives Wordld");?></small></strong>
</span> 
</div> 
<div>
<div style="padding-left:30px;padding-right:30px;padding-top:20px;font-size:14px;line-height:20px">
<form id="fcontact">
  <div>
		<div>
			<label><?php echo dp($info_holder,"First Name");?></label>
			<input type="text" name="fname" class="span3" placeholder="<?php echo dp($info_holder,"Your First Name");?>" required>
			<label><?php echo dp($info_holder,"Last Name")?></label>
			<input type="text" name="lname" class="span3" placeholder="<?php echo dp($info_holder,"Your Last Name");?>">
			<label><?php echo dp($info_holder,"Email Address");?></label>
			<input type="email" name="emailaddress" class="span3" placeholder="<?php echo dp($info_holder,"Your email address");?>" required>
          	<label><?php echo dp($info_holder,"Subject");?></label>
			<select id="subject" name="subject" class="span3">
				<option value="service" selected="selected"><?php echo dp($info_holder,"General Customer Service");?></option>
				<option value="suggestions"><?php echo dp($info_holder,"Suggestions");?></option>
				<option value="product"><?php echo dp($info_holder,"Product Support")?></option>
				<option value="misuse"  <?php if (isset($_GET['subject'])== true and strtolower($_GET['subject']) =="misuse"){ echo "selected";} ?>><?php echo dp($info_holder,"Misuse")?></option>

		</select>
		</div>
		<div>
			<label><?php echo dp($info_holder,"Message");?></label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
		</div>
	
		<button type="submit" class="btn btn-primary"><?php echo dp($info_holder,"Send");?></button>
	</div>
	
	<div id="dycupdate" style="display:none">
	<div style="padding-left:20px;padding-top:5px">
	<img src="<?php echo base_url();?>application/css/images/load.GIF"/>
	
	<?php echo dp($info_holder,"Please wait while account creation is in progress.");?></div>
	</div>
	
</form>
</div>
</div>
</div>
</div>
<script>
var etrace;
$("#fcontact").submit(function(){
$("#dycupdate").show();
$.ajax({url:"contact_us_save",type:"POST",data:$("#fcontact").serialize(),success:function(response) {
etrace=response;
	$("#dycupdate").hide();
	alert("<?php echo "Thanks for contacting us.we will get back to you as soon as possible."?>");
	window.location.href = "<?php echo base_url();?>";
  },error:function(){
 alert("OOPS, something went wrong");
 $("#dycupdate").hide();
 }});

 return false;

});

</script>
