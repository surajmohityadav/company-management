<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
  ob_start();
  $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
  ?>
  <title><?php echo $title ?> | AjaxPrints</title>
  <?php ob_end_flush() ?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-2+szgTpkT0DyH61pooNBsX9kMSEBR1bGZwYV8eoeIaaFhhi7PdBD31PmuV58nI9rEicV7Q+FtDW4Vkdp40fYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- Replace this with any Font Awesome icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-9aEz7T/zgQb0Aqf6GaejZiFXwiaR0uvyCpGNcXSKDPyUxsg0v/dOELlpYpidI/oRXlA5KwLvoGXMJWyez8X2dQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>

.info-box {
    position: relative;
    background: #E6E6FA;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    width: 420px; /* Increase width to accommodate bigger icon */
    height: 200px; /* Increase height to accommodate bigger icon */
    display: flex; /* Set the container as a flex container */
    flex-direction: column; /* Stack the child elements vertically */
    align-items: center;
}
.info-box-icon {
    background: rgba(0, 0, 0, 0.1);
    border-radius: 100%;
    color: #ffffff;
    display: block;
    font-size: 50px;
    height: 90px; /* Decrease height to match icon size */
    left: 50%; /* Center the icon horizontally */
    line-height: 50px; /* Center the icon vertically */
    position: absolute;
    text-align: center;
    top: 30%; /* Center the icon vertically */
    transform: translate(-50%, -50%); /* Center the icon horizontally and vertically */
    width: 200px; /* Decrease width to match icon size */
    color: purple;
}
.info-box-text {
     /* Add some spacing between the icon and the text */
    text-align: center; /* Center the text horizontally */
}
.info-box-number{
  align-items: center;
  align-self: center;
  text-align: center;
}
.logo img { width: 160px;
height: 100px;
}

</style>
</head>