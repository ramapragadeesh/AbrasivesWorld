<?php
function populate_uom($value)
{
$r="";
if ($value=="Pieces")
{
$r .='<option value="Pieces" selected>Pieces</option>';
}
else
{
$r .='<option value="Pieces">Pieces</option>';
}

if ($value=="Meters")
{
$r .= '<option value="Meters" selected>Meters</option>';
}
else
{
$r .= '<option value="Meters">Meters</option>';
}

if ($value=="Metersquare")
{
$r .= '<option value="Metersquare" selected>Metersquare</option>';

}
else
{
$r .= '<option value="Metersquare">Metersquare</option>';

}
if ($value=="Kilogram")
{
$r .= '<option value="Kilogram" selected>Kilogram</option>';

}
else
{
$r .= '<option value="Kilogram">Kilogram</option>';

}
if ($value=="Ton")
{
$r .= '<option value="Ton">Ton</option>';
}
else
{
$r .= '<option value="Ton">Ton</option>';
}
return $r;
}


function get_u_currency(&$lrfqbr,$bid)
{
foreach($lrfqbr as &$value)
{
if ($value->user_bid_id==$bid)
{
return $value->rfq_pref_currency;
}
}
}
function get_user_info(& $rfqtsub,$uid,$sid,& $rfqbd,& $lrfqbr)
{
$r="";
foreach ($rfqtsub as &$value) 
{
	if ($value->user_bid_id==$uid && $value->serialno==$sid)
	{
	$r .='<tr>
<td>
<!--<div class="descinfo">'.htmlspecialchars($value->serialno).'</div>-->
</td>
<td>
<div class="descinfo">'.get_bidder_info($rfqbd,$value->rfq_mid,$value->user_bid_id,1).'</div>
</td>
<td>
<div class="descinfo">'.get_bidder_info($rfqbd,$value->rfq_mid,$value->user_bid_id,2).'</div>
</td>
<td>
<div class="descinfo">'.htmlspecialchars($value->cdesc).'</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->spec).'</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->dimension).'</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->quantity).'</div>
</td>

<td>
<div class="descinfo">
'.$value->uom.'
</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->reqprice).'</div>
</td>


<td>
'.get_u_currency($lrfqbr,$value->user_bid_id).'
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->reqleadtime).'</div>
</td>

</tr>';
	}
}
return $r;
}
function populate_rfq_table(& $langm,& $rfqtd, & $rfqbd,& $rfqtsub,& $rfqoc,& $lrfqbr)
{
$r="";
$rc=0;
$urid = array();
$inity=0;
foreach ($rfqtd as &$value) 
{

$urid[]= 
$rc=$rc+1;
$ob="";
if ($value->is_orig=="1" && in_array($value->serialno,$urid,true)==false)
{
$urid[]=$value->serialno;
$ob="style='background-color:whitesmoke !important;color:rgb(241, 134, 35)!important'";
$inity=1;
}
if ($inity==1)
{
$inity=2;
$r .='<tr id="initrfqrow" '.$ob.'>
<td>
<div class="span4">
<div class="num">
<div class="txt">
'.htmlspecialchars($value->serialno).'
</div>
</div>
</div>
</td>
<td>

</td>
<td>
</td>
<td>
<div class="descinfo">'.htmlspecialchars($value->cdesc).'</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->spec).'</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->dimension).'</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->quantity).'</div>
</td>

<td>
<div class="descinfo">
'.$value->uom.'
</div>
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->reqprice).'</div>
</td>

<td>
'.$rfqoc[0]->rfq_pref_currency.'
</td>

<td>
<div class="descinfo">'.htmlspecialchars($value->reqleadtime).'</div>
</td>


