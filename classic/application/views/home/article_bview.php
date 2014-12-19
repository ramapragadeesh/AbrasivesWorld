<?php
function article_original($lang)
{
if ($lang== "en")
{
return "This article is originally written in English";
}
elseif ($lang == "zh-cn")
{
return "This article is originally written in Chinese";

}

}
function article_populate(& $article_in, & $hph,$lang)
{
$af="";
$idf=0;
foreach ($article_in as &$value)
{
$linfo="";
$idf=$idf+1;
$idt= "idd".$idf;
$artdata=$value->article_details;
$rt="";
if ($lang == $value->article_lang)
{
$artdata=$value->article_details;
$rt=1;
}
elseif ($lang == "en")
{
$artdata=$value->article_en;
$linfo= "<div style='color:gray;font-size:12px;font-style:italic;'><b>".dp($hph,article_original("zh-cn"))."</b></div><br/>";

}
elseif ($lang == "zh-cn")
{
$artdata=$value->article_ch;
$linfo= "<div style='color:gray;font-size:12px;font-style:italic;'><b>".dp($hph,article_original("en"))."</b></div><br/>";
}
$af .='
<li style="width:600px!important;height:750px!important;overflow-y:scroll;">
<div id="'.$idt.'">
'.$linfo.'
<div>
<b>'. dp($hph,"Article").' : </b> <b style="font-size:15px">'.$value->article_title.'</b>
</div>

<div>
<b>'. dp($hph,"Organazation Name").' : </b>'.$value->article_org.'
</div>

<div>
<b>'. dp($hph,"Date").' : </b> '.$value->article_date.'
</div>
<div>
<b>'. dp($hph,"Author").' : </b> '.$value->article_author.'
</div>
<br/>
<div>
'.html_purify($artdata).'
</div>
</div>
</li>
';
}

return $af;
}


?>
<style>
.mc{
border:1px solid #D0D0D0;
-moz-box-shadow:0 0 8px #D0D0D0;
-webkit-box-shadow:0 0 8px #D0D0D0;
box-shadow:0 0 8px #D0D0D0;
margin:10px 10px 10px 10px;
}
.article_info
{
padding:5px 10px 5px 10px;
}
.article_carousel {
  padding: 15px 0 15px 40px;
  position: relative;
}
::-webkit-scrollbar {
  width: 8px;
}
::-webkit-scrollbar-button {
  width: 8px;
  height:5px;
}
::-webkit-scrollbar-track {
  background:whitesmoke;
  border: skinny plain lightgray;
  box-shadow: 0px 0px 3px #dfdfdf inset;

}
::-webkit-scrollbar-thumb {
  background:gray;
  border: skinny plain gray;

}
::-webkit-scrollbar-thumb:hover {
  background:gray;
}
</style>
<!-- LEFT -->

<div style="float:left">

<div style="width:700px;height:830px" class="mc">
<div style="background-color:rgb(158, 31, 99);height:30px;text-align:center;color:white"> <b> <?php echo dp($homepage_holder,"Latest News and Update");?></b></div>
<!-- ART -->

<div>
<div id="artslide"  class="article_carousel">
<div id="dyartal">
<ul id="foo6">
<?php echo article_populate($article_holder,$homepage_holder,$usrseslang);?>
</ul>
</div>
<div class="clearfix">
</div>

<a class="prev" id="foo6_prev" href="#"><span>Prev</span></a>

<a class="next" id="foo6_next" href="#"><span>Next</span></a>
</div>
</div>

</div>
</div>
<!-- LEFT END-->

<!-- RIGHT -->
<div style="float:right">

<div style="width:270px;" class="mc">

<div style="background-color:rgb(158, 31, 99);height:30px;text-align:center;color:white"> <b> <?php echo dp($homepage_holder,"Filter");?></b></div>
<div class="article_info">
<div>
<div style="text-align:center">
<b>
<a> <?php echo dp($homepage_holder,"Search by")?></a>
</b>
</div>
<div style="padding-top:10px;padding-left:10px">
<p>
<input type="checkbox" id="apdc" style="margin:auto" class="searcharticlehold"/>
<?php echo dp($homepage_holder,"By the article published date");?>
</p>

<div style="padding-top:5px" style="border:2px solid white">

