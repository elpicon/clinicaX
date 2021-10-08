

<?php include 'session.php';?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOCTORPRJ IPS</title>

    <!-- Bootstrap -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    


    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/build/css/custom.min.css" rel="stylesheet">
                <script type="text/javascript" src="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/js/jquery.js"></script>
        <script type="text/javascript" src="http://<?php echo  $_SERVER["HTTP_HOST"] ?>/clinicaX/pagina/layout/js/chartJS/Chart.min.js"></script>




            
	
	<style>
		 h5,h6{
        text-align:center;
      }
		

      @media print {
          .btn-print {
            display:none !important;
		  }
		  .main-footer	{
			display:none !important;
		  }
		  .box.box-primary {
			  border-top:none !important;
		  }
		  .nav_menu {
			  display:none;
		  }
		  footer{
			  display:none;
		  }
		  
          
      }
	
	</style>
	
	
	<!---dataTable--->
	
	<?php include 'dbcon.php';?>
  </head>