</tr>';
$r .= get_user_info($rfqtsub,$value->user_bid_id,$value->serialno,$rfqbd,$lrfqbr);
}
else
{
$r .= get_user_info($rfqtsub,$value->user_bid_id,$value->serialno,$rfqbd,$lrfqbr);
}


}
return $r;
}
function rfq_bid_summary(& $rfqbidsummary,$rfqid)
{
$r=0;

foreach ($rfqbidsummary->result() as $row)
{
   if ( $row->rfq_id==$rfqid)
   {
   return $row->bid_count;
   }
   
}
return $r;
}
function list_rfqmain(& $rfqlist,& $rfqsummary)
{

$r="";
$rc=0;
foreach($rfqlist as &$v)
{
$ac="";
if ($v->rfq_active==1)
{
$ac="checked disabled";
}

$rc=$rc+1;
$r .="<tr>";
$r .="<td style='display:none'><span>".$v->rfq_id."</span></td>";
$r .="<td><span>".$v->rfq_no."</span></td>";
$r .="<td><span>".$v->rfq_title."</span></td>";
$r .="<td><span>".$v->rfq_issue_date."</span></td>";
$r .="<td><span>".$v->rfq_close_date."</span></td>";
$r .="<td><span>".$v->rfq_pref_currency."</span></td>";
$r .="<td><span><input type='checkbox'".$ac."></span></td>";
$r .="<td><span>".'<a href="#"><span class="badge">'.rfq_bid_summary($rfqsummary,$v->rfq_id).'</span></a> &nbsp; &nbsp; <a href="rfq_modify/?rfqid='.$v->rfq_id.'"><i class="icon-edit"></i></a> &nbsp;&nbsp;<i class="icon-remove-circle"> </i>'."</span></td>";
$r .="</tr>";
}
return $r;
}
function list_bidmain(& $bidlist)
{
$r="";
$rc=0;

foreach($bidlist as &$v)
{
$rc=$rc+1;
$r .="<tr>";
$r .="<td style='display:none'><span>".$v->rfq_id."</span></td>";
$r .="<td><span>".$v->rfq_no."</span></td>";
$r .="<td><span>".$v->rfq_title."</span></td>";
$r .="<td><span>".$v->rfq_issue_date."</span></td>";
$r .="<td><span>".$v->rfq_close_date."</span></td>";
$r .="<td><span>".$v->rfq_pref_currency."</span></td>";

$r .="<td><span>".'<i class="icon-info-sign" alt="More Information"> </i> &nbsp;&nbsp; <a href="rfq_modify/?rfqid='.$v->rfq_id.'"><i class="icon-edit"></i></a> &nbsp;&nbsp;<i class="icon-remove-circle"> </i>'."</span></td>";
$r .="</tr>";
}
return $r;
}
function get_bidder_info(& $bidderinfo,$rfqid,$user_bid_id,$wh)
{
$r="";
foreach ($bidderinfo->result() as $row)
{

   if ( $row->rfq_id==$rfqid && $row->recordno== $user_bid_id && $wh==1 )
   {
   return $row->user_orgname;
   }
   else if ( $row->rfq_id==$rfqid && $row->recordno== $user_bid_id && $wh==2)
   {
   return $row->user_email;
   }
   
}
return $r;
}
function list_rfqresponse(& $bidlist,& $bidderinfo)
{
$r="";
$rc=0;

foreach($bidlist as &$v)
{
$rc=$rc+1;
$r .="<tr>";

$r .="<td style='display:none'><span>".$v->rfq_id."</span></td>";
$r .="<td><span>".$v->rfq_no."</span></td>";
$r .="<td><span>".$v->rfq_title."</span></td>";
$r .="<td><span>".$v->rfq_incoterm."</span></td>";
$r .="<td><span>".$v->rfq_pref_cn_export."</span></td>";
$r .="<td><span>".$v->rfq_pref_currency."</span></td>";
$r .="<td><span>".$v->rfq_partial."</span></td>";
$r .="<td><span>".get_bidder_info($bidderinfo,$v->rfq_id,$v->user_bid_id,1)."</span></td>";
$r .="<td><span>".get_bidder_info($bidderinfo,$v->rfq_id,$v->user_bid_id,2)."</span></td>";
$r .="<td><span>".'<a href="../rfq_bid_info/?rfqid='.$v->rfq_id.'&user_bid_id='.$v->user_bid_id.'"><i class="icon-info-sign" alt="More Information"> </i></a>'."</span></td>";
$r .="</tr>";
}
return $r;
}

function GUID()
{

    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}
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
<span style="padding-right:20px"><i class="icon-lock"></i><span style="padding-left:5px"><a  style="color:white"  href="<?php echo base_url();?>account/change_password"><?php echo dp($info_holder,"Change password");?></a></span></span>
<span style="padding-right:20px"><i class="icon-edit"></i><span style="padding-left:5px"><a style="color:white" href="<?php echo base_url();?>my_article"><?php echo dp($info_holder,"Article Management System");?></a></span>
</span>
<span style="padding-right:20px"><i class="icon-edit"></i><span style="padding-left:5px"><a style="color:orange" href="<?php echo base_url();?>account/rfq"><b><?php echo dp($info_holder,"Request for quotation");?></b></a></span>
</span>
</div>
</div>

