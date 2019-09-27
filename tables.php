<!DOCTYPE html><html>
<head>
<title>DataTable With Ajax</title>
<link rel="shortcut icon" href="<?php echo base_url('assets/a.png')?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"  >
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker3.min.css">

</head>
<body>
<h5><a href="<?php echo site_url()?>/vC">Add Records</a></h5>
<br>
<br>
<div class="col-sm-5" id="errdiv">
  <?php if ($this->session->flashdata('cls') != '') { ?>
  <div class="alert-box alert <?php echo $this->session->flashdata('cls'); ?> "> <?php echo $this->session->flashdata('msg'); ?> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>
  <?php } ?>
</div>
<button class='btn btn-info btn-sm ' onclick='addto()' id="add"  > Simple Add <i class='fa fa-plus'></i> </button>
<button class='btn btn-danger btn-sm '  id="dlt_all" onClick="getForDeleteValue()"  > Bulk Delete <i class='fa fa-trash'></i> </button>
<button class='btn btn-success btn-sm pull-right ' onclick='btn_two()' id="btn_two"  > Ajax Add <i class='fa fa-plus'></i> <i class="fa fa-refresh  fa-spin  fa-fw"></i> </button>
<table id="example"  class="table table-striped table-bordered"  style="width:100%">
  <thead>
    <tr id="">
     <th>##</th>
      <th><input id="example-select-all" type="checkbox" onClick="selectAll(this)"> Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>DOB</th>
      <th>Gender</th>
      <th>Course</th>
      <th>Hobbies</th>
      <th>IMG</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

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
                Do You Want to Delete This Record ??
              </center>
            </h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" id="deletebtn"   class="btn btn-danger">Yes Delete</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No !!</button>
      </div>
    </div>
  </div>
</div>
<!---    Delete Model !!! Enddd    -->
<!------------Simple---Add--------------->
<div class="modal fade" id="modal_add_ok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="Err" style="color:green"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>
      <form method="post" name="f5" id="f5" enctype="multipart/form-data" action="Add_data_ok()"  >
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mod-data">
              <section class="panel panel-border">
               <div class="container">

  
