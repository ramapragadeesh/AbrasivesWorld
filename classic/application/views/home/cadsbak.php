<?php
function dp($info_holderdy,$f,$fsl="")
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
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/helper-plugins/jquery.mousewheel.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/helper-plugins/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/helper-plugins/jquery.transit.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>application/js/bjqs.min.js"></script>
<link href="<?php echo base_url();?>application/css/bjqs.css" rel="stylesheet">
<script src="https://apis.google.com/js/client.js?onload=OnLoadCallback"></script>
<script>
function load()
{

gapi.client.setApiKey('AIzaSyAqEhtDrrTMdUfXLz40-_F-0gZ8B9Bgt-M');
gapi.client.load('translate', 'v2', makeRequest);
}
function translateText(response) {
        document.getElementById("translation").innerHTML += "<br>" + response.data.translations[0].translatedText;
      }
</script>
<style>
.abi_carousel
{
position: relative;
padding-left:70px;
padding-right:20px;
padding-top:15px;
}
.imgBorder {
  padding: 15px 15px 15px 15px;
  background-color: white;
  box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
  -moz-box-shadow: 0 1px 2px rgba(34,25,25,0.4);
  -webkit-box-shadow: 0 1px 3px rgba(34, 25, 25, 0.4);
  width:250px;
height:200px;
}
.abi_carousel ul
{
margin: 0;
padding: 0;
list-style: none;
display: block;
}
.abi_carousel li {
text-align: center;
padding: 0;
margin: 6px;
display: block;
float: left;
width:860px;
backgroud-color:white;
}
.abi_carousel.responsive 
{
width: auto;
margin-left: 0;
}
.list_carousel
{
position: relative;
padding-left:70px;
padding-right:20px;
padding-bottom:10px;
}
.img_p
{
width:140px;
height:70px;
}
.list_carousel ul
{
margin: 0;
padding: 0;
list-style: none;
display: block;
}
.list_carousel li {
text-align: center;
-webkit-box-shadow:0 0 8px rgb(208, 208, 208);
-moz-box-shadow:0 0 8px rgb(208, 208, 208);
box-shadow:0 0 8px rgb(208, 208, 208);
padding: 0;
margin: 6px;
display: block;
float: left;
backgroud-color:white;
}
.list_carousel.responsive 
{
width: auto;
margin-left: 0;
}

a.prev, a.next 
{
background: url(<?php echo base_url();?>/application/img/home/miscellaneous_sprite.png) no-repeat transparent;
width: 45px;
height: 50px;
display: block;
position: absolute;
top: 85px;
}
a.prev 
{
left: -22px;
background-position: 0 0; 
}
a.prev:hover {		background-position: 0 -50px; }
a.prev.disabled {	background-position: 0 -100px !important;  }
a.next 
{
right: -22px;
background-position: -50px 0;
}
a.next:hover
{
background-position: -50px -50px; 
}
a.next.disabled {	background-position: -50px -100px !important;  }
a.prev.disabled, a.next.disabled
{
cursor: default;
}
a.prev span, a.next span
{
display: none;
}
.pagination {
text-align: center;
}
.pagination a 
{
background: url(<?php echo base_url();?>/application/img/home/miscellaneous_sprite.png) 0 -300px no-repeat transparent;
width: 15px;
height: 15px;
margin: 0 5px 0 0;
display: inline-block;
}
.pagination a.selected {
	background-position: -25px -300px;
	cursor: default;
}
.pagination a span {
	display: none;
}
.clearfix {
	float: none;
	clear: both;
}
.capc
{
background-color:rgb(0, 0, 0);
opacity:0.8;
color:white;
-webkit-box-shadow:0px 1px 5px 0px rgb(74, 74, 74);
-moz-box-shadow:0px 1px 5px 0px rgb(74, 74, 74);
box-shadow:0px 1px 5px 0px rgb(74, 74, 74);
height:40px;
box-sizing:border-box;
width:200px;
}

</style>
<div class="clearfix">
</div>
<div style="width:1024px;margin-left:auto;margin-right:auto;background-color:whitesmoke">
<div style="padding-top:10px">
</div>
<div style="text-align:center">
<p><h4><?php echo dp($homepage_holder,"Abrasivesworld gets you connected to latest abrasives news , development and community worldwide");?></h4></p>
</div>
<div id="abi">
<div class="abi_carousel">
<ul id="foo1">
<li>
<div>
<table>
<tr>
<td>					
<img src="<?php echo base_url();?>application/img/abw/ba1.jpg" class="imgBorder"/>
</td>
<td style="text-align: center;vertical-align: middle;">
<div style="margin-left:15px">
<span>
<h5>
<?php echo dp($homepage_holder,"Bonded Abrasives");?>
</h5>
<h6>
An abrasive is a material, often a mineral, that is used to shape or finish a workpiece through rubbing which leads to part of the workpiece being worn away. While finishing a material often means polishing it to gain a smooth, reflective surface it can also involve roughening as in satin, matte or beaded finishes.
</h6>
</span>
</div>
</td>
</tr>
</table>
</div>
</li>


