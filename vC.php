<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vC extends CI_Controller {
	

	public function __construct(){ parent:: __construct();$this->load->model('toM');
	
	date_default_timezone_set("Asia/calcutta");
	
		}

	
	public function index()
	{	$this->load->view('VVV/user_register');}
	
	public function add()
	{	
	extract($_REQUEST);
	$name=$this->input->post('name');$email=$this->input->post('email');$mob=$this->input->post('mob');
	
	$ins=array( "Name"=>$name,"Email"=>$email,"Mobile"=>$mob);
	$this->db->insert('register',$ins);
	}
	public function tables()
	{	$this->load->view('VVV/tables');}
	public function nt()
	{	
	
	$this->load->view('VVV/normal_table');}
	
	public function get_all_data()
	{
		$reqData = $_REQUEST;
	
        $columns = array(
            0 => 'my_id',
            1 => 'Name',
            2 => 'Email',
            3 => 'Mobile',
            4 => 'DOB',
            5 => 'Gender',
			6 => 'Course',
        );
        $sql = "select my_id,Name,Mobile,Email,DOB,Gender,Course,Hobbies,User_img,Profile,User_dr,User_st from register where User_st ='A'  " ;

		$query = $this->movietimeM->Custom_query($sql);
			
		$totalData = count($query);
        $totalFiltered = $totalData;

       if (!empty($reqData['search']['value'])) {
           $sql .= " AND ( Name like '%" . $reqData['search']['value'] . "%' ";
            $sql .= " OR Email LIKE '%" . $reqData['search']['value'] . "%' ";
            $sql .= " OR Mobile LIKE '%" . $reqData['search']['value'] . "%' ";
         	$sql .= " OR Course LIKE '%" . $reqData['search']['value'] . "%' ) ";
        }
			//echo $sql;die();
				
		 $sql .= " ORDER BY " . $columns[$reqData['order'][0]['column']] . "   "
		. $reqData['order'][0]['dir'] . " LIMIT " . $reqData['start'] . " ," . $reqData['length'] . "   ";  // adding length
        $query = $this->movietimeM->Custom_query($sql);

        $data = array();
      
        $cnts = $reqData['start'] + 1;
        foreach ($query as $row) {
            $mixData = array();
		
            $mixData[] = $cnts;
       
			$mixData[] ='<input class="delete"  type="checkbox" name="id[]" data-id="'.$row['my_id']. '"  value="'.$row['my_id']. '" id="chk">'." ".$row['Name'];
            $mixData[] = $row['Email'];
            $mixData[] = $row['Mobile'];
            $mixData[] = $row['DOB'];
			if($row['Gender']=="M") {  $mixData[] =  "Male" ; }
			else if($row['Gender']=="F") {  $mixData[] =  "Female"  ; }
			$mixData[] = $row['Course'];
            $mixData[] = $row['Hobbies'];
			if($row['User_img']!="") {
			$mixData[] = "<img src='" . base_url('data/tryok/'.$row['User_img']) . "' style='height:55px;width:55px;'  >";} else { 
			$mixData[] = "<img src= '".base_url('data/dr.jpg')."' style='height:55px;width:55px;'  >";}
			 $edit =  "<button class='btn btn-success btn-sm' onclick='edit(".$row['my_id'].")' title='Edit This Record ".$row['my_id']."' >
			 <i class='fa fa-edit'></i></button> ";
			 
			  $swl =  "<button class='btn btn-danger btn-sm' onclick='swl_del(".$row['my_id'].")' >
			 <i class='fa fa-ban'></i></button> ";
			  
			  $mixData[] =  "<button class='btn btn-info btn-sm ' onclick='deleteOk(".$row['my_id'].")' title='Delete This Record ".$row['my_id']."' >
			 <i class='fa fa-trash'></i>  </button> " . $edit . $swl; 
			//	$mixData[] =  $edit;
			
			
			
			$data[] = $mixData;
            $cnts++;
        }
        $json_data = array(
            "draw" => intval($reqData['draw']), 
            "recordsTotal" => intval($totalData), 
            "recordsFiltered" => intval($totalFiltered), 
            "data" => $data 
        );
        echo json_encode($json_data); 
		
	}
	
	
	public function add_ok()
	{	
	extract($_REQUEST);
	
			$config['upload_path']='./data/tryok'; $config['allowed_types'] = 'jpg|png|jpeg|JPG|JPEG|PNG';
			$config['max_size']='5000';	$config['encrypt_name']=true;
			$config['max_width']='1500';$config['max_height']='1500';
			$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('s_User_img'))
		{$file['imgerr']=$this->upload->display_errors();	print_r($file['imgerr']); die();}
		else {
		if($s_gender!="M") { $s_gender="F";}
		$data_of_img=array('upload_data'=>$this->upload->data());
			$ins=array( "Name"=>$s_name,"Email"=>$s_email,"Mobile"=>$s_mob,"DOB"=>$s_dob,"Course"=>$s_course,
			"Gender"=>$s_gender,"Hobbies"=>implode(',',$s_hob),"User_img"=>$data_of_img['upload_data']['file_name']);
			$this->db->insert('register',$ins); }
			redirect('vC/tables');
	}
	public function edit_one_data() {
        extract($_REQUEST);
	
        $sql = "select * from register where my_id=" . $id_for_edit;
        $data = $this->movietimeM->Custom_query($sql);
        echo json_encode(array('oneRow' => $data));
		
    }
	
	
	
	 function Update_ok()      {
		  extract($_REQUEST);
		 $table="register"; $config['upload_path']='./data/tryok/';$config['allowed_types']='gif|jpg|png|bmp|jpeg';
			$config['max_size']='1500';$config['max_width']='1000';
			$config['max_height']='1000';  $config['encrypt_name']=true; $this->load->library('upload',$config);	
		 
		  if(!empty($_FILES['e_User_img']['name']))
		{  if(!$this->upload->do_upload('e_User_img'))
			{  $file['imgErr']=$this->upload->display_errors();   }
			else
			{
				$this->db->where('my_id',$hidden_id_for_edit); $oneData=$this->db->get($table)->row();
				$path="./data/tryok/";   $image=$oneData->User_img;
				$dir=opendir($path);
				while($file=readdir($dir)) {  if($file==$image)   { unlink($path.$image); 	}  }
				$data=array('upload_data'=>$this->upload->data());
				
				$update_img_ok=array( "User_img"=>$data['upload_data']['file_name'] );
				$this->movietimeM->Update_data($table, ['my_id' => $hidden_id_for_edit], $update_img_ok);
			}
	}
	$update=array(	"Name"=>$e_name,"Email"=>$e_email,"Mobile"=>$e_mob,"DOB"=>$e_dob,"Course"=>$e_course,
	"Gender"=>$e_gender,    "Hobbies"=>implode(',',$e_hob)     );
	$this->movietimeM->Update_data($table, ['my_id' => $hidden_id_for_edit], $update);
	$this->session->set_flashdata(['nnn' => 'Data Updated successfully']);
	}
		 
        // extract($_REQUEST); 
    // 	 $update=array( "Name"=>$e_name,"Email"=>$e_email,"Mobile"=>$e_mob,"DOB"=>$e_dob,"Course"=>$e_course,"Gender"=>$e_gender);
        //------------print_r($data); die;
 //      $this->movietimeM->Update_data($table, ['my_id' => $hidden_id_for_edit], $update);
       //------------$this->session->set_flashdata(['msg' => 'Data Updated successfully', 'cls' => 'alert-success']);
     	//--------------redirect('vC/tables');
		
	
	 function add_data_to()      {  
       if($_POST["action"] == "add_data")  
       {  
            $insert_data = array(  
                 'Name' => $this->input->post('name'),  
                 'Email' => $this->input->post("email"),  
				 'DOB' => $this->input->post("dob"),  
				 'Mobile' => $this->input->post("mob"),  
				 'Course' => $this->input->post("course"),  
                 'User_img' => $this->upload_image() 
            );  
            $this->db->insert('register',$insert_data);  
         }  
  }  
  
  
  function upload_image()  
  {  
       if(isset($_FILES["User_img"]))  
       {  
	   $anystr = "";	 $letnum = array_merge(range('A','Z'), range('a','z'), range('0','9'));  $max = count($letnum) - 1;
		for($i = 0; $i < 31; $i++) {  $c10 = mt_rand(0, $max); $anystr .= $letnum[$c10]; 	}
		
            $extension = explode('.', $_FILES['User_img']['name']);  
            $new_name = mt_rand('11','99') .$anystr . '.' . $extension[1];  
            $path = './data/tryok/' . $new_name;  
            move_uploaded_file($_FILES['User_img']['tmp_name'], $path);  
            return $new_name;  
       }  
  }  
	function save(){ $data=$this->movietimeM->save_ajax();echo json_encode($data);}
	
	  function deleteOk() {
        //$id = $request->id;
        extract($_REQUEST); echo $id;   $tbl = "register";
   $data = $this->movietimeM->Update_data('register', ['my_id' => $id], ['User_st' => 'D']);
    }
	
	 function ajax_add()
	{		
	extract($_REQUEST);
		$data = array(
				'Name' => $name,  
                 'Email' => $email,    'State_fk' => $state,    'City_fk' => $city,    'Area_fk' => $area,  
				 'DOB' => $dob,  
				 'Mobile' => $mob,  
				 'Course' => $course,  
				 'Hobbies' => implode(',',$hob),  
                'User_img' => $this->upload_image() 
			);
			//$this->db->insert('register',$data);
		$this->movietimeM->save($data);
		// $this->session->set_flashdata(['msg' => '1 Record Inserted successfully', 'cls' => 'alert-success']);
		//echo json_encode(array("status" => TRUE));
		//echo json_encode($data);
	}
	
	  function deleteOk_all() {   extract($_REQUEST);   echo $id; $table = "register"; 
	   $abc=$this->db->where('my_id',$id)->get($table)->row();
		$image=$abc->User_img; $path="data/tryok/";   $dir=opendir($path);
		while($file=readdir($dir)) { if($file==$image) {unlink($path.$image);}  $this->db->where('my_id',$id)->delete($table);  }	
		}


	
	  function deleteOk_all22() {   extract($_REQUEST);   //print_r($id_for_delete_all); die(); 
	   $table = "register";
	  foreach($id_for_delete_all as $m_del) {
		$update_mul=array( "User_st"=>"D");
		$this->movietimeM->Update_data($table, ['my_id' => $m_del], $update_mul);}
	}
	
	//*******************   16-07-2018******************
 function fdata(){ extract($_REQUEST); 
	/*$vvvvdata = array(
           "Total_Records" => intval(count($vdata)), 
            "data" => $vdata 
        );*/
	//$vdata=$this->db->where('User_st','A')->get('register')->result_array(); 
	 echo json_encode($this->db->where('User_st','A')->order_by('my_id','desc')->get('register')->result_array());
	 
 }
 function fdatac(){ extract($_REQUEST); 
	 echo json_encode($this->db->where('User_st','A')->order_by($sorttok,'desc')->get('register')->result_array());
}
 function fdatacd(){ extract($_REQUEST); 
	 echo json_encode($this->db->where('User_st','A')->order_by($sorttok,'asc')->get('register')->result_array());
}
 function fetch_state_list(){
	echo json_encode($this->db->where('st','A')->get('state_list')->result_array());
}
function fetch_city_list_by_state_id(){  extract($_REQUEST);  
$city_data=$this->db->where('state_fk',$state_id_for_city)->get('city_list')->result_array();
	echo json_encode($city_data);
}
function fetch_area_list_by_city_id(){  extract($_REQUEST);  
	echo json_encode($this->db->where('city_fk',$city_id_for_area)->get('area_list')->result_array());
}
 function ajax_add_area()
	{		$table="area_list"; extract($_REQUEST);
		$data_in_array = array('area_name' => $area_name, 'pincode' => $area_pin, 'state_fk' => $state_a, 'city_fk' => $city_a);
		$this->movietimeM->insert_one($table,$data_in_array);
	}

