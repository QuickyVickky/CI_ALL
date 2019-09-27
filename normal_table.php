<html>
<head>
<title>Normal_Table_with_Ajax</title>
<link rel="shortcut icon" href="https://bit.ly/2uCbnne" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/styles/alert-bangtidy.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/styles/alert-blackgloss.min.css">
  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script--->
<script src="https://code.jquery.com/jquery-3.3.1.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.js"></script>


</head>
<body>

<a class="icon" data-toggle="tooltip" title="" target="_blank" href="https://web.whatsapp.com://send?phone=+917878&amp;text=I%20want%20to%20Buy%20this%20product%20https://www.flipkart.com/mi-band-2/p/itmf3m9cjdxxp87a?pid=SBNERQQZRPKTRE5A&lid=LSTSBNERQQZRPKTRE5ACCSNBM&fm=neo/merchandising&iid=M_2ac6891e-2baa-455e-857c-8e54b75f0f0a_21.P2Z5AQ2KYO31&ppt=Homepage&ppn=Homepage&otracker=hp_omu_Best+of+Smart+Wearables_3_Heart+Rate+Monitor_P2Z5AQ2KYO31_2&cid=P2Z5AQ2KYO31" data-original-title="9081097777"><i class="fa fa-whatsapp"></i></a>


<h2 align="center" style="color:red"> <button class='btn btn-primary' onClick="$('#login_modal').modal('show');" id="login_modal_btn"  > Log In <i class='fa fa-user'></i>  </button> 
Normal_Table_with_Ajax
  <button class='btn btn-success' onclick='btn_two()' id="btn_two"  > Ajax Add <i class='fa fa-plus'></i> <i class="fa fa-refresh  fa-spin  fa-fw"></i> </button>
</h2>

<?php  $a = '1/2';

if (strpos($a, '/') !== false) {echo 'yes';} else { echo 'not';}

?>

<br />
<p> hdkfdk dufhdubcju fhsd jdfdjdf<code> wr frff fg gtde ye </code>rjfhurw ufudf</p>

<table align="center">
  <div class="col-sm-3" align="center">

  <label>Enter ID</label>
  <input class="form-control" type="text" name="channel_id" id="channel_id" onkeyup="myFunction(this.value)">
  </div>
 

<table>

<h3 id="sub_tt"> </h3>
<h2 id="sub_t"> </h2>

<br />
<div class="col-sm-5" id="errdiv">
  <?php if ($this->session->flashdata('cls') != '') { ?>
  <div class="alert-box alert <?php echo $this->session->flashdata('cls'); ?> "> <?php echo $this->session->flashdata('msg'); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>
  <?php } ?>
</div>
<button class='btn btn-primary btn-sm '  id="add_area" onClick=" $('#area_modal').modal('show');Get_All_State_Ok_a();"  > Add Area <i class='fa fa-plus'></i> </button>
<button class='btn btn-danger btn-sm '  id="dlt_all" onClick="getForDeleteValue()"  > Bulk Delete <i class='fa fa-trash'></i> </button>

<div class="form-group col-sm-3 pull-right">
<input type="text" id="search_input" class="form-control" placeholder="Search... "></input>
</div>

