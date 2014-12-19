<?php
?>
<html>
<head>
	<link href="<?php echo base_url();?>application/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>application/css/custom.css" rel="stylesheet">	
			<!-- start: CSS Link-->
	<script src="http://code.jquery.com/jquery-latest.min.js"> </script>
	<script src="<?php echo base_url();?>application/js/bootstrap.min.js"> </script>
</head>
<body>

<div id="mc" style="width:600px;margin:0 auto">
<div class="well well-large" style="background-color:rgb(158, 31, 99)">
<img src="<?php echo base_url();?>/application/img/AB.png" />
<br/>
<br/>
<div class="alert alert-info">
  <b>Please wait while we process your payment information ...</b>
</div>
<div class="progress progress-striped active">
  <div class="bar" style="width: 200px;" id="bar">  
  </div>
 </div>
</div>
</div>

<div style="display:none" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Payment Verification</h4>
        </div>
        <div class="modal-body" id="svauth">
         <b style="color:green">Your payment is successfully verified. You can click the below link to Abrasivesworld account page</b>
			<div style="margin-top:15px">
			<a href="<?php echo base_url();?>/account/my_profile">My Abrasivesworld Account</a>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="payok">OK</button>
         </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div style="display:none" class="modal fade" id="fModal" tabindex="-1" role="dialog" aria-labelledby="fModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Payment Verification </h4>
        </div>
        <div class="modal-body" id="svauthf">
         <b style="color:red">We are not able to verify your payment,you can contact us by clicking the below link and we will get back to you as soon as possible</b>
			<div style="mragin-top:15px">
			<a href="<?php echo base_url();?>/abrasivesworld/contact_us">My Abrasivesworld Account</a>
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  
<script>
var gdata;
var runCount = 0;
gdata="txn_id=<?php echo $txn_id;?>";

$( "#payok" ).click(function() {
location="<?php echo base_url();?>/account/my_profile";
});
function payment_check()
{
runCount=runCount+1;
if ( runCount >= 30)
{
$("#fModal").modal();
}

$.ajax({
    url : "payment_verify",
    type: "POST",
    data : gdata,	
    success: function(data, textStatus, jqXHR)
    {
	if (data=="1")
	{
	$("#myModal").modal();
	}
	else
	{
	payment_check();	
	}
	},
	error: function (xhr, ajaxOptions, thrownError) {
        
		
      }
	
});
}

$( document ).ready(function() {
  
  payment_check();
  
});


 
</script>
</body>
</html>
