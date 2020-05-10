<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title ?></title>
  <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>assets/frontend/assets/img/logo.jpg" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/toastr/toastr.min.css">
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/summernote/summernote-bs4.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <style>

.regForm {
  background-color: #ffffff;
  padding: 40px;
  min-width: 300px;
}

h3 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
</head>