<div class="userdataajax table-responsive">
  <table id="normal" class="table table-responsive table-bordered"   align="center" >
    <thead>
      <tr id="">
        <th><input id="example-select-all" type="checkbox" onClick="selectAll(this)">
          # ID </th>
        <th>Name &nbsp;&nbsp;  <button class="btn btn-info btn-sm pull-right" id="c1" value="Name" onClick="my_normal_table_sort(this.value);$('#c1').hide();$('#c1_').show();"> <i class="fa fa-arrow-up"  ></i> </button><button class="btn btn-primary btn-sm pull-right" id="c1_" value="Name" onClick="my_normal_table_sort_asc(this.value);$('#c1_').hide();$('#c1').show();"> <i class="fa fa-arrow-down"></i> </button></th>
        <th>Mobile  &nbsp;&nbsp;  <button class="btn btn-info btn-sm pull-right" id="c2" value="Mobile"  onClick="my_normal_table_sort(this.value);$('#c2').hide();$('#c2_').show();"> <i class="fa fa-arrow-up" ></i> </button> <button class="btn btn-primary btn-sm pull-right" id="c2_" value="Mobile"  onClick="my_normal_table_sort_asc(this.value);$('#c2_').hide();$('#c2').show();"> <i class="fa fa-arrow-down" ></i> </button></th>
        <th>Email &nbsp;&nbsp;  <button class="btn btn-info btn-sm pull-right" id="c3" value="Email"  onClick="my_normal_table_sort(this.value);$('#c3').hide();$('#c3_').show();"> <i class="fa fa-arrow-up" ></i> </button><button class="btn btn-primary btn-sm pull-right" id="c3_" value="Email"  onClick="my_normal_table_sort_asc(this.value);$('#c3_').hide();$('#c3').show();"> <i class="fa fa-arrow-down" ></i> </button></th>
        <th>DOB &nbsp;&nbsp;   <button class="btn btn-info btn-sm pull-right" id="c4" value="DOB"  onClick="my_normal_table_sort(this.value);$('#c4').hide();$('#c4_').show();"> <i class="fa fa-arrow-up" ></i> </button><button class="btn btn-primary btn-sm pull-right" id="c4_" value="DOB"  onClick="my_normal_table_sort_asc(this.value);$('#c4_').hide();$('#c4').show();"> <i class="fa fa-arrow-down" ></i> </button></th>
        <th>Gender  &nbsp;&nbsp; <button class="btn btn-info btn-sm pull-right" id="c5" value="Gender"  onClick="my_normal_table_sort(this.value);$('#c5').hide();$('#c5_').show();"> <i class="fa fa-arrow-up" ></i> </button><button class="btn btn-primary btn-sm pull-right" id="c5_" value="Gender"  onClick="my_normal_table_sort_asc(this.value);$('#c5_').hide();$('#c5').show();"> <i class="fa fa-arrow-down" ></i> </button></th>
        <th>Course  &nbsp;&nbsp; <button class="btn btn-info btn-sm pull-right" id="c6" value="Course"  onClick="my_normal_table_sort(this.value);$('#c6').hide();$('#c6_').show();"> <i class="fa fa-arrow-up" ></i> </button><button class="btn btn-primary btn-sm pull-right" id="c6_" value="Course"  onClick="my_normal_table_sort_asc(this.value);$('#c6_').hide();$('#c6').show();"> <i class="fa fa-arrow-down" ></i> </button></th>
        <th>Hobbies</th>
        <th>IMG</th>
        <th >Action</th>
      </tr>
    </thead>
    <tbody id="show_data">
    </tbody>
  </table>
  <div id="pager">
      <ul id="pagination" class="pagination-sm"></ul>
</div>
</div>

<!---    Delete Model !!! Start    -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4>
              <center>
                Do You Want to Delete This Record ???
              </center>
            </h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" id="deletebtn"   class="btn btn-danger">Yes I want to Delete</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No I don't!!</button>
      </div>
    </div>
  </div>
</div>
<!---    Delete Model !!! Enddd    -->
<!---------Ajax---Add--ok------------->
<div class="modal fade" id="mo_two" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="ajax_Err" style="color:green"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
      <form id="form">
        <div class="modal-body">
          <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mod-data">
              <section class="panel panel-border">
               <div class="container">
 			<p id="www" style="color:red" ></p>

    <div class="row">
        <div class="form-group col-sm-5">
          <label for="url"><strong style="color: #00F" >Name : </strong></label> 
          <input type="text" class="form-control" id="name" placeholder="Enter Name " name="name"  >
         
        </div>
        <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F33"  >Email : </strong> </label>
          <input type="text" class="form-control"  id="email" placeholder="Enter  Email Address " name="email"  >
        </div>
      </div>
      
       <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Mobile : </strong> </label>
          <input type="text" class="form-control"  id="mob" placeholder="Enter Mobile Number "   name="mob"  >
        </div>
        
      <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F33" >Date Of Birth : </strong> </label>
          <input type="text" class="form-control datepicker"  id="dob" placeholder="yyyy-mm-dd"  name="dob" value="<?php $d=mt_rand('6066','12012'); echo date("Y-m-d",strtotime('-'.$d.' day'));?>"  >
        </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-6">
          <label for="" id=""><strong style="color:#F33" >Gender : </strong> </label>
    	 <input type="radio"   id="gender"  name="gender" value="M"  >Male
             <input type="radio"  id="gender"  name="gender" value="F"  >Female
        </div>
      <div class="form-group  col-sm-6">
          <label for="" id=""><strong style="color:#F30" >Course : </strong> </label>
        <select  id="course" name="course">
     <option value="" selected>-----Select A Course-----</option>
       <option value="BCA" >BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
         </select>
         </div>
          </div>
     <div class="row">
        <div class="form-group  col-sm-12">
          <label for="" id=""><strong style="color:#F30" >Hobbies : </strong> </label>
        <input type="checkbox"   id="chk"  name="hob[]" value="Music"  > Music
           <input type="checkbox"  id="chk"  name="hob[]" value="Gaming" > Gaming
             <input type="checkbox"  id="chk"  name="hob[]" value="Sports" > Sports
         </div>
        </div>
      <div class="row">
        <div class="form-group col-sm-6">
          <label for="pwd" id=""><strong style="color:#63F" >Choose Image : </strong> </label>
          <input type="file" class="form-control" id="User_img" name="User_img" accept="image/*" 
            onChange="fileValidation()" >
            <!----   document.getElementById('User_img_preview').src=window.URL.createObjectURL(this.files[0]);  ----->
          </div>
           <div id="ty76nj_yg" class="form-group col-sm-6"><!--img id="User_img_preview" style="height:90px;width:90px;" class="gallery"--></div>
      </div>
      
      <div class="row">
        <div class="form-group  col-sm-4">
          <label for="" id=""><strong style="color:#F30" >Select A State : </strong> </label>
         <select  id="state" name="state" onChange="Get_City_Value(this.value)" ></select>
   </div>
        <div class="form-group  col-sm-4">
         <label for="" id=""><strong style="color:#F30" >Select A City : </strong> </label>
        <select  id="city" name="city" onChange="Get_Area_Value(this.value)" ></select>
         </div>
         <div class="form-group  col-sm-4">
         <label for="" id=""><strong style="color:#F30" >Select An Area : </strong> </label>
         <select  id="area" name="area"  >
         <option value="" selected>---Select Area---</option>
         </select>
   </div>
   </div>
  </div>
   </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button> 
          <button class="btn btn-primary" type="submit"  id="btn_save" >Submit</button>
     
        </div>
      </form>
    </div>
  </div>
