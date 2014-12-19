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
function ab_users(& $abuserl, & $hc)
{
$divg="<div>";
foreach ($abuserl as &$value) 
{
 
 $divg .='<label class="checkbox description_check">
            <input type="checkbox" value="'.$value->au_id.'" id="ABL" name="ABL[]"> '.dp($hc,$value->au_category).'
        </label>'
		;
}
$divg .= "</div>";
return $divg;
}
?>

<div id="main_container" class="main_container">
<div>    
<div class="header_text">
<span>
<small><strong><?php echo dp($info_holder,"Abrasives World Account");?></small></strong>
</span> 
</div> 
<div id="maincon">

<div>
<p style="padding-left:30px;padding-right:30px;padding-top:20px;font-size:14px;line-height:20px">

<b><?php echo dp($info_holder,"Welcome to Abrasives World");?></b><br/>
</div>
<div class="tab-content">
<form method="post" id="customForm" action="<?php echo base_url();?>/account/my_profile">
    <div id="pane1" class="tab-pane active">
      <h4 style="padding-left:40px"><?php echo dp($info_holder,"Are you a");?></h4>  
		<div>	
		<div class="controls span2" style="width:300px">
        <label class="checkbox description_check">
            <input type="checkbox" value="A" id="A" name="AU[]"> <?php echo dp($info_holder,"Machine / Equipment  Supplier");?>
        </label>
        <label class="checkbox description_check">
            <input type="checkbox" value="B" id="B" name="AU[]"> <?php echo dp($info_holder,"Raw Material Supplier");?>
        </label>
        <label class="checkbox description_check">
            <input type="checkbox" value="C" id="C" name="AU[]"> <?php echo dp($info_holder,"Abrasive Producer (Bonded)");?>
        </label>
		<label class="checkbox description_check">
            <input type="checkbox" value="Z" id="Z" name="AU[]"> <?php echo dp($info_holder,"Abrasive Producer (Coated)");?>
        </label>
        <label class="checkbox description_check">
            <input type="checkbox" value="D" id="D" name="AU[]"> <?php echo dp($info_holder,"Coated Abrasive Converter");?>
        </label>
		
		<label class="checkbox description_check">
            <input type="checkbox" value="E" id="E" name="AU[]"> <?php echo dp($info_holder,"Distributor( Bonded or Coated Abrasive)");?>
        </label>
        <label class="checkbox description_check">
            <input type="checkbox" value="F" id="F" name="AU[]"> <?php echo dp($info_holder,"Abrasive Users");?>
			
        </label>
		<div style="margin-left:40px">
		<div style="display:none" id="auep">
		<?php echo ab_users($abuser,$info_holder);?> 
		</div>
		</div>
		
		 <label class="checkbox description_check">
            <input type="checkbox" value="G" id="G" name="AU[]"> <?php echo dp($info_holder,"Others, please specify");?>
        </label>
		 <span style="padding-left:20px;display:none"  id="OV"/><input type="text" value="" name="OVV" id="OVV"/></span>
  		</div>
		
		<div style="clear:both">
		</div>
			
		</div>		
	      </div>

    <div id="pane2">
    <h4 style="padding-left:40px"><?php echo dp($info_holder,"Provide details about yourself");?></h4>
	
	<div style="padding-top:10px;margin-left:30px">       
    
           
          <div class="padme">
          <label for="scw_orgname" class="description"><?php echo dp($info_holder,"Organization Name");?> *</label>
        
          <input type="text" name="scw_orgname" id="scw_orgname" value="" required/>

             <span id="scw_orgnameinfo" class="infostyle"><?php echo dp($info_holder,"What is your organization name");?>?</span>

          </div>

          <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Address Of Registration");?>*</label>
       
          <input type="text" name="scw_orgaddress"  id="scw_orgaddress" value=""  required/>
          <span id="scw_orgaddressinfo" class="infostyle"><?php echo dp($info_holder,"What is your organization address");?>?</span>

         </div>


         <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Country");?>*</label>
       
          <input data-items="4" data-provide="typeahead"  type="text" name="scw_orgcountry"  id="scw_orgcountry" value=""  required/>
          <span id="scw_orgcountryinfo" class="infostyle"><?php echo dp($info_holder,"From which country you are from");?>?</span>

         </div>
		 
		  <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Preferred Language");?></label>
       
          <select name="scwlanguage">
		  <option value="en" selected="selected"><?php echo dp($info_holder,"English");?></option>
		  <option value="zh-cn"><?php echo dp($info_holder,"Chinese");?></option>
		  </select>
          <span id="scw_languageinfo" class="infostyle"><?php echo dp($info_holder,"What is your preferred language");?>?</span>

         </div>

      <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Name");?><span class="required">*</span></label>
       
          <input type="text" id="scw_orgepname" name="scw_orgepname" value="" required/>     
          <span id="scw_orgepnameinfo" class="infostyle"><?php echo dp($info_holder,"What is your name");?>?</span>

          </span>     
        </div>
		
         <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Position");?><span class="required"></span></label>
       
          <input type="text" id="scw_orgempposition"  name="scw_orgempposition" value=""/>  

          <span id="scw_orgemppositioninfo" class="infostyle"><?php echo dp($info_holder,"What is your position");?>?</span>
                  
        </div>

         <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Email");?><span class="required">*</span></label>
       
          <input  type="email" type="text" name="scw_orgemail"  id="scw_orgemail" value=""  required/>   

           <span id="scw_orgemailinfo" class="infostyle"><?php echo dp($info_holder,"What is your email address");?>?</span>
                         
        </div>

		<div class="padme">
          <label class="description"><?php echo dp($info_holder,"Company Website");?></label>
       
          <input type="text" name="scw_orgweb"  id="scw_orgweb" value=""/>
          <span id="scw_orgwebinfo" class="infostyle"><?php echo dp($info_holder,"What is your ccompany website address");?>?</span>

         </div>
		 
        <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Contact Number");?> *</label>
       
          <span>
		  <?php echo dp($info_holder,"Country Code");?>
		  </span>
		  <input type="text" name="scw_telconcode"  id="scw_telconcode" value="" style="width:40px"/>
		  <span>
		  <?php echo dp($info_holder,"Area Code");?>
		   </span>
		  <input type="text" name="scw_telareacode"  id="scw_telareacode" value="" style="width:40px"/>
		  <span>
		  <?php echo dp($info_holder,"Telephone Number");?>
		   </span>
		  
		  <input type="text" name="scw_orgcontact"  id="scw_orgcontact" value="" style="width:120px"  required/>
          <span id="scw_orgcontactinfo" class="infostyle"><?php echo dp($info_holder,"What is your contact number");?>?</span>

         </div>


        <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Password");?><span class="required">*</span></label>
       
          <input type="password" name="scw_orgpass" id="scw_orgpass" value=""  required/>    

           <span id="scw_orgpassinfo" class="infostyle"><?php echo dp($info_holder,"Enter the password");?></span>

        </div>

        <div class="padme">
          <label class="description"><?php echo dp($info_holder,"Confirm Password");?><span class="required">*</span></label>
       
          <input type="password" name="scw_orgconfpass" id="scw_orgconfpass" value=""  required/> 
          <span id="scw_orgconfpassinfo" class="infostyle"><?php echo dp($info_holder,"Confirm the password");?></span>         
        </div>
		<div class="padme">
          <label class="description"><?php echo dp($info_holder,"Notification Email");?><span class="required"></span></label>
		  <input type="text" type="email" name="scw_orgnotemail" id="scw_orgnotemail" value=""/>  

          <span id="scw_orgconfpassinfo" class="infostyle"><?php echo dp($info_holder,"Notification email will be sent to this email");?></span>         
              
        </div>  
		<div class="padme">
		<label class="checkbox">
            <input type="checkbox" name="agreetermsandcond" value="agree" id="inlineCheckbox1"  required><a href="<?php echo base_url();?>account/termsandconditions"> <?php echo dp($info_holder,"I agree to the Abrasives World terms and conditions");?></a>
        </label>
		</div>
		
    </div>
	
	<div id="dycupdate" style="display:none">
	<div style="padding-left:20px;padding-top:5px">
	<img src="<?php echo base_url();?>application/css/images/load.GIF"/>
	
	<?php echo dp($info_holder,"Please wait while account creation is in progress.");?>
	</div>
	</div>
	<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo dp($info_holder,"Account Creation");?></h4>
        </div>
        <div class="modal-body" id="svauth">
          
        </div>
        <div class="modal-footer">
			
			<button type="button" class="btn btn-default" onclick="l_l();"><?php echo dp($info_holder,"OK");?></button>
 
			<button type="button" class="btn btn-default" onclick="l_l();"><?php echo dp($info_holder,"Close");?></button>
         </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
		<script>
