<?php include 'db_connect.php'; ?>
<div class="col-lg-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
               
            </div>
        </div>
        <div class="card-body">
        <table class="table table-hover table-bordered" id="list">
        <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="20%">
					<col width="15%">
					
				</colgroup>
    <thead>
   
        <tr>
            <th>SR_NO.</th>
            <th>Email Address</th>
            <th>Query</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        $qry = $conn->query("SELECT * FROM queries ORDER BY email_address ASC");
        while ($row = $qry->fetch_assoc()) : ?>
             <tr>
        <td class="text-center"><?php echo $i++ ?></td>
        <td><b><?php echo $row['email_address'] ?></b></td>
        <td><b><?php echo $row['query'] ?></b></td>
        <td class="text-center">
            <form action="" method="POST" target="_blank">
                <input type="hidden" name="email" value="<?php echo $row['email_address']; ?>">
                <textarea id="query-body" name="body" cols="30" rows="2" class="form-control"></textarea>
                <button type="button" class="btn btn-default"
                    onclick="openMailClient('<?php echo $row['email_address']; ?>', this.form.body.value)" disabled>Send</button>
                    <script>
document.getElementById('query-body').addEventListener('input', function() {
  var button = document.querySelector('#list .btn-default');
  button.disabled = (this.value.trim().length === 0);
});
</script>
<form method="POST">
    <button type="submit" name="delete" value='<?php echo $row['email_address']; ?>' class="btn btn-danger ml-2">Delete</button>
</form>

<?php
if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $delete_qry = $conn->prepare("DELETE FROM queries WHERE email_address = ?");
    $delete_qry->bind_param("s", $id);
    $delete_qry->execute();
}
?>


            </form>
        </td>
    </tr>
        <?php endwhile; ?>
        
    </tbody>
</table>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="email_modal" tabindex="-1" role="dialog" aria-labelledby="email_modalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="email_form">
                <div class="modal-header">
                    <h5 class="modal-title" id="email_modalLabel">Compose Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                
            </form>
        </div>
    </div>
</div>
<script>
function openMailClient(email, body) {
    var subject = 'Query related to AJAX prints';
    var mailtoLink = 'mailto:' + email + '?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
    
    // Make an AJAX call to mark the query as answered
    

    // Open the email client with pre-filled fields
    window.location.href = mailtoLink;
}


</script>