</div>
<script>
function fileValidation(){
	$("#User_img_preview").remove();
    var fileInput = document.getElementById('User_img');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
		$("#ajax_Err").html("<marquee>Please upload file having extensions .jpeg || .jpg || .png  only !!!</marquee>"); 
       fileInput.value = '';  return false;
    }else{ //Image preview //  http://jsfiddle.net/4N6D9/1/
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('ty76nj_yg').innerHTML = '<img id="User_img_preview" style="height:90px;width:90px;" class="gallery" src="'+e.target.result+'"/>';
            }; 
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}	

</script>

<!-------------Ajax---Add--ok------------------->
<!--------------Editttttttttt------------------>
<div class="modal fade" id="modal_edit_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="e_Err" style="color:green"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
      <form  id="form_edit"  >
        <div class="modal-body">
          <input type="hidden" id="hidden_id_for_edit" name="hidden_id_for_edit" >
          <div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mod-data">
              <section class="panel panel-border">
                <div class="container">
 			<div class="row">
        <div class="form-group col-sm-5">
          <label for="url"><strong style="color: #00F" >Name : </strong></label>
          <input type="text" class="form-control" id="e_name" placeholder="Enter Name " name="e_name" >
        </div>
        <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F33"  >Email : </strong> </label>
          <input type="email" class="form-control"  id="e_email" placeholder="Enter  Email Address " name="e_email"  >
        </div>
      </div>
      
       <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Mobile : </strong> </label>
          <input type="number" class="form-control"  id="e_mob" placeholder="Enter Mobile Number "  name="e_mob"  >
        </div>
      
        <div class="form-group col-sm-7 ">
         <label for="" id=""><strong style="color:#F33" >Date Of Birth : </strong> </label>
          <input type="text" class="form-control datepicker"  id="e_dob"  name="e_dob" placeholder="yyyy-mm-dd"  >
           
         </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Gender : </strong> </label>
          <input type="radio"   id="e_gender"  name="e_gender" value="M" >Male
             <input type="radio"  id="e_gender"  name="e_gender" value="F"  >Female
        </div>
      <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F30" >Course : </strong> </label>
        <select id="e_course" name="e_course">
   <option value="" >---Select A Course---</option>
     <option value="BCA" >BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
         </select>
         </div>
      </div>
     
         <div class="row">
        <div class="form-group  col-sm-12">
          <label for="" id=""><strong style="color:#F30" >Hobbies : </strong> </label>
        <input type="checkbox"   id="e_chk"  name="e_hob[]" value="Music" >Music
           <input type="checkbox"  id="e_chk"  name="e_hob[]" value="Gaming" >Gaming
             <input type="checkbox"  id="e_chk"  name="e_hob[]" value="Sports" >Sports
         </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-6">
          <label for="pwd" id=""><strong style="color:#63F" >Choose Image : </strong> </label>
          <input type="file" class="form-control" name="e_User_img" id="e_User_img" accept="image/*" 
          onChange="document.getElementById('e_img').src=window.URL.createObjectURL(this.files[0]);" >
          <!--p id="lbl_e_img"></p-->
      </div>
         <div class="form-group col-sm-6"><img id="e_img" src="" alt="" style="height:90px;width:90px;" class="gallery"></div>
      </div>
     
  </div>
   </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button>
          <button class="btn btn-success" type="submit" name="submit" id="update_btn_save" >Update Now</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-----------------Editttttttttt------------------------->