<?php  $tyty=mt_rand('7','15');$str = "";	 $letnum = array_merge(range('A','Z'), range('a','z'), range('0','9'));  $max = count($letnum) - 1;
		for ($i = 0; $i < $tyty; $i++) {  $c10 = mt_rand(0, $max); $str .= $letnum[$c10]; 	}?>
        <?php  $tyty1=mt_rand('5','10');$str1 = "";	 $letnum1 = array_merge(range('A','Z'));  $max1 = count($letnum1) - 1;
		for ($i = 0; $i < $tyty1; $i++) {  $c101 = mt_rand(0, $max1); $str1 .= $letnum1[$c101]; 	}?>
    <div class="row">
        <div class="form-group col-sm-5">
          <label for="url"><strong style="color: #00F" >Name : </strong></label>
          <input type="text" class="form-control" id="s_name" placeholder="Enter Name " name="s_name" value="<?php echo $str1 ?>"  >
        </div>
        <div class="form-group  col-sm-7"><?php $m1=mt_rand('61111','99988'); $m2=mt_rand('11122','99988');$d=mt_rand('6066','12012');?>
          <label for="" id=""><strong style="color:#F33"  >Email : </strong> </label>
          <input type="email" class="form-control"  id="s_email" placeholder="Enter  Email Address " name="s_email" value="<?php echo $str."@gmail.com" ?>"   >
        </div>
      </div>
      
       <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Mobile : </strong> </label>
          <input type="number" class="form-control"  id="s_mob" placeholder="Enter Mobile Number "   name="s_mob" value="<?php echo $m1.$m2; ?>" >
        </div>
      
        <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F33" >Date Of Birth : </strong> </label>
          <input type="date" class="form-control"  id="s_dob" name="s_dob" value="<?php echo date("Y-m-d",strtotime('-'.$d.' day'));?>"  >
        </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Gender : </strong> </label>
          <input type="radio"   id="s_gender"  name="s_gender" value="M" checked >Male
             <input type="radio"  id="s_gender"  name="s_gender" value="F"  >Female
        </div>
      <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F30" >Course : </strong> </label>
        <select name="s_course" id="s_course" >
     <option value="BCA" selected>BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
         </select>
         </div>
      </div>
     
     <div class="row">
        <div class="form-group  col-sm-12">
          <label for="" id=""><strong style="color:#F30" >Hobbies : </strong> </label>
        <input type="checkbox"   id="s_chk"  name="s_hob[]" value="Music" checked >Music
           <input type="checkbox"  id="s_chk"  name="s_hob[]" value="Gaming" >Gaming
             <input type="checkbox"  id="s_chk"  name="s_hob[]" value="Sports" >Sports
         </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-6">
          <label for="pwd" id=""><strong style="color:#63F" >Choose Image : </strong> </label>
          <input type="file" class="form-control" name="s_User_img" accept="image/*" >
        </div>
      </div>
     
  </div>
   </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button>
          <button class="btn btn-success" type="submit" name="submit" id="add_data" onClick="return Add_data_ok()" >Add data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!----------------Simple---Add------------------>


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
          <input type="hidden" id="hidden_id_for_edit" name="hidden_id_for_edit">
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
          <input type="text" class="form-control datepicker"  id="e_dob"  name="e_dob"  >
           
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
          <input type="email" class="form-control"  id="email" placeholder="Enter  Email Address " name="email"  >
        </div>
      </div>
      
       <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Mobile : </strong> </label>
          <input type="number" class="form-control"  id="mob" placeholder="Enter Mobile Number "  name="mob"  >
        </div>
      
        <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F33" >Date Of Birth : </strong> </label>
          <input type="text" class="form-control datepicker"  id="dob" name="dob" value="<?php $d=mt_rand('6066','12012'); echo date("Y-m-d",strtotime('-'.$d.' day'));?>"  >
        </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-5">
          <label for="" id=""><strong style="color:#F33" >Gender : </strong> </label>
    	 <input type="radio"   id="gender"  name="gender" value="M"  >Male
             <input type="radio"  id="gender"  name="gender" value="F"  >Female
        </div>
      <div class="form-group  col-sm-7">
          <label for="" id=""><strong style="color:#F30" >Course : </strong> </label>
        <select  id="course" name="course">
     <option value="" selected>---Select A Course---</option>
       <option value="BCA" >BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
         </select>
         </div>
      </div>
     <div class="row">
        <div class="form-group  col-sm-12">
          <label for="" id=""><strong style="color:#F30" >Hobbies : </strong> </label>
        <input type="checkbox"   id="chk"  name="hob[]" value="Music"  >Music
           <input type="checkbox"  id="chk"  name="hob[]" value="Gaming" >Gaming
             <input type="checkbox"  id="chk"  name="hob[]" value="Sports" >Sports
         </div>
      </div>
      
      <div class="row">
        <div class="form-group col-sm-6">
          <label for="pwd" id=""><strong style="color:#63F" >Choose Image : </strong> </label>
          <input type="file" class="form-control" id="User_img" name="User_img" accept="image/*" 
            onChange="document.getElementById('User_img_preview').src=window.URL.createObjectURL(this.files[0]);" >
          </div>
           <div class="form-group col-sm-6"><img id="User_img_preview" style="height:90px;width:90px;" class="gallery"></div>
      </div>
     
  </div>
   </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button> 
          <button class="btn btn-success" type="submit" name="submit" id="btn_save" >Add To database</button>
     
        </div>
      </form>
    </div>
  </div>
</div>
<!-------------Ajax---Add--ok------------------->
<script src="https://code.jquery.com/jquery-3.3.1.js"  type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script type="text/javascript" >
var my_table; var delId;var tbl;
$(document).ready(function() {
	
      my_table=$('#example').DataTable( {
      		processing: true,
            serverSide: true,
			 //"pagingType": "full_numbers",
			  stateSave: true,
			ajax:"<?php echo site_url()?>/vC/get_all_data",
		 'aoColumnDefs': [{
                						'bSortable': false,
               							'aTargets': [1,-2,-1,-3]  
								    }],

     //"columnDefs": [ {  "targets": -5, "createdCell": function (td, cellData, rowData, row, col) { if(cellData =="surat") { $(td).css('color', 'red') }}} ],
//"createdRow": function( row, data, dataIndex ){if( data[6] == "C" ){$(row).attr('style','background-color:#e2c7e2');}}
		 } );
} );
 
