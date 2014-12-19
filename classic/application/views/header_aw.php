<?php

function check_loggedin($ulog,$uname,& $lng,$link)
{
	$dire="";

	if ($ulog== true)
	{
		if ($link==1)
		{
			$dire="<li><a href='".base_url()."account/my_profile'>".dp_header($lng,"My Account")."</a></li>";
			return $dire;
		}
		else
		{
			$dire="<span style='padding-right:20px;padding-left:20px'><b>".dp_header($lng,"Welcome")." ".dp_header($lng,$uname)."</b></span>";
			return $dire;
		}
	}
	else
	{
		if ($link==1)
		{
			$dire="";
			return $dire;
		}
		else
		{
			$dire="<span style='padding-right:20px;padding-left:20px'><b>".dp_header($lng,"Welcome")." ".dp_header($lng,$uname)."</b></span>";
			return $dire;
		}

	}



}
function dp_header($info_holderdy,$f)
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
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<meta charset="utf-8" />
	<meta name="Author" content="Abrasives Worlld." />
	<link rel="shortcut icon" href="<?php echo base_url();?>/application/ico/icon.png">
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body
		{
			min-width:984px;
		}
		.headerfonte
		{
			font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
			font-size:15px;

		}
		.headerfontc
		{
			font-family:"Century Gothic", CenturyGothic, AppleGothic, sans-serif;
			font-size:14px;

		}
		body{
			background:#ffffff;
			/* Old Browsers */background:-moz-linear-gradient(top, #ffffff 0%, #ffffff 20%, rgba(0, 0, 0, 0.38) 100%);
			/* FF3.6+ */background:-webkit-gradient(left top, left bottom, color-stop(0%, #ffffff), color-stop(20%, #ffffff), color-stop(100%, rgba(0, 0, 0, 0.38)));
			/* Chrome,Safari4+  */background:-webkit-linear-gradient(top, #ffffff 0%, #ffffff 20%, rgba(0, 0, 0, 0.38) 100%);
			/* Chrome10+,Safari5.1+ */background:-o-linear-gradient(top, #ffffff 0%, #ffffff 20%, rgba(0, 0, 0, 0.38) 100%);
			/* Opera 11.10+ */background:-ms-linear-gradient(top, #ffffff 0%, #ffffff 20%, rgba(0, 0, 0, 0.38) 100%);
			/* IE 10+ */background:linear-gradient(to bottom, #ffffff 0%, #ffffff 20%, rgba(0, 0, 0, 0.38) 100%);
			/* W3C */filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#000000', GradientType=0 );
			/* IE6-9 */background-repeat:no-repeat;background-attachment:fixed;
		}
	</style>

	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->


	<link href="<?php echo base_url();?>application/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>application/css/custom.css" rel="stylesheet">

	<!-- start:<script src="http://code.jquery.com/jquery-latest.min.js"> </script> CSS Link-->

	<script src="<?php echo base_url();?>application/js/jquery-latest.min.js"> </script>

	<script src="<?php echo base_url();?>application/js/bootstrap.min.js"> </script>
	<link href="<?php echo base_url();?>application/css/animate.css" rel="stylesheet">



	<script src="<?php echo base_url();?>application/js/bootbox.js"> </script>
	<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<style type="text/css" media="all">
		@import url("<?php echo base_url();?>tinymce/datepicker.css");

	</style>
	<script src="<?php echo base_url();?>tinymce/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>tinymce/jquery.validate.min.js"></script>

	<?php
	if (isset($css)==true)
	{
		foreach($css as &$value)
		{
			echo '<script src="'.$value.'"></script>';
		}
	}
	?>
</head>
<body style="margin:auto;">
	<div id="header" style="background:rgb(158, 31, 99);height:80px;color:#1e73be;">
		<div style="padding-top:5px;margin-left:40px;float:left">
			<!--<span style="font-size:30px;font-family:vollkorn">ABRASIVES WORLD</span>-->
			<img src="<?php echo base_url();?>application/img/AB.png" />
			<br/>
			<img src="<?php echo base_url();?>application/img/ABCH.png" />
		</div>

		<div style="padding-top:7px;text-align:right;padding-right:10px;color:white">

			<span class="headerfonte"><a href="<?php echo base_url();?>setlanguage?lan=en">English</a></span>
			<span class="headerfonte" style="padding-left:20px"><a href="<?php echo base_url();?>setlanguage?lan=cn">中文</a></span>
			<span class="headerfonte" style="padding-left:20px"><a href="http://www.abrasivesworld.com"><?php echo dp_header($infoheader_holder,"Modern Display");?></a></span>

			<?php
			if ($ulogset ==false)
			{
				?>

				<span class="headerfonte" style="padding-left:20px"><a href="<?php echo base_url();?>account/signin"><?php echo dp_header($infoheader_holder,"sign in");?></a></span>
				<span class="headerfonte">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span class="headerfonte"><a  href="<?php echo base_url();?>account/newaccount"><?php echo dp_header($infoheader_holder,"Sign up");?></a></span>
				<?php echo check_loggedin($ulogset,$usernamesses,$infoheader_holder,0);?>
				<?php
			}
			elseif($ulogset==true)
			{
				?>
				<?php echo check_loggedin($ulogset,$usernamesses,$infoheader_holder,0);?>
				<span></span><span class="headerfonte" style="padding-right:15px"><a  href="<?php echo base_url();?>account/logout"><?php echo dp_header($infoheader_holder,"Logout");?></a></span>
				<?php
			}
			?>

		</div>
		<div class="navbar">
			<div class="navbar-inner" style="text-align:right;background-color:transparent;font-size:16px" >
				<ul class="nav">
					<li ><a href="<?php echo base_url();?>"><?php echo dp_header($infoheader_holder,"Home");?></a></li>
					<li ><a href="<?php echo base_url();?>abrasivesworld/about_us"><?php echo dp_header($infoheader_holder,"About Us");?></a></li>
					<li><a href="<?php echo base_url();?>abrasivesworld/contact_us"><?php echo dp_header($infoheader_holder,"Contact Us");?></a></li>
					<li><a href="#"><?php echo dp_header($infoheader_holder,"News");?></a></li>
					<li ><a href="<?php echo base_url();?>abrasivesworld/members"><?php echo dp_header($infoheader_holder,"Members");?></a></li>
					<?php echo check_loggedin($ulogset,$usernamesses,$infoheader_holder,1);?>
				</ul>
			</div>
		</div>
	</div>
