<!--------Login Modal------------>

<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajax_Err_login" style="color:red"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form id="form_lgn">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mod-data">
              <section class="panel panel-border">
                <div class="container">
                  <div class="row">
                    <div class="form-group col-sm-11">
                      <label for="" id=""><strong style="color:#F33"  >Email  Or Phone: </strong> </label>
                      <input type="text" class="form-control"  id="email_l" placeholder="Enter  Email Address " name="email_l"  >
                    </div></div>
                    <div class="row">
                    <div class="form-group  col-sm-11">
                      <label for="" id=""><strong style="color:#F33"  >Password : </strong> </label>
                      <input type="password" class="form-control"  id="pass_l" placeholder=" ********" name="pass_l"  >
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button>
          <button id-="for_got" class="btn btn-success"type="button" onClick="for_gott()">Forgot</button>
          <button class="btn btn-primary" type="submit"  id="btn_loginn" >Log In</button>
        </div>
      </form>
      </div>
  </div>
</div>




 <!--------   Forget   ----->
      <div class="modal fade" id="for_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajax_Err_login" style="color:red"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <form id="form_forgot">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mod-data">
              <section class="panel panel-border">
                <div class="container">
                  <div class="row">
                    <div class="form-group col-sm-11">
                      <label for="" id=""><strong style="color:#F33"  >Email  Or Phone: </strong> </label>
                      <input type="text" class="form-control"  id="email_l" placeholder="Enter  Email Address to Recover " name="email_l"  >
                    </div>
                    </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-default"type="button">Close</button>
           <button id-="for_gote" class="btn btn-success"type="button" onClick="for_gotte()">Login</button>
          <button class="btn btn-primary" type="submit"  id="btn_loginn" >Recover</button>
        </div>
      </form></div>
  </div>
</div>

<script type="text/javascript">

	 $("#form_lgn").submit(function (event) { event.preventDefault();
 
		var Pass= $("input[id=pass_l]").val();   Email_reg =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var Em= $("input[id=email_l]").val();  
		
		
			 if(Em.length < "9") {  $("#ajax_Err_login").html("<marquee>Please Enter a Valid Email</marquee>");  $('#email_l:visible').first().focus(); return false  }
			  else if (Email_reg.test(Em) == false)  {   $("#ajax_Err_login").html("<marquee>Please Enter a Valid Email</marquee>"); 
			 $('#email_l:visible').first().focus(); return false  }
			else if($('#pass_l').val()=="") {  $("#ajax_Err_login").html("<marquee>Enter Your Password</marquee>");  
				$('#pass_l:visible').first().focus(); return false} 
			
			 
				//**********   Error Display **********
            var formData = new FormData($("#form_lgn")[0]);
          
             $.ajax({
                url: "<?php echo site_url('vC/verifying_you_lgn')?>",
                type: 'POST',
                data: formData,
				contentType: false,
                processData: false,
                success: function (data) 
                {  		//$('#login_modal').modal('hide');
					//$("#show_data").empty();
					if(data!="Success") {$("#ajax_Err_login").html('<marquee>'+ data+'</marquee>');} 
					else {  window.location.href = "<?php echo site_url('vC/s')?>";}
					//	$('#form_lgn')[0].reset(); 
				},
				error: function(){  alert("Error in Login"); }
        });
        return false;
    });
	
	function for_gott() {
		//$("#form_lgn").hide();$("#form_forgot").html();
		$('#login_modal').modal('hide');
		$('#for_modal').modal('show');
		
		}
	function for_gotte() {
	$('#login_modal').modal('show');
		$('#for_modal').modal('hide');
		}
	
	</script>