$('#example tbody').on( 'click', 'tr', function () {$(this).toggleClass('selected');} );

$('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
      	orientation: "bottom auto",
        todayBtn: false,
        todayHighlight: false,  
    });

 //*******************************
	 function deleteOk(id) {
        delId = id;
        $('#DeleteModal').modal('show');  }
    
    $('#deletebtn').click(function(){
        $.ajax({
            type:"get",
            url: '<?php echo site_url('/vC/deleteOk_all'); ?>',
            data:{"id":delId},
            dataType:"html",
            success:function(data){
           				my_table.draw();   $('#DeleteModal').modal('hide'); 
             		 }
        });
    });
	
function deleteOk(id) {
        delId = id;
        $('#DeleteModal').modal({keyboard: false, backdrop: 'static'});
    }
	


 ///************************
			  
function addto()
{	 $('#modal_add_ok').modal('show'); } 
function btn_two()
{  $('#mo_two').modal('show'); } 


function edit(id)
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
				//$("#e_img").html(oneRecord.User_img);
				$("input[id='e_gender'][value='"+oneRecord.Gender+"']").prop('checked', true);
				
			var vvvv = oneRecord.Hobbies;   cbvalue = vvvv.split(','); 	 
			for(i=0; i < cbvalue.length; i++){  $("input[name='e_hob[]'][value='"+cbvalue[i]+"']").prop('checked', true);	}
			
			$('#e_img').attr('src','<?php echo base_url()?>/data/tryok/'+oneRecord.User_img);
			
				//console.log(vvvv);
				//cbvalue = vvvv.split(','); 	 
		
			/*for(i=0; i < cbvalue.length; i++)
				//console.log(cbvalue[i]);
			 {  $("input[name='e_hob'][value='"+cbvalue[i]+"']").attr('checked', true);	}*/
	
/*if(vvvv.indexOf(',') != -1)   {  cbvalue = vvvv.split(','); 	 
		for(i=0; i < cbvalue.length; i++){  $("input[name='e_hob[]'][value='"+cbvalue[i]+"']").prop('checked', true);	}}
	 else {  $("input[name='e_hob[]'][value='"+oneRecord.Hobbies+"']").prop('checked', true); console.log(oneRecord.Hobbies);}*/
	 
// $("#e_img").html('<img src="./data/tryok/+'oneRecord.User_img'+" alt="" style="height:55px;width:55px;" />');
				//$('#e_gender').val(oneRecord.Gender);
				/*if(oneRecord.Course=="M") {
				$("input[name='e_gender']:checked").val();}
				else*/ 
				//var gen=oneRecord.Gender;  if (gen == 'M'){ alert("Male"); }
				
				$('#hidden_id_for_edit').val(oneRecord.my_id);
				$('#modal_edit_ok').modal('show');
            }
        });
    }

function Add_data_ok()
{
var Name=document.getElementById("s_name").value;  
var Email=document.getElementById("s_email").value;
var Mobile=document.getElementById("s_mob").value;
var Gender=document.getElementById("s_gender").value;
//var Hobbies=document.getElementById("chk[]").value;
 if(Name=="")
{
	$("#Err").html("<marquee>Please Enter Name</marquee>");
	document.f5.s_name.focus() ; return false;
}
else if(Email=="")
{
	$("#Err").html("<marquee>Please Enter Email</marquee>");
	document.f5.s_email.focus() ;return false
}
else if(Mobile=="")
{
	$("#Err").html("<marquee>Please Enter Mobile Number</marquee>");
	document.f5.s_mob.focus() ;return false
}
else if(Mobile.length!=10)
{
	$("#Err").html("<marquee>Mobile Number Should Be Of 10 Digits !! </marquee>");return false
}
else if(Gender.checked=="")
{
	$("#Err").html("<marquee>Please Select Gender</marquee>");
}
/*else if(Hobbies=="")
{
	$("#Err").html("Select at least one Hobby");
	return false
}*/
else
{document.getElementById('f5').action ="<?php echo site_url()?>/vC/add_ok";}}


