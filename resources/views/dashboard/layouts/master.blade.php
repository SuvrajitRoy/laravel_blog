<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 <!-- Stylesheet -->
    @include('dashboard.layouts.partials.stylesheet')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  
 <!-- Page Header -->

     @include('dashboard.layouts.partials.header')   

 
  <!-- Left side column. contains the logo and sidebar -->
 
 <!-- sidebar -->
    @include('dashboard.layouts.partials.mainsidebar')


  <!-- Content Wrapper. Contains page content -->
  
   <!-- Main Content -->
        @yield('admincontent')


  <!-- /.content-wrapper -->
  
  
  <!-- Footer -->

     @include('dashboard.layouts.partials.footer')


  <!-- Control Sidebar -->
  
   @include('dashboard.layouts.partials.leftsidebar')
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

 <!-- Script -->
    @include('dashboard.layouts.partials.scripts')

</body>
</html>