<!---------Ajax---Add--Area------------->
<div class="modal fade" id="area_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="ajax_Err_area" style="color:green"> Add Area</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
      <form id="form_area_add">
        <div class="modal-body">
          <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mod-data">
              <section class="panel panel-border">
               <div class="container">
 	<div class="row">
        <div class="form-group  col-sm-6">
          <label for="" id=""><strong style="color:#F30" >Select A State : </strong> </label>
         <select  id="state_a" name="state_a" onChange="Get_City_Value_a(this.value)" ></select>
   </div>
        <div class="form-group  col-sm-6">
         <label for="" id=""><strong style="color:#F30" >Select A City : </strong> </label>
        <select  id="city_a" name="city_a"  ></select>
         </div></div>
         	<div class="row">
         <div class="form-group  col-sm-6">
          <label for="" id=""><strong style="color:#F33" >Area Name : </strong> </label>
          <input type="text" class="form-control"  id="area_name" placeholder="Enter Area Name "  name="area_name"  >
  			 </div>
              <div class="form-group  col-sm-3">
          <label for="" id=""><strong style="color:#F33" >Area PinCode : </strong> </label>
          <input type="text" class="form-control"  id="area_pin" placeholder="Area PinCode "  name="area_pin"  >
  			 </div>
   </div>
    </div>
   </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button> 
          <button class="btn btn-primary" type="submit"  id="btn_save_area" >Add </button>
     
        </div>
      </form>
    </div>
  </div>
</div>
<!-------------Ajax---Add--Area------------------->

<!-- Modal -->
<div class="modal fade" id="notify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-body">
     <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">&times;</span></button>
      <strong id="notification" style="color:red"> </strong>
      </div>
     </div>
  </div>
</div>

<!----------------------------------------->


 









<?php $this->load->view('VVV/login'); ?>




<script type="text/javascript">
    $(document).ready(function()   {   my_normal_table(); 
	$('#c1_').hide(); $('#c2_').hide(); $('#c3_').hide(); $('#c4_').hide(); $('#c5_').hide(); $('#c6_').hide();
   });

	
function  my_normal_table() {
 $.ajax({
           url:"<?php echo site_url()?>/vC/fdata",
		   success: function (data) {
			var mydata = JSON.parse(data); var i;
			
			 for (i = 0; i < mydata.length; i++) {  
					var vk=mydata[i]; if(vk.Gender=="F") { t_gender="Female"} else { t_gender="Male" }
                    var htmlok = '<tr id="mytr' + vk.my_id  +'">'
                            + '<td>' +'<input class="delete" id="chk" data-id="'+vk.my_id +'" type="checkbox" name="id[]" value="'+vk.my_id +'"> ' + vk.my_id  +'</td>'
                            + '<td>' + vk.Name + '</td>'
                            + '<td>' + vk.Mobile + '</td>'
							+ '<td>' + vk.Email + '</td>'
							+ '<td>' + vk.DOB + '</td>'
							+ '<td>' + t_gender + '</td>'
							+ '<td>' + vk.Course + '</td>'
							+ '<td>' + vk.Hobbies + '</td>'
							+ '<td>' +'<img src="<?php echo base_url()?>data/tryok/'+ vk.User_img +' " style="height:55px;width:55px;">' + '</td>'
						+ '<td>' 
						+ ' <button type="button" class="btn btn-info btn-sm" onclick="Delete_Ok(' + vk.my_id  +' )"  title="Delete Record Number ' + vk.my_id  +' "><i class="fa fa-trash"></i></button> ' 
						+ ' <button type="button" class="btn btn-success btn-sm" onclick="Edit_Ok(' + vk.my_id  +' )"><i class="fa fa-edit"></i> Edit </button> ' 
						+ ' <button type="button" class="btn btn-danger btn-sm"  onclick="Sweet_Alert(' + vk.my_id  +' )"><i class="fa fa-ban"></i></button>' + '</td>'
                            + '</tr>';
					$("#show_data").append(htmlok);
				 }
			}
		 });
		}
	
	$('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
      	orientation: "bottom auto",
        todayBtn: false,
        todayHighlight: false,  
    });
	$('#mob').keyup(function(e) {
     if (e.keyCode == 27) {  location.reload(); }
});
	
	function btn_two()
{  $('#mo_two').modal('show');  Get_All_State_Ok(); } 
</script>
<script type="text/javascript">
////////////////***********************
function Edit_Ok(id)
    {
	  $.ajax({
            type:"get",
            url:"<?php echo site_url()?>/vC/edit_one_data",
            data:{"id_for_edit":id},
            dataType:"json",
            success:function(data){
				$('#form_edit')[0].reset(); 
				var oneRecord=data.oneRow[0];
				 //console.log(data);
               	$('#e_name').val(oneRecord.Name);
                $('#e_email').val(oneRecord.Email);
                $('#e_mob').val(oneRecord.Mobile);
				$('#e_dob').val(oneRecord.DOB);
				$('#e_course').val(oneRecord.Course);
			$("input[id='e_gender'][value='"+oneRecord.Gender+"']").prop('checked', true);
			var vvvv = oneRecord.Hobbies;   cbvalue = vvvv.split(','); 	 
			for(i=0; i < cbvalue.length; i++){  $("input[name='e_hob[]'][value='"+cbvalue[i]+"']").prop('checked', true);	}
			
			$('#e_img').attr('src','<?php echo base_url()?>/data/tryok/'+oneRecord.User_img);
			$('#modal_edit_ok').modal('show');
			$('#hidden_id_for_edit').val(oneRecord.my_id);
			
            }
        });
    } 

	/////////////////////////////----------------------------------------------  EDITtttttttttttttttttttt

 ///////////////////--------------------------------
 	 