</script> 
<script type="text/javascript" >
$( "input[type='text']" ).on( "blur", function() {
  if( !this.value ) {
  $("#ajax_Err").html("<marquee>Please Fill Required Field  !!</marquee>");  
   }
  });
  
 

 jQuery(document).ready(function ($) {
 
   $("#form").submit(function (event) {
                event.preventDefault();
			
	var gen = $("input[name=gender]:checked").val();  var hob =$("input[id=chk]:checked").val();
	//var cou='';
	//var cou = $('#course').val();
	//console.log('test : '+cou);

	 //validation for login form
        //$("#progress").html('Inserting <i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>');
			  //**********   Error Display **********
		 var Mob= $("input[name=mob]").val();		var Name= $("input[name=name]").val();  
		 var Em= $("input[id=email]").val();
			if(Name.length < "3") { $("#ajax_Err").html("<marquee>Please Enter a Valid Name</marquee>");  return false }
			 else if(Em.length < "9") {  $("#ajax_Err").html("<marquee>Please Enter a Valid Email</marquee>");  return false  }
			  else if($("input[id=dob]").val()=="") {  $("#ajax_Err").html("<marquee>Select Birth-Date  </marquee>");  return false }
			   else if(Mob.length!="10") {  $("#ajax_Err").html("<marquee>InValid Mobile Number !!!</marquee>");  return false }
			   else if(gen==null) { $("#ajax_Err").html("<marquee>Select Gender !!!</marquee>"); return false} 
			    else if($('#course').val()=="") {  $("#ajax_Err").html("<marquee>---Select A Course---</marquee>");   return false} 
				else if(hob==null) { $("#ajax_Err").html("<marquee>Select A Hobby  (minimum ) !!!</marquee>"); return false} 
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
                {  		$('#mo_two').modal('hide'); my_table.draw();
						$("#errdiv").html("<h5>1 Record Inserted successfully</h5>");
						$('#form')[0].reset(); 
				},
				 //setTimeout(function () {  $("#errdiv").hide();  }, 5000);
				error: function(){  alert("Error in ajax form submission"); }
        });
        return false;
    });
 });

</script>



<script type="text/javascript">
 jQuery(document).ready(function ($) {

   $("#form_edit").submit(function (event) {
                event.preventDefault();
				////*************Validation
				
				
 var hob =$("input[id=e_chk]:checked").val();
var Mob= $("input[name=e_mob]").val();		var Name= $("input[name=e_name]").val();  
		 var Em= $("input[id=e_email]").val();
			if(Name.length < "3") { $("#e_Err").html("<marquee>Please Enter a Valid Name</marquee>");  return false }
			 else if(Em.length < "9") {  $("#e_Err").html("<marquee>Please Enter a Valid Email</marquee>");  return false  }
			  else if($("input[id=e_dob]").val()=="") {  $("#e_Err").html("<marquee>Select Birth-Date  </marquee>");  return false }
			   else if(Mob.length!="10") {  $("#e_Err").html("<marquee>InValid Mobile Number !!!</marquee>");  return false }
			   else if($('#e_course').val()=="") {  $("#e_Err").html("<marquee>---Select A Course---</marquee>");   return false} 
				else if(hob==null) { $("#e_Err").html("<marquee>Select A Hobby  (minimum ) !!!</marquee>"); return false} 
			
				
				////*************Validation
				 var formData = new FormData($("#form_edit")[0]);
            console.log(formData);
             
            $.ajax({
                url: "<?php echo site_url('vC/Update_ok')?>",
                type: 'POST',
                data: formData,
			
                contentType: false,
                processData: false,
                success: function (data) 
                {
				$('#modal_edit_ok').modal('hide'); my_table.draw();  
				$("#errdiv").html("<h5>1 Record Updated successfully</h5>");
				 //setTimeout(function () {  $("#errdiv").hide();  }, 5000);
				 },
                error: function(){
               alert("Error in ajax form submission"); }
        });
        return false;
    });
 });
 
 </script>



