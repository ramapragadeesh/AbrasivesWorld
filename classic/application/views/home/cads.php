<?php

function load_banner($bannerData)
{
  $holder = "";
  $i=0;
  $holder="";
  for ($i=1;$i<= 10;$i++)
  {
    $dataFound=0;

    foreach ($bannerData as $v)
    {
      if ($dataFound==1){
        break;
      }

      if ($i == $v->order)
      {

        $dataFound=1;
        $holder .= "<table style='padding-top:10px;width:168px;height:125px;margin-top:10px'><tr>
        <td style='vertical-align:top;text-align:center'>
          <div style='background:whitesmoke;font-weight:bold'>".$v->title."</div>
          <div>
            <ul class='banner_ad'>";
              if ($v->link_image != "") {
               $holder .= " <li>
               <div style='padding-top:18px'>
                <a href='".$v->link_image_url."'>
                  <img class=imgBorder' style='width:115px;height:94px' src='".$v->link_image."'>
                </a>
              </div>
            </li>";
          }
          if ($v->link_image2 != "") {
           $holder .= " <li>
           <div style='padding-top:18px'>
            <a href='".$v->link_image2_url."'>
              <img class=imgBorder' style='width:115px;height:94px' src='".$v->link_image2."'>
            </a>
          </div>
        </li>";
      }
      if ($v->description != "") {
       $holder .= "<li>
       <p style='width:115px;height:94px'>
        ".$v->description."
      </p>
    </li>";

  }

  if ($v->link_image3 != "") {
   $holder .= " <li>
   <div style='padding-top:18px'>
    <a href='".$v->link_image3_url."'>
      <img class=imgBorder' style='width:115px;height:94px' src='".$v->link_image3."'>
    </a>
  </div>
</li>";
}
$holder .="</ul>
</div>
</td>
</tr>
</table>";

}


}
if ($dataFound == 0)
{
  $holder .= "<table style='padding-top:10px;width:168px;height:125px'>
  <tr>
    <td></td>
  </tr>
</table>";


}

}

return $holder;
}
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
<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
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
  a.prev:hover {    background-position: 0 -50px; }
  a.prev.disabled { background-position: 0 -100px !important;  }
  a.next
  {
    right: -22px;
    background-position: -50px 0;
  }
  a.next:hover
  {
    background-position: -50px -50px;
  }
  a.next.disabled { background-position: -50px -100px !important;  }
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
<table style="width:100%">
  <tr>

    <td style="vertical-align:top;padding-left:5px">
      <div style="float:right">
        <?php
        echo load_banner($bannerLeft);
        ?>
      </div>
    </td>
    <td style="width:1024px;vertical-align:top">
      <div style="width:1024px;margin-top:-10px;margin-left:5px;margin-right:auto;background-color:whitesmoke" id="content_container">

        <div style="text-align:center">
          <div>
            <span><h4 style="color:orange"><?php echo dp($homepage_holder,"Abrasivesworld newly launches");?> <span style="font-family:Courgette" class="blink"><?php echo dp($homepage_holder,"Request for Quotation & Personalised home page");?></span></h4><span>
          </div>
          <div>
            <span>
              <p>
                <h4><?php echo dp($homepage_holder,"Abrasivesworld gets you connected to latest abrasives news , development and community worldwide");?></h4></p>
              </span>
            </div>
          </div>
          <div id="abi">
            <div class="abi_carousel">
              <ul id="foo1">
                <li>
                  <div>
                    <table>
                      <tr>
                        <td>
                          <img src="<?php echo base_url();?>application/img/end/1.jpg" class="imgBorder"/>
                        </td>
                        <td style="text-align: center;vertical-align: middle;">
                          <div style="margin-left:15px">
                            <span>
                              <h6>
                                "We finally found a marketing portal that a small, medium company can leverage on to reach out to our target market focus" John Chia - Managing Director, Kitzutech Sdn Bhd, Malaysia
                              </h6>
                            </span>
                          </div>
                        </td>
                        <td>
                          <span>
                            <img style="height:120px;width:120px" class="imgBorder" src="<?php echo base_url();?>application/img/end/DSCN1835.JPG"/>
                          </span>
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
                          <img src="<?php echo base_url();?>application/img/end/2.jpg" class="imgBorder"/>
                        </td>
                        <td style="text-align: center;vertical-align: middle;">
                          <div style="margin-left:15px">
                            <span>
                              <h6>
                                "Abrasivesworld is by far the best marketing platform that enables us to reach out to both our target segment and name customers. It provides the pulse of the market development in the abrasives world" Franco Maternini - President of Davide Maternini, Italy</h6>
                              </span>
                            </div>
                          </td>
                          <td>
                            <span>
                              <img style="height:120px;width:120px" class="imgBorder" src="<?php echo base_url();?>application/img/end/2_en.jpg"/>
                            </span>
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
                            <img src="<?php echo base_url();?>application/img/end/3.jpg" class="imgBorder"/>
                          </td>
                          <td style="text-align: center;vertical-align: middle;">
                            <div style="margin-left:15px">
                              <span>
                                <h6>
                                  "我非常高兴《研磨世界》首创了这样一个平台，成功的将研磨界联结在一起。 现在我能够找到正确的业界人士一同分享交流最新的市场动态，而不用顾虑语言障碍和国界隔阂"
                                  -李 （玉立研磨，中国）
                                </h6>
                              </span>
                            </div>
                          </td>
                          <td>
                            <span>
                              <img style="height:120px;width:120px" class="imgBorder" src="<?php echo base_url();?>application/img/end/3_en.png"/>
                            </span>
                          </tr>
                        </table>
                      </div>
                    </li>


                    <li>
                      <div>
                        <table>
                          <tr>
                            <td>
                              <img src="<?php echo base_url();?>application/img/end/4.jpg" class="imgBorder"/>
                            </td>
                            <td style="text-align: center;vertical-align: middle;">
                              <div style="margin-left:15px">
                                <span>
                                  <h6>
                                    "As a global leader that specialises in the  flap discs machine and production system, we are very selective in our marketing channel and partner. AbrasivesWorld has what it takes to continue to position  us as a global leader in the abrasives arena."  Raffaele Barbieri – Owner of Riflex Italy
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
                              <img src="<?php echo base_url();?>application/img/end/Machine_494.jpg" class="imgBorder"/>
                            </td>
                            <td style="text-align: center;vertical-align: middle;">
                              <div style="margin-left:15px">
                                <span>
                                  <h6>
                                    "I am amazed by the effectiveness of Abrasivesworld in connecting us to the abrasive community to continue our legacy as the pioneer in the development of conversion equipment" Pascal Amacker – Owner of Amacker + Schmid AG
                                  </h6>
                                </span>
                              </div>
                            </td>
                            <td>
                              <span>
                                <img style="height:120px;width:120px" class="imgBorder"  src="<?php echo base_url();?>application/img/end/Pascal_120px.jpg"/>
                              </span>
                            </tr>
                          </table>
                        </div>
                      </li>


                    </ul>

                  </div>
                </div>
                <div class="clearfix"></div>
                <div style="text-align:center">
                  <b><?php echo dp($homepage_holder,"Featured Endorser");?></b>
                </div>
                <div class="main_container" style="margin-top:1px;width:1000px;margin-left:auto;margin-right:auto;background-color:white;padding-top:15px;">
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

             <li>
              <img src="<?php echo base_url();?>application/img/demo/pl7.jpg" alt="basketball" class="img_p"/>
              <div class="capc">
               <h6>
                 <?php echo dp($homepage_holder,"Abrasive Converting plant");?>
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
    circular  : true,
    infinite  : false,

    auto    : true,
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
      button    : "#foo5_prev",
      key     : "left",
      items   : 1,

      duration  : 3000
    },
    next : {
      button    : "#foo5_next",
      key     : "right",
      items   : 1,
      duration  : 3000
    },
    pagination : {
      container : "#foo5_pag",
      keys    : true,
      easing    : "easeOutBounce",
      duration  : 3000
    }
  });

  $("#foo1").carouFredSel({
    circular  : true,
    infinite  : false,
    auto    : true,

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
      duration:2000,
      fx: "fade"
    }
  });

  $(".banner_ad").carouFredSel({
    circular  : true,
    infinite  : false,
    auto    : true,

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
      duration:1000,
      fx: "fade"
    }
  });

});



(function($)
{
  $.fn.blink = function(options)
  {
    var defaults = { delay:500 };
    var options = $.extend(defaults, options);

    return this.each(function()
    {
      var obj = $(this);
      setInterval(function()
      {
        if($(obj).css("visibility") == "visible")
        {
          $(obj).css('visibility','hidden');
        }
        else
        {
          $(obj).css('visibility','visible');
        }
      }, options.delay);
    });
  }
}(jQuery))

$(document).ready(function()
{
  $('.blink').blink();
});
</script>