function append_after_update(id_for_update){
idd_yes=id_for_update;
	  $.ajax({
            type:"get",
            url:"<?php echo site_url()?>/vC/edit_one_data",
            data:{"id_for_edit":idd_yes},
            dataType:"json",
            success:function(data){
				var vk=data.oneRow[0];  if(vk.Gender=="F") { t_gender="Female"} else { t_gender="Male" }
				 var htmlok = '<tr id="mytr' + vk.my_id  +'">'
                            + '<td>' +'<input class="delete" id="chk" data-id="'+vk.my_id +'" type="checkbox" name="id[]" value="'+vk.my_id +'"> ' + vk.my_id  +'</td>'
                            + '<td>' + vk.Name + '</td>'
                            + '<td>' + vk.Mobile + '</td>'
							+ '<td>' + vk.Email + '</td>'
							+ '<td>' + vk.DOB + '</td>'
							+ '<td>' + t_gender + '</td>'
							+ '<td>' + vk.Course + '</td>'
							+ '<td>' + vk.Hobbies + '</td>'
							+ '<td>' +'<img src="<?php echo base_url()?>data/tryok/'+ vk.User_img +' " style="height:55px;width:55px;">' + /*vk.my_id  +*/ '</td>'
						+ '<td>' 
						+ ' <button type="button" class="btn btn-info btn-sm" onclick="Delete_Ok(' + vk.my_id  +' )"  title="Delete Record Number ' + vk.my_id  +' "><i class="fa fa-trash"></i></button> ' 
						+ ' <button type="button" class="btn btn-success btn-sm" onclick="Edit_Ok(' + vk.my_id  +' )"><i class="fa fa-edit"></i> Edit </button> ' 
						+ ' <button type="button" class="btn btn-danger btn-sm"  onclick="Sweet_Alert(' + vk.my_id  +' )"><i class="fa fa-ban"></i></button>' + '</td>'
                            + '</tr>';
					$("#mytr"+idd_yes).replaceWith(htmlok);
				
            }
        });
    } 

 
   ///////////////////--------------------------------
 function addto()
{	 $('#modal_add_ok').modal('show'); } 

function  Get_All_State_Ok() {
			 $("#state").html( '<option value="" seleced="selected">------Select A State-----</option>');
			  $("#city").html( '<option value="" seleced="selected">---Select A City---</option>');
			
        $.ajax({
           url:"<?php echo site_url()?>/vC/fetch_state_list",
            success: function (data) {
				 var mydata = JSON.parse(data);  var i;
                for (i = 0; i < mydata.length; i++) {  var vk=mydata[i];
                    var state_tag_html = '<option value="' + vk.id_state  +'">' + vk.state_name  + '</option>';
					 $("#state").append(state_tag_html);
				 }
			}
		 });
		}
		///**********
function Get_City_Value(state_id)
    {
		 $('#area').empty();$('#city').empty();
	  $.ajax({
            type:"get",
            url:"<?php echo site_url()?>/vC/fetch_city_list_by_state_id",
            data:{"state_id_for_city":state_id},
           success:function(data){
			   $("#city").html('<option selected="selected">---Choose A City---</option>');
			    $("#area").html('<option selected="selected">---Choose An Area---</option>');
			   var mydata = JSON.parse(data);  var k;
                for (k = 0; k < mydata.length; k++) 
								{     var vk=mydata[k];
                 $("#city").append('<option value="' + vk.id_city  +'">' + vk.city_name  + '</option>');
		 						}
		   }
        });
    } 
	  ///**********
function Get_Area_Value(city_id)
    {
		 $('#area').empty();
	  $.ajax({
            type:"get",
            url:"<?php echo site_url()?>/vC/fetch_area_list_by_city_id",
            data:{"city_id_for_area":city_id},
           success:function(data){
			   $("#area").html('<option selected="selected">---Choose An Area---</option>');
			   var mydata = JSON.parse(data);  var k;
                for (k = 0; k < mydata.length; k++) 
								{     var vk=mydata[k];
                 $("#area").append('<option value="' + vk.id_area  +'">' + vk.area_name  + '</option>');
		 						}
		   }
        });
    } 
