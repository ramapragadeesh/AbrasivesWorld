<?php
function dp($info_holderdy,$f)
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
<span>
<small><strong><?php echo dp($info_holder,"Abrasive World Account Login");?></small></strong>
</span> 
</div> 

<div id="maincon">

<div style="margin-left:30px;padding-top:30px">



<div>
<div>
<div class="section" id="section1">
<div class="login-form">
  <h1><?php echo dp($info_holder,"Login")?></h1>
    <p><?php echo dp($info_holder,"You already have an account? Great! Login here.");?></p>
    <div>
      <form id="lform" class="form-wrapper-01" method="post" action="signin">
              <input class="inputbox email" type="text" placeholder="<?php echo dp($info_holder,"Email id");?>" name="scw_orgemail"/>
              <input name="scw_orgpass" class="inputbox password" type="password" placeholder="<?php echo dp($info_holder,"Password");?>" />
          </br/>
          <br/>
            <p><a href="#" class="button" style="text-decoration:none" id="login_link"><?php echo dp($info_holder,"Login");?> <i class="icon-paper-plane"></i></a></p>
        </form>
              <p><?php echo dp($info_holder,"Forget password? It's ok.")?> <a class="scroll" href="#section3"><?php echo dp($info_holder,"Recover here");?> &raquo;</a></p>
    </div>
	
	<div id="dycupdate" style="display:none">
	<div style="padding-left:20px;padding-top:5px">
	<img src="<?php echo base_url();?>application/css/images/load.GIF"/>
	
	<?php echo dp($info_holder,"Please wait while we check your credentials.");?>
	</div>
	</div>
	
    <hr />
   
    <p><?php echo dp($info_holder,"Don't have an account?");?> <a class="scroll" href="<?php echo base_url();?>account/newaccount"><?php echo dp($info_holder,"Register Now");?> &raquo;</a></p>
</div>
</div>
  <!-- Modal -->
  <div style="display:none" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo dp($info_holder,"Abrasivesworld Account");?></h4>
        </div>
        <div class="modal-body" id="svauth">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo dp($info_holder,"Close");?></button>
         </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<div class="section" id="section3">
<div class="login-form">
<form id="rform">
  <h1><?php echo dp($info_holder,"Lost password?");?></h1>
    <p><?php echo dp($info_holder,"Ohk, don't panic. You can recover it here.");?></p>
    <div>
      <form class="form-wrapper-01">
              <input id="" class="inputbox email" type="text" name="remailid" id="remailid" placeholder="<?php echo dp($info_holder,"Email id");?>" />
              <br/>
              <br/>
            <p><a href="#"  id="rp_link" class="button" style="text-decoration:none"><?php echo dp($info_holder,"Send me");?> <i class="icon-paper-plane"></i></a></p>
        </form>
    </div>
    <hr />
      <p><?php echo dp($info_holder,"You remember your Password? Brilliant!");?></p>
    <p><a class="scroll" href="#section1">&laquo; <?php echo dp($info_holder,"Login here");?></a></p>
</form>
	</div>
</div>



</div>
</div>
</div>
</div>
</div>
</div>

<style>
.section {
text-align:center;
margin: 0 auto;
width:500px;
}
.login-form,.forgot-pwd {
  background:#fff;
  border-radius: 4px;
  padding:30px;
  text-align:center;
  width:400px;
}
form-wrapper-01 {
  margin: 0;
  padding: 10px 0;
}
.form-wrapper-01 .inputbox {
  border: 1px solid #eaedf2;
  border-radius:3px;
  height: 20px;
  padding: 10px 0 10px 32px;
  width: 10%;
  outline:none;
  margin-bottom:10px;
  font-family: inherit;
}
.login-form .form-wrapper-01 .inputbox {
  width:88%;
}
.form-wrapper-01 .name {
  background:#eaedf2 url(../images/user.png) 10px 13px no-repeat;
}
.form-wrapper-01 .email {
  background:#eaedf2 url(../images/email.png) 10px 15px no-repeat;
}
.form-wrapper-01 .password {
  background:#eaedf2 url(../images/password_2.png) 10px 10px no-repeat;
}
.form-wrapper-01 a.button {
  background: none repeat scroll 0 0 #14B9D5;
  border: none;
  border-radius: 4px 4px 4px 4px;
  color: #FFFFFF;
  cursor: pointer;
  font-family: inherit;
  font-size: 15px;
  font-weight: 700;
  padding: 10px 25px;
}
.form-wrapper-01 .button:hover {
  background:#0e778a;
}
.form-wrapper-01 a.button > i {
  font-size:20px;
}
</style>

<script>
<?php
if($vplink== true)
{
echo "var uredirect='".str_replace("'","",$vlink)."';";
}
else
{
echo "var uredirect='my_profile';";
}
?>

$("#login_link").click(function(){
$("#dycupdate").show();
$.ajax({url:"signin_check",type:"POST",data:$("#lform").serialize(),success:function(response) {
etrace=response;
	
	$("#dycupdate").hide();
	if (response == "1")
	{
	$("#svauth").html("<p><?php echo dp($info_holder,"You are successfully authenticated.");?></p>");
	
	$('#myModal').modal();
	window.location=uredirect;
	}
	else
	{
	$("#svauth").html("<p><?php echo dp($info_holder,"invalid credentials, please check your password or email id");?></p>");
	$('#myModal').modal();

	}
  },error:function(){
 
  alert("OOPS, something went wrong");
 $("#dycupdate").hide();
 }});

 return false;

});

$("#rp_link").click(function(){
$("#dycupdate").show();
$.ajax({url:"recover_password",type:"POST",data:$("#rform").serialize(),success:function(response) {
etrace=response;
	$('#myModal').modal();
	$("#dycupdate").hide();
	$("#svauth").html("<p><b>"+response+"</b></p>");
	
  },error:function(){
 
  alert("OOPS, something went wrong");
 $("#dycupdate").hide();
 }});

 return false;

});
</script>