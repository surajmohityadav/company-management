  <aside class="main-sidebar sidebar-dark-purple elevation-4">
    <div class="dropdown">
   	<a href="javascript:void(0)" class="brand-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
        <span class="brand-image img-circle elevation-3 d-flex justify-content-center align-items-center bg-purple text-white font-weight-500" style="width: 38px;height:50px"><?php echo strtoupper(substr($_SESSION['login_firstname'], 0,1).substr($_SESSION['login_lastname'], 0,1)) ?></span>
        <span class="brand-text font-weight-light"><?php echo ucwords($_SESSION['login_firstname'].' '.$_SESSION['login_lastname']) ?></span>
        
      </a>
      <div class="dropdown-menu" style="">
        <a class="dropdown-item manage_account" href="javascript:void(0)" data-id="<?php echo $_SESSION['login_id'] ?>">Manage Account</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="ajax.php?action=logout">Logout</a>
      </div>
    </div>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item dropdown">
            
              <i class="nav-icon fas fa-house-alt"></i>
              <p style="margin-left:60px">
              <i class="nav-icon fa fa-home" style="color: aliceblue;" aria-hidden="true"></i>
                <a href="indexhome.php"> Home page </a>
              </p>
            </a>
            
          </li>  
        <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>    
        <?php if($_SESSION['login_type'] == 1): ?>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_customer">
              
              
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Customer
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_customer" class="nav-link nav-new_customer tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=customer_list" class="nav-link nav-customer_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_staff">
              
            <i class="nav-icon fas fa-users"></i>
              <p>
                Staff
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_staff" class="nav-link nav-new_staff tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=staff_list" class="nav-link nav-staff_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>

              
            </ul>
          </li>
          <li class="nav-item">
            <a href="./index.php?page=department_list" class="nav-link nav-department_list">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Department
              </p>
            </a>
          </li>     
          <li class="nav-item">
            <a href="./index.php?page=amount" class="nav-link nav-amount">
              <i class="nav-icon fas fa-rupee-sign"></i>
              <p>
                Billing amount
              </p>
            </a>
          </li>
        <?php endif; ?>

          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_ticket nav-view_ticket">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>
                Invoice
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_ticket" class="nav-link nav-new_ticket tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=ticket_list" class="nav-link nav-ticket_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li> 


          <?php if($_SESSION['login_type'] == 1): ?>
            


           <li class="nav-item">
            <a href="./index.php?page=query" class="nav-link nav-editticket nav-query">
            <i class="nav-icon fa fa-question-circle" aria-hidden="true"></i>
              <p>
                Queries
               
              </p>
            </a>
            
          </li> 




          <?php endif; ?>




          <?php if($_SESSION['login_type'] == 1): ?>
            


            <li class="nav-item">
            <a href="#" class="nav-link nav-edit_salary nav-view_salary">
              <i class="nav-icon fas fa-euro-sign"></i>
              <p>
                Salary
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_salary" class="nav-link nav-new_salary tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Update salary</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=salary" class="nav-link nav-salary tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li> 
 
 
 
 
           <?php endif; ?>






          <?php if($_SESSION['login_type'] == 2): ?>
            


            <li class="nav-item">
            <a href="./index.php?page=query" class="nav-link nav-edit_ticke nav-query">
            <i class="nav-icon fa fa-question-circle" aria-hidden="true"></i>
              <p>
                Queries
                
              </p>
            </a>
            
          </li> 
 
 
 
           <?php endif; ?>
















        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
  		var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		if($('.nav-link.nav-'+page).length > 0){
  			$('.nav-link.nav-'+page).addClass('active')
          console.log($('.nav-link.nav-'+page).hasClass('tree-item'))
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
          $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
  		}
      $('.manage_account').click(function(){
        uni_modal('Manage Account','manage_user.php?id='+$(this).attr('data-id'))
      })
  	})
  </script>