</script>
<script type="text/javascript">
/////////////****************
function  Get_All_State_Ok_a() {
			 $("#state_a").html( '<option value="" seleced="selected">------Select A State-----</option>');
			  $("#city_a").html( '<option value="" seleced="selected">---Select A City---</option>');
			
        $.ajax({
           url:"<?php echo site_url()?>/vC/fetch_state_list",
            success: function (data) {
				 var mydata = JSON.parse(data);  var i;
                for (i = 0; i < mydata.length; i++) {  var vk=mydata[i];
                    var state_tag_html = '<option value="' + vk.id_state  +'">' + vk.state_name  + '</option>';
					 $("#state_a").append(state_tag_html);
				 }
			}
		 });
		}
		///**********
function Get_City_Value_a(state_id)
    {
		 $('#city_a').empty();
	  $.ajax({
            type:"get",
            url:"<?php echo site_url()?>/vC/fetch_city_list_by_state_id",
            data:{"state_id_for_city":state_id},
           success:function(data){
			   $("#city_a").html('<option value="" selected="selected">---Choose A City---</option>');
			  var mydata = JSON.parse(data);  var k;
                for (k = 0; k < mydata.length; k++) 
								{     var vk=mydata[k];
                 $("#city_a").append('<option value="' + vk.id_city  +'">' + vk.city_name  + '</option>');
		 						}
		   }
        });
    } 
	
////************************    Sweet Alert Deleteeeeeeeeeeeeeeeeeeeee
function Sweet_Alert(id)
{
	delId = id;
 swal({
  title: "Are you sure ?",
  text: "You will not be able to recover this record !!",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, Delete it !! ",
  cancelButtonText: "No, Cancel it !! ",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
            if (isConfirm) {
               swal("Deleted!", "1 record has been deleted.", "success");
               //ajax delete data to database
               $.ajax({
                    url: '<?php echo site_url('/vC/deleteOk'); ?>',
                  type: "get",
				  data:{"id":delId},
                  dataType: "json",
                  success: function(data) {
				$("#mytr"+delId).remove();
					$("#errdiv").html("<h5>1 Record Deleted successfully</h5>");
                 },
                 });
            } else {
               swal("Cancelled", "Record is safe :)", "error");
            }
         });
      } 
	  ///////////////////////-----------------Model Deleteeeeeeeeeeeeeeeeee
	   function Delete_Ok(id) {
        delId = id;
        $('#DeleteModal').modal('show');  } 
		$('#deletebtn').click(function(){
        $.ajax({
            type:"get",
            url: '<?php echo site_url('/vC/deleteOk_all'); ?>',
            data:{"id":delId},
            dataType:"html",
            success:function(data){
           		$('#DeleteModal').modal('hide'); 
				$("#mytr"+delId).remove();
             	}
        });
    });  
	function deleteOk(id) {
        delId = id;
        $('#DeleteModal').modal({keyboard: false, backdrop: 'static'});
    }
</script>

<script type="text/javascript">
//////////////////****************************  Ajaxxxxxxxx              ADDDD
 $("#form").submit(function (event) { event.preventDefault();
			
	var gen = $("input[name=gender]:checked").val();  var hob =$("input[id=chk]:checked").val();
	
			  //**********   Error Display **********
		 var Mob= $("input[name=mob]").val();		var Name= $("input[name=name]").val();  
		 var Em= $("input[id=email]").val();  Name_reg = /^[a-zA-Z]{3,33}$/; 
		 Mob_reg = /^[5-9]{1}[0-9]{9}$/;  Email_reg =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (Name_reg.test(Name) == false) { $("#ajax_Err").html("<marquee>Please Enter a Valid Name</marquee>"); 
			$('#name:visible').first().focus(); 
			$("#btn_save").attr('class','btn btn-danger');
			return false }
			 //else if(Em.length < "9") {  $("#ajax_Err").html("<marquee>Please Enter a Valid Email</marquee>");  return false  }
			 else if (Email_reg.test(Em) == false)  {   $("#ajax_Err").html("<marquee>Please Enter a Valid Email</marquee>"); 
			 $('#email:visible').first().focus(); return false  }
			  else if($("input[id=dob]").val()=="") {  $("#ajax_Err").html("<marquee>Select Birth-Date  </marquee>");
			  $('#dob:visible').first().focus();  return false }
			   else if (Mob_reg.test(Mob) == false) {  $("#ajax_Err").html("<marquee>InValid Mobile Number !!!</marquee>"); 
			   $('#mob:visible').first().focus(); return false }
			   else if(gen==null) { $("#ajax_Err").html("<marquee>Select Gender !!!</marquee>"); 
			   $('#gender:visible').first().focus();return false} 
			    else if($('#course').val()=="") {  $("#ajax_Err").html("<marquee>---Select A Course---</marquee>");  
				$('#course:visible').first().focus(); return false} 
				else if(hob==null) { $("#ajax_Err").html("<marquee>Select A Hobby  (minimum ) !!!</marquee>");
				return false} 
				else if($('#state').val()=="") { $("#ajax_Err").html("<marquee>---Select A State---</marquee>"); return false} 
				else if($('#city').val()=="") { $("#ajax_Err").html("<marquee>---Select A City From List---</marquee>"); return false} 
				else if($('#area').val()=="") { $("#ajax_Err").html("<marquee>---Select An Area---</marquee>"); return false} 
				else if($('#User_img').val()=="") { $("#ajax_Err").html("<marquee>---Upload One Image---</marquee>"); return false} 
			
				//**********   Error Display **********
            var formData = new FormData($("#form")[0]);
            //console.log(formData);
             $.ajax({
                url: "<?php echo site_url('vC/ajax_add')?>",
                type: 'POST',
                data: formData,
				        contentType: false,
                processData: false,
                success: function (data) 
                {  		$('#mo_two').modal('hide');
					$("#show_data").empty();
					my_normal_table(); 
						$("#errdiv").html("<h5>1 Record Inserted successfully</h5>");
						$('#form')[0].reset(); 
				},
				 //setTimeout(function () {  $("#errdiv").hide();  }, 5000);
				error: function(){  alert("Error in Form submission"); }
        });
        return false;
    });