//////*****************  16-07-2018******************
public function vvh()
	{	$this->load->view('VVV/pagi_table');}
//////*****************  27-07-2018******************
public function s(){	
if ($this->session->userdata('login_id')!="" ){ $this->load->view('VVV/s'); }
else { redirect('vC/nt'); }
}


public function verifying_you_lgn(){	extract($_REQUEST);
		$vfg=$this->db->where('Password',$pass_l)->where('Email',$email_l)->get('register')->row();
		if(count($vfg)>0) {
			$this->session->set_userdata('login_id',$vfg);//redirect('vC/s');
			$data="Success" ;
	 echo json_encode($data);
			}
	else { $data="Wrong Email or Password !!! " ;
	echo json_encode($data);
	 }

}



function do_upload()
{       
    $this->load->library('upload');

    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    
		$this->upload->initialize($this->set_upload_options());
		$this->upload->do_upload();
    }
	
}

private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = './data/W/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;
	//  print_r($config);	die;
	return $config;
}

function rty(){
	$data = array(            
          'abc' => "ABCD",
            'cde' =>"1234",
		  );
	$data = array(  
			$data['abc'],          
          'def' => "XYZ",
          );

print_r($data);die;
	
	
}

public function tf()
{ 
 $sql = "select my_id,Name,Mobile,Email,Gender,Course,Hobbies from register where User_st ='A'  " ;

		$query = $this->movietimeM->Custom_query($sql);
			
		
		foreach ($query as $oo) {
			//print_r($query);die();
		echo $oo['Mobile']."<br/>";

		}
 }
	
