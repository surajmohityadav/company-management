<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<table class="table table-hover table-bordered" id="list">
				<thead>
					<tr>
						<th>SR_NO.</th>
						<th>Name</th>
						<th>ID</th>
						<th>Details</th>
						<th>Cost</th>
						<th>Discount</th>
						<th>Update</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT c.*, t.m_name, t.no_of_p FROM customers c LEFT JOIN tickets t ON c.id = t.customer_id");

					while ($row = $qry->fetch_assoc()):
						?>
						<tr>
							<td class="text-center"><?php echo $i++ ?></td>
							<td><b><?php echo ucwords($row['firstname']) ?></b></td>
							<td><b><?php echo $row['id'] ?></b></td>
							<td><b><?php echo $row['no_of_p'] ?>&nbsp;<?php echo $row['m_name'] ?>&nbsp;sheets</b></td>
							<td><textarea id="cost_<?php echo $row['id'] ?>"><?php echo $row['cost'] ?></textarea></td>
							<td><textarea id="discount_<?php echo $row['id'] ?>"><?php echo $row['discount'] ?></textarea></td>
							<td class="text-center">
								<button type="button" onclick="updateCustomer(<?php echo $row['id'] ?>)">
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
	$(document).ready(function () {
		$('#list').dataTable();
	});

	function updateCustomer(id) {
    var cost = $('#cost_' + id).val();
    var discount = $('#discount_' + id).val();

    // check if cost is greater than 100000
    if (parseInt(cost) > 100000) {
        discount = 5;
    }

    $.ajax({
        type: "POST",
        url: "./update_customer.php",
        data: {
            id: id,
            cost: cost,
            discount: discount,
			orders: 1
        },
        success: function (response) {
            // Reload the page to show the updated data
            location.reload();
        }
    });
}
</script>