////////////////********************  Area add Ajax  
$("#form_area_add").submit(function (event) {  event.preventDefault();
			 var area_pincode= $("input[name=area_pin]").val();	
			if($('#state_a').val()=="") { $("#ajax_Err_area").html("<marquee>Please Select A State From List</marquee>");  return false }
			 else if($('#city_a').val()=="") {  $("#ajax_Err_area").html("<marquee>Please Select A City From List</marquee>");  return false  }
			  else if($("input[id=area_name]").val()=="") {  $("#ajax_Err_area").html("<marquee>Enter Area Name  </marquee>");  return false }
			   else if(area_pincode.length!="6") {  $("#ajax_Err_area").html("<marquee>InValid PinCode !!!</marquee>");  return false }
			  //**********   Error Display **********
            var formData = new FormData($("#form_area_add")[0]);
         
            	$.ajax({
                url: "<?php echo site_url('vC/ajax_add_area')?>",
                type: 'POST',
                data: formData,
				contentType: false,
                processData: false,
                success: function (data) 
                {  		$('#area_modal').modal('hide'); 
						$("#errdiv").html("<h5>1 Area Record Inserted successfully</h5>");
						$('#form_area_add')[0].reset(); 
				},
				error: function(){  alert("Error in Form submission"); }
        });
        return false;
    });
 //////////////*****************
 function selectAll(source) {
            checkboxes = document.getElementsByName('id[]');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked; }
          }
 ///////*********************  bulk Deleteeeeeeeeeeeeeeeeeeee
 function getForDeleteValue()
{
var checked_id_Array = [];
	
	$(".delete:checked").each(function() {
		checked_id_Array.push($(this).val());
	}); 	if(checked_id_Array.length < 1){ alert("You've not selected any thing to delete  !!! ");	return false  }
	
	
	swal({
  title: "Are you sure ?",
  text: "You will not be able to recover this record !!",
  type: "warning",
  showCancelButton: true,
   
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Yes, Delete it !! ",
  cancelButtonText: "No, Cancel it !! ",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
            if (isConfirm) {
               swal("Deleted!", "1 record has been deleted.", "success");
               //ajax delete data to database
			   
               $.ajax({
				    type:"get",
                      url: '<?php echo site_url('/vC/deleteOk_all22'); ?>',
                 data:{"id_for_delete_all":checked_id_Array},
           		 dataType:"html",
                success: function(data) {
                 $("#show_data").empty(); my_normal_table();
			$("#errdiv").html("<h5>Record(s) Deleted successfully</h5>");
                 },
                 });
            } else {
				
               swal("Cancelled", "Record is Safe :)", "error");
            }
         });
      }  
	/////////*********************
