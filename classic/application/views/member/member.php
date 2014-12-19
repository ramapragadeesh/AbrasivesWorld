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

    <div class="header_text">
      <span>
        <small><b><?php echo dp($info_holder,"Members Corner");?></b></small>
      </span>
    </div>
    
      <div style="padding-left:30px;padding-right:30px;padding-top:20px;font-size:14px;line-height:20px">
        <?php

        if ($ulang == "zh-cn")
        {
          ?>

          <div id="enab" style="">
            <div>
              <div class="page-header">
                <p>
                  研磨世界创建磨料社区服务。无论您是提供机械，原料，生产商，分销商或最终用户，我们希望能为您服务。
                </p>
                <p>
                  我们相信，服务不应该花费巨额款项。但在同一时间，我们有信心研磨世界的特点和功能会超出我们的成员的喜悦
                </p>
                <p>
                  研磨世界提供的主要服务分别是：
                </p>
                <h1 id="timeline">特点</h1>
              </div>
              <ul class="timeline">
               <li>
                <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">个性化的个人会员的URL资料链接</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
                  </div>
                  <div class="timeline-body">


                   <p>
                    任成员可以在研磨世界创建，个性化，并产生自己的公司简介页面。这项服务是完全免费的，就像123一样简单，全程不超过5分钟。
                  </p>
                  <p>
                    这个功能给我们的会员带来了很多好处。它们分别是： - 成员可以决定保存成英语或中文的格式。
                  </p>
                  <p>
                    - 成员可以启用这个公司资料予下载为PDF格式。
                  </p>
                  <p>
                    - 成员的公司资料予将有一个唯一的网址链接，使信息共享给他人。
                  </p>
                  <p>
                    - 成员的公司资料予可以由您授权，允许其他成员请求服务匹配。
                  </p>
                  <p>
                    - 成员的公司资料予可以由您授权，允许其他成员请求报价。
                  </p>



                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">文章管理系统</h4>
                </div>
                <div class="timeline-body">
                  <p>
                    研磨世界推出6个额外的国际语言来显示最新的新闻和发展。这允许成员共享和发布他们的新闻，并让文章管理系统来翻译不同的语言立即深入到更广泛的世界读者。文章管理系统也让成员加载个性图片，链接所选择的视频，以提高个人物品的活力。这些文章既可以贴到研磨世界，或分配到指标其他成员的团体或分配预选的电子邮件地址。
                  </p>
                  <p>
                    如今除了英语和中文语言，研磨世界可以提供德语，印地文，印尼文和泰文，。研磨世界认为，有效的营销手段更快地将产品推向市场，并把握到了国际客户。
                  </p>

                </div>
              </div>
            </li>

            <li>
              <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="timeline-title">索取报价</h4>
                  <p><small class="text-muted"></small></p>
                </div>
                <div class="timeline-body">
                 <p>
                  研磨世界为了让成员更好的收集最佳价格合适的产品，提供咨询平台 (RFQ). 这样，成员就可以接触到国际市场，不具有地域或语言障碍。
                </p>
                <p>
                  关键功能包括：
                </p>
                <p>
                  - 询价的发件成员可以决定把他们的询价其指定由研磨世界会员组或/和指定的电子邮件地址。
                </p>
                <p>
                  -合格的投标成员将被通知，并在严格保密情况提供他们的报价。
                </p>
                <p>
                  - 发送者和投标者将有本身的询价记录，并保存在研磨世界报价系统，这将助于成员在需要时获取信息。
                </p>
                <p>
                  来吧，在没有任何成员费用 成为研磨世界其中的一部分，并采取我们的服务优势，扩大你的市场和品牌知名度。
                </p>
              </div>
            </div>
          </li>


        </ul>
      </div>
    </div>

    <?php
  }
  else
  {
    ?>

    <div id="enab" style="">

      <div>
        <div class="page-header">
          <p>
            AbrasivesWorld.com is created to serve the abrasives communities regardless if you are supplying machinery, raw material, producers, distributors or end
            users.
          </p>
          <p>
            We believe services should not cost or at a hefty amount to its members although we are confident that the features AbrasivesWorld offers would exceed the
            delight of our members.
          </p>
          <p>
            Members can enjoy the following
          </p>
          <h1 id="timeline">FEATURES</h1>
        </div>
        <ul class="timeline">
         <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Personalised URL link of member’s profile</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
            </div>
            <div class="timeline-body">
             <p>
              Abrasivesworld enables members to create their personalise Company Profile Pages at absolutely not cost. Anyone in the abrasives community can create,
              personalised and generate their company profile page. This service is absolutely free and as easy as 1-2-3 and takes less than 5 minutes.

            </p>
            <p>
              This features brings many benefit to our members. They are:
              <p>- members can decide to save into English or Chinese format.</p>
              <p>- members can enable this Company act sheet to be downloaded into PDF format. </p>
              <p>- member's Company fact sheet will have an unique URL link that allow information to be shared to others.</p>
              <p>- member's Company fact sheet can be make available (if authorised by you) for service match search request</p>
              <p>- member's Company fact sheet can be make available (if authorised by you) to parties in their Request for Quotation</p>

            </p>
          </div>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
        <div class="timeline-panel">
          <div class="timeline-heading">
            <h4 class="timeline-title">Article Management System</h4>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
          </div>
          <div class="timeline-body">
           <p>
            Abrasivesworld lives to its commitment to its readers and members by launching 6 additional languages into its news article. This allows its members to
            publish their news updates and have them translated to different languages instantly reaching out to broader readers worldwide. The personalised article
            column allows members to load pictures, video link and even video of your choice to enhance the dynamism of your personal article. These article can either
            be posted onto <a href="http://www.abrasivesworld.com"> www.abrasivesworld.com </a>, or assigned to target member’s group or to the member’s assigned email addresses. 
          </p>
          <p>Today, Abrasivesworld can offer its article to German, Hindi, Bahasa and Thai in addition to its English and Chinese languages. Abrasivesworld believes that effective marketing means
            faster time-to-market and reaching out international customers.
          </p>


        </div>
      </div>
    </li>

    <li>
      <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">RFQ</h4>
          <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> Updated By Abrasivesworld</small></p>
        </div>
        <div class="timeline-body">
          <p>
            Driven by the passion to engage the abrasives communities and allow each community to reach out to other effectively, Request for Quotation (RFQ) is
            developed to help
          </p>
          <p>
            members to search for the right suppliers that offer fair price at the best quality products. This is done without both geographic and language barriers.
          </p>
          <p>
            The key features includes:
          </p>
          <p>
            - Sender of RFQ can decide to send their RFQ by the member group in abrasivesworld or / and to their assigned email addresses.
          </p>
          <p>
            - Qualified bidders shall be alerted and offer their quotation in confidence.
          </p>
          <p>
            - Both Sender and Bidder will have their RFQ and quotation records saved in abrasivesworld archives which will help them to retrieve information whenever
            needed.
          </p>
          <p>
            Go on, log in as the members of Abrasivesworld and enjoy the various features available that benefited our many abrasives members. Afterall, Abrasivesworld
            is created for the abrasives community by the abrasives community.
          </p>
        </div>
      </div>
    </li>


  </ul>
</div>
</div>
<?php
}
?>
</div>
</div>