<script type="text/javascript">
 function save_to_database() 
{
 // alert('gg'); return false;
	var name      = $("input[name=name]").val();
      var mob       = $("input[name=mob]").val();
      var dob             = $("input[name=dob]").val(); 
      var gender          = $("input[name=gender] :radio:checked").val();
      var email        = $("input[name=emaill]").val();
      var course        = $("input[name=course]").val();
    $.ajax({
        url : "<?php echo site_url('vC/ajax_add')?>",
        type: "POST",
          //data: form_data
     data:{ 
                  "name" : name ,"mob" : mob ,"dob" : dob , "gender" : gender ,"email" : email ,"course" : course ,
	   },
	   dataType: "html",
	
 success: function(data)
        {
			
			$('#modal_add_ajax').modal('hide');
            my_table.draw();
          }
     });
}

</script>

<script type="text/javascript">
function swl_del(id)
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
                    my_table.draw();
				$("#errdiv").html("<h5>1 Record Deleted successfully</h5>");
                 },
                 });
            } else {
               swal("Cancelled", "Record is safe :)", "error");
            }
         });
      }       


function selectAll(source) {
            checkboxes = document.getElementsByName('id[]');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }


function reload_example()
{
    example.ajax.reload(null,false); 
}

/*/Save product
        $('#btn_save').on('click',function(){
            var Nm = $('#name').val();
            var Em = $('#email').val();
			var Mob = $('#mob').val();
            var Dob  = $('#dob').val();
			 var Gender  = $('#gender').val();
            var Course  = $('#course').val();
		
		$.ajax({
                type : "POST",
                url  : "<?php //echo site_url('vC/save')?>",
                dataType : "JSON",
                data : {Nm:name , Em:email, Mob:mob,Dob:dob, Gender:gender,Course:course},
                success: function(data){
                   //  $('#example').DataTable();
                }
            });
            return false;
        });*/
		
		
		
		
	function getForDeleteValue1(){

	var checked_id_Array = [];
	
	$(".delete:checked").each(function() {
		checked_id_Array.push($(this).val());
	});
		
		//var selected;

	//selected = chkArray.join(',') ;
	//if(selected.length > 0){ alert("You have selected " + selected);	  }else{   alert("Please check at least one checkbox");	}
	if(checked_id_Array.length < 1){ alert("You've not selected any thing to delete !!! "); return false	  }
	 $.ajax({
            type:"get",
            url: '<?php echo site_url('/vC/deleteOk_all22'); ?>',
            data:{"id_for_delete_all":checked_id_Array},
            dataType:"html",
            success:function(data){
            my_table.draw();     }
        });
	}		
	
///*******************	
	
	function getForDeleteValue()
{
var checked_id_Array = [];
	
	$(".delete:checked").each(function() {
		checked_id_Array.push($(this).val());
	}); 	if(checked_id_Array.length < 1){ alert("You've not selected any thing to delete  !!! ");	return false  }
	
	
	swal({
  title: "An input!",
  text: "Write something interesting:",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  inputPlaceholder: "Write something"
}, function (inputValue) {
  if (inputValue === false) return false;
  if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }
  swal("Nice!", "You wrote: " + inputValue, "success");
});
}
		
/*swal({
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
                      url: '<?php //echo site_url('/vC/deleteOk_all22'); ?>',
                 
				    data:{"id_for_delete_all":checked_id_Array},
           		 dataType:"html",
               
                  success: function(data) {
                    my_table.draw();
			$("#errdiv").html("<h5>Record(s) Deleted successfully</h5>");
                 },
                 });
            } else {
				
               swal("Cancelled", "Record is Safe :)", "error");
            }
         });
      }     */  
///*******************
	


function Update_data_ok()
{
var e_Name=document.getElementById("e_name").value;  
var e_Email=document.getElementById("e_email").value;
var e_Mobile=document.getElementById("e_mob").value;
 if(e_Name=="")
{$("#e_Err").html("Please Enter Name");return false;}
 else if(e_Email=="")
{$("#e_Err").html("Please Enter Email");return false}
else if(e_Mobile=="")
{$("#e_Err").html("Please Enter Mobile");return false}
else if(e_Mobile.length!=10)
{$("#e_Err").html("Mobile Number Should Be Of 10 Digits !!");return false}
else {document.getElementById('f6').action ="<?php echo site_url()?>/vC/Update_ok";}}




</script>


</body>
</html>
>>