<div id="apdcv" style="display:none">
<b><?php echo dp($homepage_holder,"From");?></b>
<span style="padding-left:5px"><input class="dfd" type="text" id="artfromdate" style="width:50px;height:18px"></span>
<b><?php echo dp($homepage_holder,"To");?></b>
<span style="padding-left:5px"><input class="dfd" type="text" id="arttodate" style="width:50px;height:18px"></span>
</div>
</div>

<div style="display:none">

<p>
<input type="checkbox" id="artcatc" style="margin:auto" class="searcharticlehold"/>
<?php echo dp($homepage_holder,"By the role of the member");?>
</p>

<div>
<div id="artcatcv" style="display:none">
<p style="font-size:10px;font-style:italic;"><b>This feature is currently not available</b></p>
</div>
</div>

<p>
<input type="checkbox" id="arttypec" style="margin:auto" class="searcharticlehold"/>
<?php echo dp($homepage_holder,"By articles type");?>
</p>

<div>
<div id="arttypecv" style="display:none">
<p style="font-size:10px;font-style:italic;"><b>This feature is currently not available</b></p>
</div>
</div>
</div>

<p>
<input type="checkbox" id="arttitlec" style="margin:auto" class="searcharticlehold" />
<?php echo dp($homepage_holder,"By article title");?>
</p>

<div>
<div id="arttitlecv" style="display:none">
<input id="sartcile_title" name="sartcile_title" type="text" style="width:160px;height:16px;"/>
</div>
</div>



<p>
<input type="checkbox" id="artconc" style="margin:auto" class="searcharticlehold" />
<?php echo dp($homepage_holder,"By article content");?>
</p>

<div>
<div id="artconcv" style="display:none">
<input id="sartcile_content" name="sartcile_content" type="text" style="width:160px;height:16px;"/>
</div>
</div>


<p>
<input type="checkbox" id="arttitlelang" style="margin:auto" class="searcharticlehold" />
<?php echo dp($homepage_holder,"Display article language");?>
</p>

<div>
<div id="arttitlelangv" style="display:none">
<select id="sartcile_lang" name="sartcile_lang">
<option value="default" selected><?php echo dp($homepage_holder,"Posted in original language");?></option>
<option value="id">Bahasa</option>
<option value="zh-cn">Chinese</option>
<option value="en">English</option>
<option value="de">German</option>
<option value="hi">Hindi</option>
<option value="th">Thai</option>
</select>
</div>
</div>


<div style="display:none">
<p>
<input type="checkbox" id="regiscompc" style="margin:auto" class="searcharticlehold"/>
<?php echo dp($homepage_holder,"By registered company");?>
</p>

<div>
<div id="regiscompcv" style="display:none">
<input name="sarticle_regcomp" id="sarticle_regcomp" type="text" style="width:160px;height:16px;"/>
</div>
</div>

<p>
<input type="checkbox" id="regiscompcounc" style="margin:auto" class="searcharticlehold"/>
<?php echo dp($homepage_holder,"By registered company country");?>
</p>

<div style="display:none" id="regiscompcouncv">
<input id="sarticle_regcompcoun" name="sarticle_regcompcoun" type="text" style="width:160px;height:16px;";/>
</div>
</div>
</div>
</div>

<div style="margin-left:10px;">
<input type="checkbox" id="particle" name="particle" style="margin:auto" class="searcharticlehold"/>
<span style="height:10px;width:10px;background-color:rgb(32, 135, 252)">&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span>
<b>- <?php echo dp($homepage_holder,"Paid Article");?></b>&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</div>

<div style="margin-left:10px;margin-top:5px">
<input type="checkbox" id="earticle" name="earticle" style="margin:auto" class="searcharticlehold"/>
<span style="height:10px;width:10px;background-color:rgb(213, 228, 247)">&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<span>
<b>- <?php echo dp($homepage_holder,"Editorial Article");?></b>&nbsp;&nbsp;&nbsp;&nbsp;
</span>
</div>

<div style="text-align:center;margin-top:10px">
<p>
<button class="btn" onclick="search_submit('no');"><?php echo dp($homepage_holder,"Search");?></button>
</p>
</div>

<div  style="padding-top;5px;padding-left:5px;display:none" id="seshow">
<p><img src="<?php base_url();?>application/css/images/load.GIF"> &nbsp;<?php echo dp($homepage_holder,"Please wait, loading the data");?> </p>
</div>

