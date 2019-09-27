<html>
<head>
<title>User Registration !!</title>
<strong style="color:#F33" >
<h4 align="center">User Registration !! <a href="<?php echo site_url()?>/vC/tables">See Records</a></h4>
</strong>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!----->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>




<!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<!-- Latest compiled and minified JavaScript -->

</head>
<body >





<table class="table-hover" >
  <div class="container">
  <p id="Err" style="color:red"></p>
    <form name="f1" id="f1" method="post" enctype="multipart/form-data" role="form"  >
    <div class="row">
        <div class="form-group col-sm-4">
          <label for="url"><strong style="color: #00F" >Name : </strong></label>
          <input type="text" class="form-control" id="name" placeholder="Enter Name " name="name" >
        </div>
      </div>
      <div class="button clearfix" ></div>
      <div class="row">
        <div class="form-group  col-sm-4">
          <label for="" id=""><strong style="color:#F33"  >Email : </strong> </label>
          <input type="email" class="form-control"  id="email" placeholder="Enter  Email Address " name="email"  >
        </div>
      </div>
      
       <div class="row">
        <div class="form-group  col-sm-3">
          <label for="" id=""><strong style="color:#F33" >Mobile : </strong> </label>
          <input type="number" class="form-control"  id="mob" placeholder="Enter Mobile Number "  name="mob"  >
        </div>
      </div>
      
         <div class="row">
        <div class="form-group  col-sm-3">
          <label for="" id=""><strong style="color:#F33" >Date Of Birth : </strong> </label>
          <input type="date" class="form-control"  id="dob"  name="dob"  >
        </div>
      </div>
      <div class="row">
        <div class="form-group  col-sm-3">
          <label for="" id=""><strong style="color:#F33" >Gender : </strong> </label>
          <input type="radio"   id="gender"  name="gender" value="M" checked>Male
             <input type="radio"  id="gender"  name="gender" value="F" >Female
        </div>
      </div>
      
      
        <div class="row">
        <div class="form-group  col-sm-3">
          <label for="" id=""><strong style="color:#F30" >Hobbies : </strong> </label>
        <input type="checkbox"   id="chk"  name="hob[]" value="Music" >Music
           <input type="checkbox"  id="chk"  name="hob[]" value="Gaming" >Gaming
             <input type="checkbox"  id="chk"  name="hob[]" value="Sports" >Sports
         </div>
      </div>
      
      <div class="row">
        <div class="form-group  col-sm-3">
          <label for="" id=""><strong style="color:#F30" >Course : </strong> </label>
        <select name="course" id="course">
     <option value="BCA" selected>BCA</option>
        <option value="BBA">BBA</option>
        <option value="MBA">MBA</option>
         </select>
         </div>
      </div>
      
      

<div class="select2-wrapper form-group  col-sm-4">
      <select class="form-control select2-single" >
        <option></option>


<optgroup label="Central Time Zone">
  <option value="AL">Alabama</option>
  <option value="AR">Arkansas</option>
  <option value="IL">Illinois</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="SD">South Dakota</option>
  <option value="TX">Texas</option>
  <option value="TN">Tennessee</option>
  <option value="WI">Wisconsin</option>
</optgroup>


      </select>
    </div>


<div class="row-fluid">
      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
        <option data-subtext="Rep California">Tom Foolery</option>
        <option data-subtext="Sen California">Bill Gordon</option>
        <option data-subtext="Sen Massacusetts">Elizabeth Warren</option>
        <option data-subtext="Rep Alabama">Mario Flores</option>
        <option data-subtext="Rep Alaska">Don Young</option>
        <option data-subtext="Rep California" disabled="disabled">Marvin Martinez</option>
      </select>
    
    </div>
  




      
      <div class="row">
        <div class="form-group  col-sm-3">
          <label for="pwd" id=""><strong style="color:#63F" title="Generate Custon URL !!" >Choose Image : </strong> </label>
          <input type="file" class="form-control" name="img" accept="image/*" >
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary"  name="add"  onClick=" Add()" id="add">Register  </button>
     
    </form>
  </div>
</table>
</body>
</html>

<form name="f1w" id="f1w" method="post" enctype="multipart/form-data" action="<?php echo site_url()?>/vC/do_upload" role="form"  >
 
      
      <div class="row">
        <div class="form-group  col-sm-3">
          <label for="pwd" id=""><strong style="color:#63F"  >Upload Image : </strong> </label>
          <input type="file" class="form-control" name="userfile[]" accept="image/*" multiple >
        </div>
      </div>
      
      <button type="submit" class="btn btn-info"  name="multi"  id="multi">Multi_Upload </button>
     
    </form>















<script>
  $( ".select2-single" ).select2( {
    theme: "bootstrap",
    placeholder: "Search Customer By Firm Name,Mobile or Email and Select Any one !!",
    maximumSelectionSize: 6,
    containerCssClass: ':all:'
  } );

</script>





<script type="text/javascript">
function insertok() {
        $.ajax({
           type: 'post',
			$.ajax("<?php echo base_url();?>/vC/add",
        	success:function(data){
                }
        });
    }
	
           











































function Add()
{
	var Name=document.getElementById("name").value;
	var Email=document.getElementById("email").value;
	var Mob=document.getElementById("mob").value;
	if(Name=="")
	{	
		$("#Err").html("Enter Name ");
		return false;
	}
	else if(Email=="")
	{
		$("#Err").html("Enter Email Address ");
		return false;
	}	
	else if(Mob=="")
	{
		$("#Err").html("Enter Mobile Number ");
		return false;
	}	
	else if(mob.length< 10)
	{
		$("#Err").html("Enter Valid Mobile Number ");
		return false;
	}	
	else
	{
		$.ajax({
			  type:"post",
					url:"<?php echo site_url()?>/vC/add/"+Name+"/"+Email+"/"+Mob,
					success:function(okDone)	{ 
					document.getElementById("Name").value="";
						document.getElementById("Email").value="";
						document.getElementById("Mob").value="";
					});
		return false;
	}
}
 </script>