$("#search_input").on("keyup", function() {
    var value = $(this).val();

    $("table tr").each(function(index) {
        if (index !== 0) {
			$row = $(this);
			var id = $row.find("td:first").text();
			 if (id.indexOf(value) !== 0) {
             $row.hide();
            } else {   $row.show();  }
        }
    });
});
///**********************************Sortingggggggggggggggg
function  my_normal_table_sort(sortt) {
	  $("#show_data").empty(); 
        $.ajax({
           url:"<?php echo site_url()?>/vC/fdatac",
		    type: "get",
			data:{"sorttok":sortt},
            success: function (data) {
                var mydata = JSON.parse(data); var i;
                for (i = 0; i < mydata.length; i++) {  
					var vk=mydata[i]; if(vk.Gender=="F") { t_gender="Female"} else { t_gender="Male" }
                    var htmlok = '<tr id="mytr' + vk.my_id  +'">'
                            + '<td>' +'<input class="delete" id="chk" data-id="'+vk.my_id +'" type="checkbox" name="id[]" value="'+vk.my_id +'"> ' + vk.my_id  +'</td>'
                            + '<td>' + vk.Name + '</td>'
                            + '<td>' + vk.Mobile + '</td>'
							+ '<td>' + vk.Email + '</td>'
							+ '<td>' + vk.DOB + '</td>'
							+ '<td>' + t_gender + '</td>'
							+ '<td>' + vk.Course + '</td>'
							+ '<td>' + vk.Hobbies + '</td>'
							+ '<td>' +'<img src="<?php echo base_url()?>data/tryok/'+ vk.User_img +' " style="height:55px;width:55px;">' + /*vk.my_id  +*/ '</td>'
						+ '<td>' 
						+ ' <button type="button" class="btn btn-info btn-sm" onclick="Delete_Ok(' + vk.my_id  +' )"  title="Delete Record Number ' + vk.my_id  +' "><i class="fa fa-trash"></i></button> ' 
						+ ' <button type="button" class="btn btn-success btn-sm" onclick="Edit_Ok(' + vk.my_id  +' )"><i class="fa fa-edit"></i> Edit </button> ' 
						+ ' <button type="button" class="btn btn-danger btn-sm"  onclick="Sweet_Alert(' + vk.my_id  +' )"><i class="fa fa-ban"></i></button>' + '</td>'
                            + '</tr>';
					$("#show_data").append(htmlok);
				 }
			}
		 });
		}
		
		///**********************************Sortingggggggggggggggg
function  my_normal_table_sort_asc(sortt) {
	  $("#show_data").empty(); 
        $.ajax({
           url:"<?php echo site_url()?>/vC/fdatacd",
		    type: "get",
			data:{"sorttok":sortt},
            success: function (data) {
                var mydata = JSON.parse(data); var i;
                for (i = 0; i < mydata.length; i++) {  
					var vk=mydata[i]; if(vk.Gender=="F") { t_gender="Female"} else { t_gender="Male" }
                    var htmlok = '<tr id="mytr' + vk.my_id  +'">'
                            + '<td>' +'<input class="delete" id="chk" data-id="'+vk.my_id +'" type="checkbox" name="id[]" value="'+vk.my_id +'"> ' + vk.my_id  +'</td>'
                            + '<td>' + vk.Name + '</td>'
                            + '<td>' + vk.Mobile + '</td>'
							+ '<td>' + vk.Email + '</td>'
							+ '<td>' + vk.DOB + '</td>'
							+ '<td>' + t_gender + '</td>'
							+ '<td>' + vk.Course + '</td>'
							+ '<td>' + vk.Hobbies + '</td>'
							+ '<td>' +'<img src="<?php echo base_url()?>data/tryok/'+ vk.User_img +' " style="height:55px;width:55px;">' + /*vk.my_id  +*/ '</td>'
						+ '<td>' 
						+ ' <button type="button" class="btn btn-info btn-sm" onclick="Delete_Ok(' + vk.my_id  +' )"  title="Delete Record Number ' + vk.my_id  +' "><i class="fa fa-trash"></i></button> ' 
						+ ' <button type="button" class="btn btn-success btn-sm" onclick="Edit_Ok(' + vk.my_id  +' )"><i class="fa fa-edit"></i> Edit </button> ' 
						+ ' <button type="button" class="btn btn-danger btn-sm"  onclick="Sweet_Alert(' + vk.my_id  +' )"><i class="fa fa-ban"></i></button>' + '</td>'
                            + '</tr>';
					$("#show_data").append(htmlok);
									 }
			}
		 });
		}


    function notify(style) {
        $.notify({title: '1 Record Updated', text: 'You have Successfully Updated One Record !!'},
		 {style: 'metro', className: style,autoHide: true, clickToHide: true});
    }
	// https://stackoverflow.com/questions/824349/modify-the-url-without-reloading-the-page


</script>

<script type="text/javascript">
function myFunction(channel_id) {

    setInterval(function(){  
//var channel_id="UCq-Fj5jknLsUf-MWSy4_brA";
      helloo(channel_id);  }, 2000);

}




  function helloo(channel_id) {    
  //var channel_id=$("input[name=channel_id]").val(); 
 //var channel_id=$.trim(channel_id);
  if(channel_id=="")  {  $("#h4err").html("Requied Field !!"); return false}
    
                $.ajax({
                    type: 'post',
                     data: {'channel_id': channel_id},
                     url: '<?php echo site_url('vC/get_yt_sub'); ?>',
                    dataType: 'json',
                    success: function (data) {  
                     $("#sub_t").html("Total : " + data+ " subs ");
               $("#sub_tt").html("Channel id is : " + channel_id);   
                            }
           });
        }


</script>

</body>
</html>
