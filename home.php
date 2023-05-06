
<?php include('db_connect.php') ?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 1): ?>
        
        <div class="row">
          <div class="col-12 col-sm-6 ">
            <div class="info-box">
            <a href="index.php?page=customer_list" class="logo">
        <img src="team.png" width="110"  alt="#">
      </a>
      
              <div class="info-box-content">
                <span class="info-box-text">Total Customers</span>
                <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM customers")->num_rows; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 ">
            <div class="info-box mb-3">
            <a href="index.php?page=staff_list" class="logo">
        <img src="consultant.png" width="110"  alt="#">
      </a>
              <div class="info-box-content">
                <span class="info-box-text">Total Staff</span>
                 <span class="info-box-number">
                  <?php echo $conn->query("SELECT * FROM staff")->num_rows; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 ">
            <div class="info-box mb-3">
            <a href="index.php?page=department_list" class="logo">
        <img src="corporation.png" width="110"  alt="#">
      </a>
              <div class="info-box-content">
                <span class="info-box-text">Total Departments</span>
                <span class="info-box-number"><?php echo $conn->query("SELECT * FROM departments")->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <a href="1bar.php" class="logo">
        <img src="invoice.png" width="110"  alt="#">
      </a>
      <?php
      $result = $conn->query("SELECT SUM(cost) AS total_cost FROM customers");
      $row = $result->fetch_assoc();
      $total_cost = $row['total_cost'];
      ?>
              <div class="info-box-content">
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number"> ₹  <?php echo $total_cost; ?>.00</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        
<?php else: ?>
	 <div class="col-12">
          <div class="card">
          	<div class="card-body">
          		Welcome <?php echo $_SESSION['login_name'] ?>!
          	</div>
          </div>
      </div>
<?php endif; ?>
<?php if($_SESSION['login_type'] == 2): ?>
<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
            <a href="#" class="logo">
        <img src="invoice.png" width="110"  alt="#">
      </a>
              <div class="info-box-content">
                <span class="info-box-text">Receipts</span>
                <span class="info-box-number"><?php echo $conn->query("SELECT * FROM tickets")->num_rows; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <?php endif; ?>
        <?php if ($_SESSION['login_type'] == 3): ?>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <a href="#" class="logo">
        <img src="invoice.png" width="110" alt="#">
      </a>
      <div class="info-box-content">
        <?php 
          // Get the ID of the logged-in customer
          $customer_id = $_SESSION['login_id'];
          
          // Query the database for the number of tickets for this specific customer
          $result = $conn->query("SELECT * FROM tickets WHERE customer_id = $customer_id");
          
          // Display the number of tickets found
          $num_tickets = $result->num_rows;
        ?>
      
        <span class="info-box-text">Receipts</span>
        <span class="info-box-number"><?php echo $num_tickets; ?></span>
      </div><!-- /.info-box-content -->
    </div><!-- /.info-box -->
  </div><!-- /.col -->
<?php endif; ?>
