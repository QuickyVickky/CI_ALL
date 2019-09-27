<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>
      <table id="helpdesk" class="table table-responsive table-bordered" style="90%"   align="center" >
        <thead>
          <tr id="" style="background-color:#e2c7e2;font-size:20px;" >
            <th>URL</th>
            <th >Title</th>
            <th>Description</th>
          </tr>
        </thead>
	  <tbody id="show_data">
         <?php if (count($news) > 0) {  foreach ($news['articles'] as $n) {  ?>
          <tr id="" style="font-size:18px; color:black">
            <td><a href="<?php echo $n['url']; ?>"><?php echo $n['url']; ?></a></td>
            <td><?php echo $n['title']; ?></td>
            <td><?php echo $n['description']; ?></td>
              
          </tr>
          <?php } } ?>
        </tbody>
      </table>