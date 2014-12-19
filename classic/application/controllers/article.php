<?php
class article extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->helper('htmlpurifier');

	}

	public function index()
	{
	$this->load->library('session');
	if (!isset($this->session->userdata))
	{
	$this->session->set_userdata('default_language', 'en');
	}
	$id=-1;
	if (is_numeric($this->input->get('id')) ==true)
	{
	$id=$this->input->get('id');
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
	
	$ld=$this->ablang->get_infoarray($this->session->userdata('default_language'),"header_info");
	
	$data['infoheader_holder']=$ld;
	
	// load the article_module
	$this->load->model('article_model');
	$ad=$this->article_model->get_article_details($id);
	$data['article_holder']=$ad;
	
	$this->load->helper('url');
	$this->load->view("header_aw",$data);
	$this->load->view("article/article_full",$data);
	$this->load->view("footer");
	
	}
	public function article_search()
	{
	$this->load->library('session');
	if (!isset($this->session->userdata))
	{
	$this->session->set_userdata('default_language', 'en');
	}
	
	// load the language module
	$this->load->model('ablang');
	$data = array();
	$ldh=$this->ablang->get_infoarray($this->session->userdata('default_language'),"home_page");
	
	$data['usrseslang']=$this->session->userdata('default_language');
	$data['homepage_holder']=$ldh;
		
	$articlestartdate="";
	$articleenddate="";
	$sarticle_language="";
	$sartcile_title="";
	$sarticle_regcomp="";
	$sarticle_regcompcoun="";
	
	$articlestartdate=$this->input->post('articlestartdate');
	$articleenddate=$this->input->post('articleenddate');
	$sarticle_language=$this->input->post('sarticle_language');
	$sartcile_title=$this->input->post('sartcile_title');
	$sarticle_regcomp=$this->input->post('sarticle_regcomp');
	$sarticle_regcompcoun=$this->input->post('sarticle_regcompcoun');
	$sarticle_content=$this->input->post('sartcile_content');
	
	$sarticle_lang=$this->input->post('sartcile_lang');
	$data['sarticle_lang']=$sarticle_lang;
	$particle=0;
	$earticle=0;
	
	if ($this->input->post('particle') == 1 or $this->input->post('particle') == 0)
	{
	$particle=$this->input->post('particle'); 
	}
	if ($this->input->post('earticle') == 1 or $this->input->post('earticle') == 0)
	{
	$earticle=$this->input->post('earticle'); 
	}
	$initlang="0";
	
	$sarticle_link=$this->input->post('slink');
	$this->load->helper('htmlpurifier');
	$initlang=$this->input->post('einit');
	// load the article_module
	$this->load->model('article_model');
	$data['sful']=$sarticle_link;
	$ad=$this->article_model->article_search($articlestartdate,$articleenddate,$sarticle_language,$sartcile_title,$sarticle_regcomp,$sarticle_regcompcoun,$sarticle_content,$particle,$earticle,$sarticle_lang);
	$data['article_holder']=$ad;
		if ($initlang=="1")
		{
		$this->load->view("article/article_search",$data);
		}
		else
		{
		$this->load->view("article/article_search_lang",$data);
		
		}
	
	}

}