<style>
  .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
  }
  .timeline:before {
    top: 0;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #eeeeee;
    left: 50%;
    margin-left: -1.5px;
  }
  .timeline > li {
    margin-bottom: 20px;
    position: relative;
  }
  .timeline > li:before,
  .timeline > li:after {
    content: " ";
    display: table;
  }
  .timeline > li:after {
    clear: both;
  }
  .timeline > li:before,
  .timeline > li:after {
    content: " ";
    display: table;
  }
  .timeline > li:after {
    clear: both;
  }
  .timeline > li > .timeline-panel {
    width: 46%;
    float: left;
    border: 1px solid #d4d4d4;
    border-radius: 2px;
    padding: 20px;
    position: relative;
    -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  }
  .timeline > li > .timeline-panel:before {
    position: absolute;
    top: 26px;
    right: -15px;
    display: inline-block;
    border-top: 15px solid transparent;
    border-left: 15px solid #ccc;
    border-right: 0 solid #ccc;
    border-bottom: 15px solid transparent;
    content: " ";
  }
  .timeline > li > .timeline-panel:after {
    position: absolute;
    top: 27px;
    right: -14px;
    display: inline-block;
    border-top: 14px solid transparent;
    border-left: 14px solid #fff;
    border-right: 0 solid #fff;
    border-bottom: 14px solid transparent;
    content: " ";
  }
  .timeline > li > .timeline-badge {
    color: #fff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
    text-align: center;
    position: absolute;
    top: 16px;
    left: 50%;
    margin-left: -25px;
    background-color: #999999;
    z-index: 100;
    border-top-right-radius: 50%;
    border-top-left-radius: 50%;
    border-bottom-right-radius: 50%;
    border-bottom-left-radius: 50%;
  }
  .timeline > li.timeline-inverted > .timeline-panel {
    float: right;
  }
  .timeline > li.timeline-inverted > .timeline-panel:before {
    border-left-width: 0;
    border-right-width: 15px;
    left: -15px;
    right: auto;
  }
  .timeline > li.timeline-inverted > .timeline-panel:after {
    border-left-width: 0;
    border-right-width: 14px;
    left: -14px;
    right: auto;
  }
  .timeline-badge.primary {
    background-color: #2e6da4 !important;
  }
  .timeline-badge.success {
    background-color: #3f903f !important;
  }
  .timeline-badge.warning {
    background-color: #f0ad4e !important;
  }
  .timeline-badge.danger {
    background-color: #d9534f !important;
  }
  .timeline-badge.info {
    background-color: #5bc0de !important;
  }
  .timeline-title {
    margin-top: 0;
    color: inherit;
  }
  .timeline-body > p,
  .timeline-body > ul {
    margin-bottom: 0;
  }
  .timeline-body > p + p {
    margin-top: 5px;
  }
</style>