<div id="maincon">
<div class="container" style="width:80%;margin-left:80px">
		<div class="row" >
			<div class="col-xs-3">
				<div class="offer offer-default">
					<div class="shape">
						<div class="shape-text">
							RFQ							
						</div>
					</div>
					<div class="offer-content">
					<div style="padding-top:10px">
					<span style="padding-right:20px;"><i class="icon-lock"></i><span style="padding-left:5px;cursor:pointer;font-weight:bold"><a href="<?php echo base_url();?>rfq"><?php echo dp($info_holder,"Create a new RFQ");?></a></span></span>
					<span style="padding-right:20px"><i class="icon-edit"></i><span style="padding-left:5px;cursor:pointer;font-weight:bold"><a href="<?php echo base_url();?>rfq/rfq_manage"><?php echo dp($info_holder,"Manage my RFQ");?></a></span></span>
					</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div style="padding-top:10px">
</div>
<div id="rfqcontent" style="margin-left:35px;">
<div  class="padme">
<div id="rfqinit" style="margin-top:20px;width:95%;min-width:500px;">

<ul class="nav nav-tabs">
  <li><a href="#sent_rfq" data-toggle="tab"><?php echo dp($info_holder,"RFQ Bid Summary Overview");?></a></li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="sent_rfq">
  
<div style="border:3px solid whitesmoke">
<p style="font-weight:bold;font-size:15px;padding-left:30px;height:20px;background-color:whitesmoke"><?php echo dp($info_holder,"RFQ Response");?></p>
<table class="table" style="width:100%" id="rfqtable" >
<thead>
<tr>
<th style='display:none'>
<?php echo dp($info_holder,"RFQ ID");?>
</th>
<th>
<?php echo dp($info_holder,"RFQ No");?>
</th>

<th>
<?php echo dp($info_holder,"RFQ Title");?>
</th>
<th>
<?php echo dp($info_holder,"RFQ Incoterm");?>
</th>
<th>
<?php echo dp($info_holder,"RFQ Export");?>
</th>
<th>
<?php echo dp($info_holder,"RFQ Currency");?>
</th>

<th>
<?php echo dp($info_holder,"Partial shipment");?>
</th>
<th>
<?php echo dp($info_holder,"Bidder Org Name");?>
</th>
<th>
<?php echo dp($info_holder,"Bidder Email Address");?>
</th>
<th>
<?php echo dp($info_holder,"More Information");?>
</th>

<th>
</th>
</tr>
</thead>

<tbody>
<?php echo list_rfqresponse($lrfqbr,$bidderinfo);?>

</tbody>
</table>

<div style="clear:both">
</div>

</div>  
  </div>
 


<div style="margin-top:15px">
</div> 
 <ul class="nav nav-tabs">
  <li><a href="#rfqtable_rfq" data-toggle="tab"><?php echo dp($info_holder,"RFQ Bid Details");?></a></li>
</ul>

<div class="tab-pane active" id="rfqtable_rfq">
<div style="border:3px solid whitesmoke">
<p style="font-weight:bold;font-size:15px;padding-left:30px;height:20px;background-color:whitesmoke"><?php echo dp($info_holder,"RFQ Response");?></p>

<table class="table" style="width:100%" id="rfqtable">
<thead>
<tr>
<th>
<?php echo dp($info_holder,"S/N");?>
</th>

<th>
<?php echo dp($info_holder,"Org Name");?>
</th>

<th>
<?php echo dp($info_holder,"Contact Email");?>
</th>
<th>
<?php echo dp($info_holder,"Commodity description");?>*
</th>

<th>
<?php echo dp($info_holder,"Specification");?>*
</th>
<th>
<?php echo dp($info_holder,"Dimension");?>*
</th>
<th>
<?php echo dp($info_holder,"Quantity");?>*
</th>

<th>
<?php echo dp($info_holder,"Unit of measurement");?>*
</th>
<th>
<?php echo dp($info_holder,"Requested Price");?>
</th>

<th>
<?php echo dp($info_holder,"Currency");?>
</th>

<th>
<?php echo dp($info_holder,"Requested Lead Time");?>
</th>


</tr>
</thead>

<tbody>
<?php echo populate_rfq_table($info_holder,$rfqt,$rfqbd,$rfqtsub,$rfqoc,$lrfqbr);?>
</tbody>
<tfoot>
<tr><td></td><td></td><td></td><td></td><td></td><td><b></b></td><td><b></b></td></tr>
</tfoot>
</table>

<div style="clear:both">
</div>

</div>  
  </div>
  

</div>


</div>





<div style="clear:both">
</div>
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
		<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo dp($info_holder,"Close");?></button>
         </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
</div>
</div>
</div>
</div>

