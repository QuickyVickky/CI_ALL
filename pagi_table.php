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


</head>
<body>


<div class="userdataajax table-responsive">
  <table id="normal" class="table table-responsive table-bordered"   align="center" >
    <thead>
      <tr id="">
        <th> # ID </th>
        <th>Name</th>
        <th>Mobile </th>
        <th>Email  </th>
        <th>DOB  </th>
        <th>Gender </th>
        <th>Course</th>
        <th>Hobbies</th>
        <!--th>IMG</th>
        <th >Action</th-->
      </tr>
    </thead>
    <tbody id="show_data">
    </tbody>
  </table>
  <div id="pager">
      <ul id="pagination" class="pagination-sm"></ul>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"  type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
	
	
	var $pagination = $('#pagination'),
		totalRecords = 0,
		records = [],
		displayRecords = [],
		recPerPage = 10,
		page = 1,
		totalPages = 0;
           
	$.ajax({
		  url:"<?php echo site_url()?>/vC/fdata",
		async: true,
		dataType: 'json',
		success: function (data) {
			records = data;
			console.log(records);
			totalRecords = records.length;
			totalPages = Math.ceil(totalRecords / recPerPage);
			apply_pagination();
		}
	});
	function generate_table() {
		var tr;
		$('#show_data').html('');
		for (var i = 0; i < displayRecords.length; i++) {
			tr = $('<tr/>');
		 tr.append("<td>" + displayRecords[i].my_id + "</td>");
		  tr.append("<td>" + displayRecords[i].Name + "</td>");
            tr.append("<td>" + displayRecords[i].Mobile + "</td>");
            tr.append("<td>" + displayRecords[i].Email + "</td>");
			 tr.append("<td>" + displayRecords[i].DOB + "</td>");
            tr.append("<td>" + displayRecords[i].Gender + "</td>");
            tr.append("<td>" + displayRecords[i].Course + "</td>");
			tr.append("<td>" + displayRecords[i].Hobbies + "</td>");
			$('#show_data').append(tr);
		}
	}
	function apply_pagination() {
		$pagination.twbsPagination({
			totalPages: totalPages,
			visiblePages: 6,
			onPageClick: function (event, page) {
				displayRecordsIndex = Math.max(page - 1, 0) * recPerPage;
				endRec = (displayRecordsIndex) + recPerPage;
				//console.log(displayRecordsIndex + 'ssssssssss'+ endRec);
				displayRecords = records.slice(displayRecordsIndex, endRec);
				generate_table();
			}
		});
	}
  });
</script>

          
                
                 

















































</body>
</html>
