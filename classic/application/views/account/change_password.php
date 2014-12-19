<?php
function dp(& $info_holderdy,$f)
{
$rt=$f;
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
<div style="margin-left:30px;">

<span style="padding-right:20px">
<i class="icon-user"></i><span style="padding-left:5px"><a style="color:white" href="<?php echo base_url();?>account/my_profile"><?php echo dp($info_holder,"Edit my profile");?></a></span></span>
<span style="padding-right:20px"><i class="icon-lock"></i><span style="padding-left:5px"><a  style="color:orange"  href="<?php echo base_url();?>account/change_password"><b><?php echo dp($info_holder,"Change password");?></b></a></span></span>
<span style="padding-right:20px"><i class="icon-edit"></i><span style="padding-left:5px"><a style="color:white" href="<?php echo base_url();?>my_article"><?php echo dp($info_holder,"Article Management System");?></a></span>
</span>
<span style="padding-right:20px"><i class="icon-edit"></i><span style="padding-left:5px"><a style="color:white" href="<?php echo base_url();?>rfq"><b><?php echo dp($info_holder,"Request for quotation");?></b></a></span>
</span>
</div>
</div>
<div id="maincon">
<div style="padding-top:50px">
</div>
<div id="changemypassworddiv">
<form id="changemypassword">
<div class="padme">
<label for="scw_oldpass" class="description"><?php echo dp($info_holder,"What is your current password?");?> *</label>
<input type="password" name="oldpass" id="oldpass" value="" required="required"/>
</div>

<div class="padme">
<label class="description"><?php echo dp($info_holder,"Enter new password")?>*</label>
<input type="password" name="newpass"  id="newpass" value="" required="required"/>
</div>

<div class="padme">
<label class="description"><?php echo dp($info_holder,"Confirm new password")?>*
</label>
<input type="password" name="newpassconfirm"  id="confirmnewpass" value="" required="required"/>
</div>

<div class="padme">
<input type="submit" class="btn" value="<?php echo dp($info_holder,"Change");?>">
</div>
</form>
</div>


<!-- Modal -->
  <div style="display:none" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body" id="svauth">
		<div id="dyen">
		<p><?php echo dp($info_holder,"Please wait, while we update your password.");?></p>
		</div>
		</div>
        <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo dp($info_holder,"Close")?></button>
         </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
</div>
</div>
</div>

<script>
$("#changemypassword").submit(function(){
jQuery('#changemypassworddiv').fadeTo(500,0.2);
$("#dyen").html("<p style='color:gray'><?php echo htmlentities(dp($info_holder,"Please wait, while we update your password."));?></p>");
$("#myModal").modal();
$.ajax({url:"confirm_change_password",type:"POST",data:$("#changemypassword").serialize(),success:function(response) {

	$("#dyen").html(response);
	jQuery('#changemypassworddiv').fadeTo(500,1);

	},error:function(){

  $("#dyen").html(response);
 jQuery('#changemypassworddiv').fadeTo(500,1);
 }});

 return false;

});
</script>