$('#G').change(function() {
if($("#F").is(":checked")) {
$('#G').prop('checked', false);
show_message_au(); 
}
        if($(this).is(":checked")) {
            $('#OV').show();
        }
		else
		{
		   $('#OV').hide();
		}
		});
$('#A').change(function() {
if($("#F").is(":checked")) {
$('#A').prop('checked', false); 
show_message_au(); 
}
});
$('#B').change(function() {
if($("#F").is(":checked")) {
$('#B').prop('checked', false); 
show_message_au(); 
}

});
$('#C').change(function() {
if($("#F").is(":checked")) {
$('#C').prop('checked', false); 
show_message_au(); 
}
});
$('#D').change(function() {
if($("#F").is(":checked")) {
$('#D').prop('checked', false); 
show_message_au(); 
}
});
$('#E').change(function() {
if($("#F").is(":checked")) {
$('#E').prop('checked', false); 
show_message_au(); 
}
});

$('#Z').change(function() {
if($("#F").is(":checked")) {
$('#Z').prop('checked', false); 
show_message_au(); 
}
});
$('#F').change(function() {
if($(this).is(":checked")) {
$('#auep').show();
$('#A').prop('checked', false); 
$('#B').prop('checked', false); 
$('#C').prop('checked', false); 
$('#D').prop('checked', false); 
$('#E').prop('checked', false); 
$('#G').prop('checked', false); 
$('#Z').prop('checked', false); 

}
else
{
$('#auep').hide();

}
});
function show_message_au()
{
alert("<?php echo dp($info_holder,"You have selected Abrasive users as your choice, please deselect if you want to change");?>");
}
</script>

	  
	  <!-- Buttons-->
		<div style="clear:both">
		</div>
		
		<div style="text-align:left;padding-top:40px">
		<span style="padding-left:40px">
		<input type="submit" class="btn" id="signupcomplete" value="<?php echo dp($info_holder,"Sign up");?>" /></span>
		</div>
		  </form>
		<!--Buttons End-->
		
		<div style="clear:both">
		</div>
    </div>  
  </div><!-- /.tab-content -->
  

</div>  

</div>
</div>

<script>
 var country_list = ['Others']; 
$('#scw_orgcountry').typeahead({source: country_list})
$.getJSON('<?php echo base_url();?>general/country_list', function(data) {
   $.each(data, function(key, val) {
   country_list.push(val.country_name);
  });

});

$( "#scw_orgemail" ).change(function() {

$("#scw_orgnotemail").val($( "#scw_orgemail" ).val());
  
});




$("#customForm").submit(function(){
$("#dycupdate").show();
$.ajax({url:"create_account",type:"POST",data:$("#customForm").serialize(),success:function(response) {
etrace=response;
	$('#svauth').html(response);
	$('#myModal').modal();
	$("#dycupdate").hide();
  },error:function(){
 
  alert("OOPS, something went wrong");
 $("#dycupdate").hide();
 }});
 return false;

});

function l_l()
{
if ($("#dynca").val() == "")
{
location.href="http://www.abrasivesworld.com";
}
else
{
$('#myModal').modal('hide');

}
}
</script> 