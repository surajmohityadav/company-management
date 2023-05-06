<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
			<colgroup>
					<col width="5%">
					<col width="15%">
					<col width="20%">
					<col width="15%">
					
				</colgroup>
  <thead>
  
    <tr>
      <th>SR_NO.</th>
      <th>Name</th>
      <th>ID</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
      // Perform the query and loop over the results
      $qry =$conn->query("SELECT *,concat(firstname,' ',middlename,' ',lastname) as firstname, salary
                FROM staff");
      while($row= $qry->fetch_assoc()):
					?>
        
        <tr>
          <th class="text-center"><?php echo $i++ ?></th>
          <td><b><?php echo ucwords($row['firstname']) ?></b></td>
          <td><b><?php echo $row['id'] ?></b></td>
          <td><b><?php echo $row['salary'] ?></b></td>
        
      </tr>
      
    <?php endwhile; ?>
  </tbody>
  
</table>
    </div>
  </div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
  })
</script>




 
