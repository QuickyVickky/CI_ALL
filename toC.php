<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toC extends CI_Controller {

	public function __construct(){ parent:: __construct();$this->load->model('toM');	}

	
	public function index(){	$this->load->view('S/Datatable');}
	public function addmovie()
	{if(($this->session->userdata('em')!="") && ($this->session->userdata('ps')!=""))
		{$this->load->view('template/addmovie');}
		else { redirect('movietime');}}
	public function footable()
	{$this->load->view('S/footable');}
		public function Add_url_page(){$file['sbkuch']=$this->db->get('tinyurl')->result(); 
		$this->load->view('S/addurl',$file);}
	public function Generate_custom_url()
	{$this->movietimeM->Generate_custom_url();}
	public function Go_url($url){$file['vv']=$this->db->where('auto_url',$url)->get('tinyurl')->row(); 
		$this->load->view('S/Go_url',$file);}
	public function delete_url($id){ $this->db->where('id',$id)->delete('tinyurl');
		 redirect('toC/Add_url_page');}
	public function go($vv)
	{$file['yes']=$this->db->where('auto_url',$vv)->or_where('custom_url',$vv)->get('tinyurl')->row(); 
		$this->load->view('S/Goto',$file);}
	public function zpage()
	{$file['Slider']=$this->db->order_by('slider_id','RANDOM')->get('slider')->result();
		$this->load->view('Z/page',$file);}
	public function add_slider()
	{$this->load->view('Z/add_slider');}
	public function add_slider_ok()
	{$this->movietimeM->add_slider_ok();}
	public function add_p()
	{$this->load->view('Z/add_p');}
	public function add_p_ok()
	{$this->movietimeM->add_p_ok();}
	public function ak()
	{$file['dc']=$this->db->get('updatec')->result(); 
		foreach($file['dc'] as $gy) 	{$vt=mt_rand('11','44');	$vii=mt_rand('-44','-41');
		$upok=array("v"=>$gy->v + $vt + $vii);$this->db->where('id',$gy->id)->update('updatec',$upok);}
		print_r($file['dc']);die();
	}
	public function we()
	{$v1="bajrangigautam";$f2=substr($v1,0,2);$l2=substr($v1,-2);$rn=mt_rand('111111','999999');print_r($f2.$l2.$rn);die();}
	///////////////////*********************
	
	public function dt()
	{
		$file['Pro']=$this->db->order_by('id','RANDOM')->limit(13)->get('product')->result();
		$file['Slider']=$this->db->order_by('slider_id','RANDOM')->limit(10)->get('slider')->result();
		$this->load->view('Datatable/tabledata',$file);
	}
	public function fetch_all()
	{
		$reqData = $_REQUEST;
		
        //print_r($reqData); die;
        $columns = array(
            0 => 'id',
            1 => 'firstname',
            2 => 'lastname',
            3 => 'position',
            4 => 'office',
            5 => 'dr',
        );
        $sql = "select * from trydt where st ='Y' " ;
		
		$query = $this->movietimeM->Custom_query($sql);
		//print_r($query);die();
        $totalData = count($query);
        $totalFiltered = $totalData;

       if (!empty($reqData['search']['value'])) {
           $sql .= " AND ( firstname LIKE '" . $reqData['search']['value'] . "%' ";
            $sql .= " OR lastname LIKE '" . $reqData['search']['value'] . "%' ";
            $sql .= " OR position LIKE '" . $reqData['search']['value'] . "%' ";
         	$sql .= " OR office LIKE '" . $reqData['search']['value'] . "%' ) ";
        }
			//echo $sql;die();
				
		 $sql .= " ORDER BY " . $columns[$reqData['order'][0]['column']] . "   "
			. $reqData['order'][0]['dir'] . " LIMIT " . $reqData['start'] . " ," . $reqData['length'] . "   ";  // adding length
        $query = $this->movietimeM->Custom_query($sql);

        $data = array();
        //print_r($data); die();
		

        $cnts = $reqData['start'] + 1;
        foreach ($query as $row) {
            $mixData = array();
		
            $mixData[] = $cnts;
            $mixData[] = $row['firstname'];
            $mixData[] = $row['lastname'];
            $mixData[] = $row['position'];
            $mixData[] = $row['office'];
			$mixData[] = $row['dr'];
	
		
			if($row['img']!="") {
			$mixData[] = "<img src='" . base_url('data/Product/'.$row['img']) . "' style='height:55px;width:55px;'  >";} else { 
			$mixData[] = "<img src= '".base_url('data/dr.jpg')."' style='height:55px;width:55px;'  >";}
			
			  $edit =  "<button class='btn btn-success btn-sm' onclick='modal_edit(".$row['id'].")' title='Edit This Record ".$row['id']."' >
			 <i class='fa fa-edit'></i></button> ";
		
			$mixData[] =  "<button class='btn btn-info btn-sm ' onclick='openmo(".$row['id'].")' title='Delete This Record ".$row['id']."' >
			 <i class='fa fa-trash'></i>  </button> " . $edit; 
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
	
	
	
	//******************
	
function up9(){$file['dc']=$this->db->get('trydt')->result();foreach($file['dc'] as $gy){ $upok=array("st"=>"Y"); $this->db->where('id',$gy->id)->update('trydt',$upok); }}
function deleteRecord(){ extract ($_REQUEST);$upp=array("st"=>"N");$this->db->where('id',$id)->update('trydt',$upp);  /*redirect('toC/dt');*/ }
function pro(){$file['Slider']=$this->db->order_by('slider_id','RANDOM')->get('slider')->result();
$file['Pro']=$this->db->order_by('id','RANDOM')->get('product')->result(); $this->load->view('Datatable/p',$file);}
function autocomplete(){$sql="select * from trydt";$filedata = $this->movietimeM->Custom_query($sql); echo json_encode($filedata);}	 
	
public function owlpage()
	{
		 $filedata = array();
		$sql="select * from slider";
		$filedata = $this->movietimeM->Custom_query($sql);
		
		 $json_data = array(
          "items" =>$filedata,
        );
        echo json_encode($json_data);
		/*$sql="select * from trydt";
		$filedata = $this->movietimeM->Custom_query($sql);
        echo json_encode($filedata);
		
		$file['Slider']=$this->db->order_by('slider_id','RANDOM')->get('slider')->result();
		$this->load->view('Datatable/owl',$file);*/
	}
	public function pview($iddd)
	{$file['prod']=$this->db->where('id',$iddd)->get('product')->row();$this->load->view('Datatable/prod',$file);}
	public function add2temp($iddd) {$file['vpro']=$this->db->where('id',$iddd)->get('product')->row();$pppp=$file['vpro']->id;
	//$file['prod']=$this->db->where('pid',$pppp)->get('ctemp')->row();
		$str = "";	 $letnum = array_merge(range('a','z'), range('0','9'));  $max = count($letnum) - 1;
		for ($i = 0; $i < 22; $i++) {  $c10 = mt_rand(0, $max); $str .= $letnum[$c10]; 	}$any=$str;   
		$ins=array("uid"=>$str,"pid"=>$pppp);$this->db->insert('ctemp',$ins);
		setcookie("w1",$pppp, time() + (300 * 24 * 60 * 60));
		setcookie("w2",$str, time() + (300 * 24 * 60 * 60));
		setcookie("w3",date('Y-m-d H:i:ss'), time() + (300 * 24 * 60 * 60));
		echo current_url(); }

		/*echo get_cookie('w1')."<br>";
		echo get_cookie('w2')."<br>";
		echo get_cookie('w3')."<br>";             */
/*echo base_url(uri_string())."<br>";;
echo   ($_SERVER["REQUEST_URI"])."<br>";*/

	function convertToIndianCurrency($number) {
    $no = round($number);
    $decimal = round($number - ($no = floor($number)), 2) * 100;    
    $digits_length = strlen($no);    
    $i = 0;
    $str = array();
    $words = array(
        0 => '',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;            
            $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
        } else {
            $str [] = null;
        }  
    }
    
    $Rupees = implode(' ', array_reverse($str));
    $paise = ($decimal) ? "And Paise " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
    echo ($Rupees ? 'Rupees ' . $Rupees : '') . $paise . " Only";
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	
}?>