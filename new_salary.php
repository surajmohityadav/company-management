<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
			
  <thead>
    <tr>
      <th>SR_NO.</th>
      <th>Name</th>
      <th>ID</th>
      <th>Amount</th>
      <th>Update</th>
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
          <td class="text-center">
          <textarea id="salary_<?php echo $row['id'] ?>"></textarea>

          <button type="button" onclick="updateSalary(<?php echo $row['id'] ?>)">
	Update
</button>
		                    
						</td>
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
<script>
	function updateSalary(id) {
		var salary = $('#salary_' + id).val();
		$.ajax({
			type: "POST",
			url: "./update_salary.php",
			data: {
				id: id,
				salary: salary
			},
			success: function(response) {
				// Reload the page to show the updated data
				location.reload();
			}
		});
	}
</script>





 