<script>
function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}
var istotaladded=0;
$( "#rfqtableadd" ).click(function() {
add_rfq();
rfqtotal();
});

function rfqtotal()
{
var gt=0;
$('#rfqtable tbody tr td:nth-child(7)').find("input").each(function() {
try
{
if (isNumeric($(this).val()))
{
var gc= parseInt($(this).val());
 gt=gt+gc;
}
 }
 catch(err)
 {
 }
});

var gr="<tr><td></td><td></td><td></td><td></td><td></td><td><b>"+"<?php echo dp($info_holder,"Total")?>"+"</b></td><td><b>"+gt.toString()+" "+$("#rfqcurrency").val()+"</b></td></tr>";
$("#rfqtable tfoot tr").remove(); 
$('#rfqtable tfoot').append(gr);

}
function add_rfq()
{
var row = $("#initrfqrow").html();
$('#rfqtable tbody').append('<tr>'+row+'</tr>');
}
var gtrace;
function rme(rew)
{
var rowCount = $('#rfqtable tbody tr').length;
if (rowCount != 1)
{
rew.parentElement.parentElement.parentElement.remove();
rfqtotal();
}
}
</script>
<style>
.shape{	
	border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
	-ms-transform:rotate(360deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(360deg); /* Safari and Chrome */
	transform:rotate(360deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
	border-color: rgba(255,255,255,0) #5cb85c rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
	border-color: rgba(255,255,255,0) #999999 rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
	border-color: rgba(255,255,255,0) #428bca rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
	border-color: rgba(255,255,255,0) #5bc0de rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
	border-color: rgba(255,255,255,0) #f0ad4e rgba(255,255,255,0) rgba(255,255,255,0);
}
.shape-text{
	color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(30deg); /* Safari and Chrome */
	transform:rotate(30deg);
}	
.offer-content{
	padding:0 20px 10px;
	}


.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}

.collapsibleContainer
{
    border: solid 1px #9BB5C1;

}

.collapsibleContainerTitle
{
    cursor:pointer;
}

.collapsibleContainerTitle div
{
    padding-top:5px;
    padding-left:10px;
    background-color:#9BB5C1;
    color:#607882;
}

.collapsibleContainerContent
{
    padding: 10px;
}

	</style>
<script>
(function($) {
    $.fn.extend({
        collapsiblePanel: function() {
        // Call the ConfigureCollapsiblePanel function for the selected element
        return $(this).each(ConfigureCollapsiblePanel);
    }
  });
})(jQuery);


function ConfigureCollapsiblePanel() {
    $(this).addClass("ui-widget");
    
    // Check if there are any child elements, if not then wrap the inner text within a new div.
    if ($(this).children().length == 0) {
    $(this).wrapInner("<div></div>");
    }    
    
    // Wrap the contents of the container within a new div.
    $(this).children().wrapAll("<div class='collapsibleContainerContent ui-widget-content'></div>");
    
    // Create a new div as the first item within the container.  Put the title of the panel in here.
    $("<div class='collapsibleContainerTitle ui-widget-header'><div>" + $(this).attr("title") + "</div></div>").prependTo($(this));

    
    // Assign a call to CollapsibleContainerTitleOnClick for the click event of the new title div.
    $(".collapsibleContainerTitle", this).click(CollapsibleContainerTitleOnClick);
}
  
  
function CollapsibleContainerTitleOnClick() {
    // The item clicked is the title div... get this parent (the overall container) and toggle the content within it.
    $(".collapsibleContainerContent", $(this).parent()).slideToggle();
}
</script>
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
       $(".collapsibleContainer").collapsiblePanel();
	   $(".collapsibleContainerContent", $('.collapsibleContainerContent').parent()).slideToggle();
    });
</script>
<style>
.num
{
    border: 1px solid #9e9e9e;
    -webkit-border-radius: 999px;
    border-radius: 999px;
    -moz-border-radius: 999px;
    height: 40px;
    background-color: #fff;
    color: #333;
   
}
.num:hover
{
    background-color: #9e9e9e;
    color: #fff;
    transition-property: background-color .2s linear 0s;
    -moz-transition: background-color .2s linear 0s;
    -webkit-transition: background-color .2s linear 0s;
    -o-transition: background-color .2s linear 0s;
}
.txt
{
    font-size: 16px;
    text-align: center;
    margin-top: 5px;
    font-family: 'Lato' , sans-serif;
    line-height: 30px;
    color: #333;
}
.span4
{
    width: 40px;
    float: left;
    margin: 0 8px 10px 8px;
}

</style>  
         