<li>
<div>
<table>
<tr>
<td>					
<img src="<?php echo base_url();?>application/img/abw/ba2.jpg" class="imgBorder"/>
</td>
<td style="text-align: center;vertical-align: middle;">
<div style="margin-left:15px">
<span>
<h5>
<?php echo dp($homepage_holder,"Bonded Abrasives");?>
</h5>
<h6>
An abrasive is a material, often a mineral, that is used to shape or finish a workpiece through rubbing which leads to part of the workpiece being worn away. While finishing a material often means polishing it to gain a smooth, reflective surface it can also involve roughening as in satin, matte or beaded finishes.
</h6>
</span>
</div>
</td>
</tr>
</table>
</div>
</li>



<li>
<div>
<table>
<tr>
<td>					
<img src="<?php echo base_url();?>application/img/abw/ba3.png" class="imgBorder"/>
</td>
<td style="text-align: center;vertical-align: middle;">
<div style="margin-left:15px">
<span>
<h6>
An abrasive is a material, often a mineral, that is used to shape or finish a workpiece through rubbing which leads to part of the workpiece being worn away. While finishing a material often means polishing it to gain a smooth, reflective surface it can also involve roughening as in satin, matte or beaded finishes.
</h6>
</span>
</div>
</td>
</tr>
</table>
</div>
</li>


<li>
<div>
<table>
<tr>
<td>					
<img src="<?php echo base_url();?>application/img/abw/ba4.jpg" class="imgBorder"/>
</td>
<td style="text-align: center;vertical-align: middle;">
<div style="margin-left:15px">
<span>
<h6>
An abrasive is a material, often a mineral, that is used to shape or finish a workpiece through rubbing which leads to part of the workpiece being worn away. While finishing a material often means polishing it to gain a smooth, reflective surface it can also involve roughening as in satin, matte or beaded finishes.
</h6>
</span>
</div>
</td>
</tr>
</table>
</div>
</li>


</ul>

</div>
</div>

<div class="clearfix"></div>
<br/>
<div style="text-align:center">
<b><?php echo dp($homepage_holder,"Featured Endorser");?></b>
</div>
<div class="main_container" style="margin-top:20px;width:1000px;margin-left:auto;margin-right:auto;background-color:white;padding-top:15px;">
<div>
<!-- carousel image html -->
<div class="list_carousel" style="height:140px">
				<ul id="foo5">
					<li style="height:60px">					
					<img src="<?php echo base_url();?>application/img/demo/pl.png" alt="basketball" class="img_p"  />
				   <div class="capc">
				   <h6>
				   <?php echo dp($homepage_holder,"Global leader in production machines for both bonded and coated abrasives production lines");?>
				   </h6>
				   </div>
				   </li>
				   
				   <li>					
					<img src="<?php echo base_url();?>application/img/demo/pl2.png" alt="basketball" class="img_p"  />
				   <div class="capc">
				   <h6>
				   <?php echo dp($homepage_holder,"Manufacturer of splicing tapes for sanding belt conversion");?>
				   </h6>
				   </div>
				   </li>
				   
					<li>					
					<img src="<?php echo base_url();?>application/img/demo/pl3.png" alt="basketball" class="img_p"  />
				   <div class="capc">
				   <h6>
				   <?php echo dp($homepage_holder,"Manufacturer of Flaps discs machines and tools");?>
				   </h6>
				   </div>
				   </li>		

					<li>					
					<img src="<?php echo base_url();?>application/img/demo/pl4.png" alt="basketball" class="img_p"  />
				   <div class="capc">
				   <h6>
				  <?php echo dp($homepage_holder,"Manufacturer of Coated and bonded abrasives");?>
				   </h6>
				   </div>
				   </li>


					<li>					
					<img src="<?php echo base_url();?>application/img/demo/pl5.png" alt="basketball" class="img_p"  />
				   <div class="capc">
				   <h6>
				   <?php echo dp($homepage_holder,"Manufacturer of conversion machine for coated abrasives");?>
				   </h6>
				   </div>
				   </li>

					<li>					
					<img src="<?php echo base_url();?>application/img/demo/pl6.png" alt="basketball" class="img_p"/>
				   <div class="capc">
				   <h6>
				   <?php echo dp($homepage_holder,"Manufacturer of coated abrasives");?> 
				   </h6>
				   </div>
				   </li>				   
				</ul>
				<div class="clearfix"></div>

        <div class="pagination" id="foo5_pag"></div>
		 <a class="prev" id="foo5_prev" href="#"><span><?php echo dp($homepage_holder,"prev");?></span></a>

    <a class="next" id="foo5_next" href="#"><span><?php echo dp($homepage_holder,"next");?></span></a>

				
			</div>
<!-- carousel image html End-->

</div>
</div>


<script>
$(document).ready(function() {
  // Handler for .ready() called.
$("#foo5").carouFredSel({
	circular	: true,
	infinite	: false,
	
	auto 		: true,
	swipe:
	{
	onTouch:true
	},
	items:
	{
	visible:4
	},
	scroll:
	{
	items:1
	},
	prev : {
		button		: "#foo5_prev",
		key			: "left",
		items		: 1,
		
		duration	: 3000
	},
	next : {
		button		: "#foo5_next",
		key			: "right",
		items		: 1,
		duration	: 3000
	},
	pagination : {
		container	: "#foo5_pag",
		keys		: true,
		easing		: "easeOutBounce",
		duration	: 3000
	}
});

$("#foo1").carouFredSel({
	circular	: true,
	infinite	: false,	
	auto 		: true,

		swipe:
	{
	onTouch:true
	},
	items:
	{
	visible:1
	
	},
	scroll:
	{
	items:1,
	duration:3500,
	fx: "fade"
	}
	});

});

</script>