<div>
<div id="searchlinkdata" style="height:540px;overflow-y:scroll">
</div>

</div>
<hr style="width:100px;margin:5px 0px 0px 0px">


</div>

</div>
</div>
<!-- RIGHT END-->

<div class="clearfix">
</div>


</div>
</td>

<td style="vertical-align:top;padding-left:5px">
<?php
 echo load_banner($bannerRight);
?>
</td>
</tr>
</table>
<script>
function reinitsearch()
{
$("#foo6").carouFredSel({
  circular  : true,
  infinite  : false,
  auto    : false,
  swipe:
  {
  onTouch:true
  },
  items:
  {
  visible:1,
  width:"500px",
  height:"500px"

  },
  scroll:
  {
  items:1,
  duration:1500
  },
  prev : {
    button    : "#foo6_prev",
    key     : "left",
    items   : 1,
    easing    : "easeInOutCubic",
    duration  : 750
  },
  next : {
    button    : "#foo6_next",
    key     : "right",
    items   : 1,
    easing    : "easeInQuart",
    duration  : 1500
  }
  });
}
 reinitsearch();

$("#searchselect").change(function()
{
getsearch();
});

function getsearch()
{
var sv=$("#searchselect").val();
switch(sv)
{
case "apd":
$("#apdd").show();
break;
default:
$("#apdd").hide();
break;
}
}
function build_search_array(is_link,is_init)
{
var searchArray={};


if (is_init == "yes")
{
searchArray["einit"]=1;
}
else
{
searchArray["einit"]=0;
}

if ($("#apdc").is(":checked") == true)
{
searchArray["articlestartdate"]=$("#artfromdate").val();
searchArray["articleenddate"]=$("#arttodate").val();
}
if ($("#particle").is(":checked") == true)
{
searchArray["particle"]=1;
}
else
{
searchArray["particle"]=0;
}

if ($("#earticle").is(":checked") == true)
{
searchArray["earticle"]=1;
}
else
{
searchArray["earticle"]=0;
}


if ($("#artengc").is(":checked") == true)
{
searchArray["sarticle_language"]=$("#sarticle_language").val();
}

if ($("#arttitlec").is(":checked") == true)
{
searchArray["sartcile_title"]=$("#sartcile_title").val();
}

if ($("#regiscompc").is(":checked") == true)
{
searchArray["sarticle_regcomp"]=$("#sarticle_regcomp").val();
}

if ($("#regiscompcounc").is(":checked") == true)
{
searchArray["sarticle_regcompcoun"]=$("#sarticle_regcompcoun").val();
}

if ($("#artconc").is(":checked") == true)
{
searchArray["sartcile_content"]=$("#sartcile_content").val();
}


if ($("#arttitlelang").is(":checked") == true)
{
searchArray["sartcile_lang"]=$("#sartcile_lang").val();
}

searchArray["slink"]=is_link;

return searchArray;

}
var gc;
function search_submit(initlang)
{
var datas=build_search_array("no",initlang);
var datasl=build_search_array("yes",initlang);

gc=datas;
$("#seshow").show();
$.ajax({
    url : "article/article_search",
    type: "POST",
    data : datasl,
    success: function(data, textStatus, jqXHR)
    {
  $("#searchlinkdata").html(jqXHR.responseText);

    $.ajax({
    url : "article/article_search",
    type: "POST",
    data : datas,

    success: function(data, textStatus, jqXHR)
    {
    $("#dyartal").html("<b><?php echo dp($homepage_holder,"Search result is being applied,please wait")?>.</b>");
    $("#dyartal").html(jqXHR.responseText);
    reinitsearch();
    $("#seshow").hide();
    }
});

}
});


}
$(document ).ready(function() {
  // Handler for .ready() called.
  $("#artfromdate").datepicker();
  $("#arttodate").datepicker();

});
$('.searcharticlehold').change(function() {
        if($(this).is(":checked")){

       $("#"+this.id+"v").show();
        }
    else
    {
    $("#"+this.id+"v").hide();
    }

});

function linkarticle(la)
{
$("#foo6").trigger("slideTo", la);
}
$( document ).ready(function() {
search_submit("yes");
});

</script>
<div id="ttext">
</div>