<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class movietime extends CI_Controller {

	public function __construct()
	{ parent:: __construct();

		$this->load->model('movietimeM');
		$this->load->library('calendar');

	}

	
	public function index()
	{
		if(($this->session->userdata('em')=="") && ($this->session->userdata('ps')==""))
		{
		$this->load->view('All/movie');
		} else{ redirect ('movietime/home_login');}
	}

public function register()
	{
		$this->movietimeM->reg();

	}

public function login()
	{
		if(($this->session->userdata('em')=="") && ($this->session->userdata('ps')==""))
		{
			$this->movietimeM->logincheck();
		}
		else{ redirect ('movietime/tableadm');}
	}


public function adm()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			$file['alldata']=$this->db->get('moviedatabase')->result();
			$this->db->from('moviedatabase');
			$this->db->join('shows',"shows.MId=moviedatabase.id");
			$file['alldatav']=$this->db->get()->result();
			$this->load->view('All/adm',$file);
		}

		else{ redirect('movietime');}
	}




public function logout()
	{
		$this->session->unset_userdata('em');
		$this->session->unset_userdata('ps');
		redirect('movietime/home_login');
		
	}

public function addmovie()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{$this->load->view('All/addmovie');}
		else { redirect('movietime');}
	}



public function addnowmovie()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{$this->movietimeM->addnowmovie();}{ redirect('movietime');}
	}
public function delete($id)
	{
		//echo $id; die();
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{ $this->movietimeM->delete($id); }else { redirect('movietime');}
	}
	
	public function deleteShow($id)
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{ $this->movietimeM->deleteShow($id); }else { redirect('movietime');}
	}

public function addnowshow()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{$this->movietimeM->addnowshow();}
			else{ redirect('movietime');}
	}

public function addshow()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			$file['sb']=$this->db->get('moviedatabase')->result();
			$this->load->view('All/addshow',$file);
		}

		else
					{ redirect('movietime');}
	}

	public function editmovie($id)
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			$this->db->where('id',$id);
			$file['one']=$this->db->get('moviedatabase')->row();
			$this->load->view('All/editmovie',$file);
			
		} else { redirect('movietime');}
	}
	
	
	public function editShow($id)
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			//$this->db->from('moviedatabase');
			//$this->db->join('shows','moviedatabase.id=shows.Mid');
			//$this->db->where('shows.id',$id);
			$file['one']=$this->db->where('shows.id',$id)->get('shows')->row();
			$file['movie']=$this->db->get('moviedatabase')->result();
			
			$this->load->view('template/e_show',$file);
			
		} else { redirect('movietime');}
	}

		public function updatemovie($id)
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			$this->movietimeM->updatemovie($id);
			
		}

		else { redirect('movietime');}
	}
	public function temp()
	{
		$this->load->view('template/sidebar');
		$this->load->view('template/form');
	}
public function home_login()
	{
		if(($this->session->userdata('em')=="") && ($this->session->userdata('ps')==""))
		{
		//$this->load->view('template/sidebar');
		$this->load->view('template/login'); }
		else { redirect('movietime/adm');}
	}


public function homeadm()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			$file['vv']=$this->db->get('moviedatabase')->result();
			$this->db->order_by('title','descs');
			$file['AF']=$this->db->get('moviedatabase')->result();
			$this->db->from('moviedatabase');
			$this->db->join('shows',"shows.MId=moviedatabase.id");
			$file['cc']=$this->db->get()->result();
			$this->load->view('template/sidebar',$file);
			$this->load->view('template/table',$file);
		}

		else{ redirect('movietime');}
	}
	
	
public function multiDel()
	{
		if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{
			$file['multi']=$this->input->post('chk');
			if($file['multi']=="") {echo "Not selected for delete ";} 
			else {
			foreach($file['multi'] as $m)
		{
		$this->db->where('id',$m);
		$this->db->delete('moviedatabase');
			
			}redirect('movietime/homeadm');}
		}
	else{ redirect('movietime');}
	}

















}?>