function vy(){ 
	//$yt=$this->j2_get_yt_subs();
	//$file['iop']= array('yt' => $yt );
	//print_r($yt);die();
	$this->load->view('yt');
	//$this->load->view('yt',$file);   
}

  function j2_get_yt_subs($channel_id) {
    $api_key = 'AIzaSyAypRqqW2Ie_gq4uRpjwSr-vw_aBwa08Qk';
    //$channel_id = 'UCq-Fj5jknLsUf-MWSy4_brA';
    if(!$api_key || !$channel_id)
        return false;
    $youtube_url = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id='.$channel_id.'&key='.$api_key;
    $data = @file_get_contents($youtube_url);
    $json_data = json_decode($data);
    if(!$json_data)
        return false;
    $subs = $json_data->items[0]->statistics->subscriberCount;
    return $subs;
  }


function get_yt_sub() { extract($_REQUEST);
		$yt=$this->j2_get_yt_subs($channel_id);
		echo json_encode($yt);	
}

	function nap()
	{
		$v = file_get_contents('https://newsapi.org/v2/top-headlines?sources=google-news-in&apiKey=9f2872b8a1f3476796578d5fd3b24296');
        $s = json_decode($v, true);
        $file['news'] = $s;
		//print_r($s);die;
        $this->load->view('VVV/nap', $file);

	}

	public function GetData_onChange_By_Graph() { extract($_REQUEST);   //$s= $this->Data_model->Custome_query($sql."and created_at ='$LB' and category_id='1' ")[0]['y']; //$Ins[]= array("label"=>$LB,"y"=>$s*1); 
  
	 $date_from =1530383400;$date_to= 1532975400; $product_wise_graph_id="Genius";
	 
	 	 if($product_wise_graph_id!="all") { $p="and 	p_name= '$product_wise_graph_id'";} else { $p=NULL; }
		 
	  	$sql="select sum(amount) as y from si_transactions_detail where status='A' $p ";

for ($i=$date_from; $i<=$date_to; $i+=86400) {  $LB=date("Y-m-d", $i); $TH=date('d',strtotime($LB));
$s= $this->movietimeM->Custom_query($sql."and created_at ='$LB' and category_id='1' ")[0]['y'];
$Ins[]= array("label"=>"Installation" ,"t"=>$TH,"y"=>$s*1);  
}
for ($i=$date_from; $i<=$date_to; $i+=86400) {  $LB=date("Y-m-d", $i); $TH=date('d',strtotime($LB));
$s= $this->movietimeM->Custom_query($sql."and created_at ='$LB' and category_id='2' ")[0]['y'];
$Up[]= array("label"=>"Updatation" ,"t"=>$TH,"y"=>$s*1);  
}
for ($i=$date_from; $i<=$date_to; $i+=86400) {  $LB=date("Y-m-d", $i); $TH=date('d',strtotime($LB));
$s= $this->movietimeM->Custom_query($sql."and created_at ='$LB' and category_id='3' ")[0]['y'];
$Lan[]= array("label"=>"LAN" ,"t"=>$TH,"y"=>$s*1);  
}
for ($i=$date_from; $i<=$date_to; $i+=86400) {  $LB=date("Y-m-d", $i); $TH=date('d',strtotime($LB));
$s= $this->movietimeM->Custom_query($sql."and created_at ='$LB' and category_id='4' ")[0]['y'];
$Con[]= array("label"=>"Conversion" ,"t"=>$TH,"y"=>$s*1);  
}
 $dataSeries=array_merge($Ins,$Up,$Lan,$Con);

echo json_encode($dataSeries);
		 
		 
		 /*
		 $data['Installation'] = $this->Data_model->Custome_query($sql."and category_id='1'")[0]['total'];
		  $data['Updatation'] = $this->Data_model->Custome_query($sql."and category_id='2'")[0]['total'];
		  $data['LAN'] = $this->Data_model->Custome_query($sql."and category_id='3'")[0]['total'];
		  $data['Conversion'] = $this->Data_model->Custome_query($sql."and category_id='4'")[0]['total'];
		  echo json_encode($data); 	*/	  
		  // echo "<pre>";print_r($sql);die;

	}
	public function chart()
	{	$this->load->view('VVV/chart');}











































































































































	/*function deleteOk1($id) 
	{ 
	extract ($_REQUEST);
	$dele=array("User_st"=>"D");
	$this->db->where('my_id',$id)->update('register',$dele);
	$this->session->set_flashdata(['msg' => '1  Record Deleted successfully', 'cls' => 'alert-success']);
	redirect('vC/tables');
	
	}*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
public function ang(){$this->load->view('VVV/ang');}	
}?>