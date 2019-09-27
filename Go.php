<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Go extends CI_Controller {

	public function __construct()
	{ parent:: __construct();

		$this->load->model('movietimeM');
	}

	
	public function indexww()
	{	$this->load->view('S/Goto');}
	
	public function index($url)
	{
		$file['goto']=$this->db->where('auto_url',$url)->get('tinyurl')->row(); 
		$this->load->view('S/Goto',$file);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}?>