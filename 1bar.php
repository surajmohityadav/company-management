<?php
// include database connection file
include 'db_connect.php';

// fetch data from database
$qry = $conn->query("SELECT t.date_created, c.orders FROM tickets t JOIN customers c ON t.customer_id = c.id WHERE c.orders > 0");
$data = array();
while($row = $qry->fetch_assoc()){
    $data[] = array(
        'name' => $row['date_created'],
        'orders' => $row['orders']
    );
}
?>

<!DOCTYPE html>
<html>
<?php session_start() ?>
<?php 
	if(!isset($_SESSION['login_id']))
	    header('location:login.php');
	include 'header.php' 
?>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  
<div class="wrapper">
  <?php include 'topbar.php' ?>
  <?php include 'sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Total sales</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

    
    <div style="width: 50%">
        <canvas id="orders-chart"></canvas>
    </div>
</section>
</div>

    <script>
        // get data from PHP array and convert it to JSON
        var data = <?php echo json_encode($data); ?>;
        
        // create arrays for labels and values
        var labels = [];
        var values = [];
        for(var i=0; i<data.length; i++){
            labels.push(data[i].name);
            values.push(data[i].orders);
        }
        
        // create a bar chart
        var ctx = document.getElementById('orders-chart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Number of Orders',
                    data: values,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
      
    </script>

</html>
