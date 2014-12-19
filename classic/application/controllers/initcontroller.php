<?php
class InitController extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->helper('htmlpurifier');

	}

	public function index_bk($cat="in")
	{

	$this->load->library('session');
	if (!isset($this->session->userdata))
	{
	$this->session->set_userdata('default_language', 'en');
	}

	// load the language module
	$this->load->model('ablang');
	$data = array();
	$ld=$this->ablang->get_infoarray($this->session->userdata('default_language'),"header_info");
	$ldh=$this->ablang->get_infoarray($this->session->userdata('default_language'),"home_page");

	$data['infoheader_holder']=$ld;
	$data['homepage_holder']=$ldh;

	$ulogged=false;
	$uname="guest";

	// check whether the user is already logged inet_ntop
	if ($this->session->userdata('signedinuser')== true)
	{
	$ulogged=true;
	$uname=$this->session->userdata('user_name');
	}
	$data['ulogset']=$ulogged;
	$data['usernamesses']=$uname;
	/*
	$this->session->set_userdata('default_language', $ldh[0]->user_language);
	$this->session->set_userdata('user_id', $ldh[0]->user_email);
	$this->session->set_userdata('signedinuser',true);
	$this->session->set_userdata('usernumid',$ldh[0]->recordno);
	$this->session->set_userdata('user_name',$ldh[0]->user_name);
	$this->session->set_userdata('user_orgname',$ldh[0]->user_orgname);
	*/

	// load the article_module
	$this->load->model('article_model');

	// load the banner_module
	$this->load->model('banner_model');
	$bannerLeft = $this->banner_model->list_banner('left');

	$ad=$this->article_model->get_article_head(0,10);
	$data['article_holder']=$ad;
	$data['bannerLeft'] = $bannerLeft;
	$data['usrseslang']=$this->session->userdata('default_language');
	$this->load->helper('url');
	
	$this->load->helper('htmlpurifier');

	$this->load->view("header_aw",$data);
	// load ad carousel;

	$this->load->view("home/cads",$data);
	// load article
	$this->load->view("home/article_bview",$data);
	$this->load->view("footer");

	}
	public function index($cat="in")
	{
	$this->load->library('session');
	if (!isset($this->session->userdata))
	{
	$this->session->set_userdata('default_language', 'en');
	}

	// load the language module
	$this->load->model('ablang');
	$data = array();
	$ld=$this->ablang->get_infoarray($this->session->userdata('default_language'),"header_info");
	$ldh=$this->ablang->get_infoarray($this->session->userdata('default_language'),"home_page");

	$data['infoheader_holder']=$ld;
	$data['homepage_holder']=$ldh;

	$ulogged=false;
	$uname="guest";

	// check whether the user is already logged inet_ntop
	if ($this->session->userdata('signedinuser')== true)
	{
	$ulogged=true;
	$uname=$this->session->userdata('user_name');
	}
	$data['ulogset']=$ulogged;
	$data['usernamesses']=$uname;
	/*
	$this->session->set_userdata('default_language', $ldh[0]->user_language);
	$this->session->set_userdata('user_id', $ldh[0]->user_email);
	$this->session->set_userdata('signedinuser',true);
	$this->session->set_userdata('usernumid',$ldh[0]->recordno);
	$this->session->set_userdata('user_name',$ldh[0]->user_name);
	$this->session->set_userdata('user_orgname',$ldh[0]->user_orgname);
	*/

	// load the article_module
	$this->load->model('article_model');

	// load the banner_module
	$this->load->model('banner_model');
	$bannerLeft = $this->banner_model->list_banner('left');
	$bannerRight = $this->banner_model->list_banner('right');

	$ad=$this->article_model->get_article_head(0,10);
	$data['article_holder']=$ad;
	$data['bannerLeft'] = $bannerLeft;
	$data['bannerRight'] = $bannerRight;
	$data['usrseslang']=$this->session->userdata('default_language');



	$this->load->helper('url');
	$this->load->view("header_aw",$data);
	// load ad carousel;
	$this->load->view("home/cads",$data);
	// load article
	$this->load->view("home/article_bview",$data);
	$this->load->view("footer");

	}
	public function my_article()
	{
	$this->load->library('session');
	if (!isset($this->session->userdata))
	{
	$this->session->set_userdata('default_language', 'en');
	}

	if ($this->session->userdata('signedinuser')== true)
	{
	}
	else
	{
	$this->load->helper('url');
	$this->load->view("redirect");
	return;
	}
	// load the language module
	$this->load->model('ablang');
	$data = array();
	$ulogged=false;
	$uname="guest";

	// check whether the user is already logged inet_ntop
	if ($this->session->userdata('signedinuser')== true)
	{
	$ulogged=true;
	$uname=$this->session->userdata('user_name');
	}
	$data['ulogset']=$ulogged;
	$data['usernamesses']=$uname;

	$ldh=$this->ablang->get_infoarray($this->session->userdata('default_language'),"header_info");

	$ld=$this->ablang->get_infoarray($this->session->userdata('default_language'),"my_article");


	$data['info_holder']=$ld;
	$data['infoheader_holder']=$ldh;


	$this->load->helper('url');
	$this->load->view("header_aw",$data);
	$this->load->view("account/view_myarticle",$data);
	$this->load->view("footer");
	}



}