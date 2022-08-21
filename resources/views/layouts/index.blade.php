
<!DOCTYPE html>
<html lang="en" ng-app="CalculatorApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="Insurance compant html template for small insurance firm. Template included Insurance products, Find an agent, Claim center etc. ">
  <meta name="keywords" content="Insurance, Home Insurance, Auto Insurance, Life Insurance, Find an agent">
  <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
  <title>PT. Putra Kalma Raya | Green Living</title>

  <!-- plugin datepicker -->
  <link href="{{asset('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

  <!-- Bootstrap -->

  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Template Font -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  
  <!-- Template Style.css -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />

  <!-- Awesome Icon Font -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- DataTables -->
  <link href="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>
@include('partials.header',['housings' => \App\Models\Housing::all()])
@yield('contents')
@include('partials.footer')
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="{{asset('js/jquery-1.11.3.min.js')}}"></script> 
  <!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="{{asset('js/bootstrap.min.js')}}"></script> 
  <script src="{{asset('js/nav-menu.js')}}"></script> 
  <script src="{{asset('js/owl.carousel.min.js')}}"></script> 
  <!--slider jquery --> 
  <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/product-carousel.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/testimonial.js')}}"></script>
  <!-- search open--> 

  <script type="text/javascript" src="{{asset('js/jquery.easing.min.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script src="{{asset('js/kaveling.js')}}" type="text/javascript"></script>

  <!-- plugin tabel -->

  <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>

  <script src="{{asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/jszip.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.colVis.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>

  <script src="{{asset('admin/assets/pages/datatables.init.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/custombox/js/custombox.min.j')}}s"></script>
  <script src="{{asset('admin/assets/plugins/custombox/js/legacy.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/datepicker.js')}}"></script>
  <script src="{{asset('js/calculation.js')}}" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('.datatable').dataTable();
      $('.datatable-keytable').DataTable({keys: true});
      $('.datatable-responsive').DataTable();
      $('.datatable-colvid').DataTable({
        "dom": 'C<"clear">lfrtip',
        "colVis": {
          "buttonText": "Change columns"
        }
      });
      $('#datatable-scroller').DataTable({
        ajax: "admin/assets/plugins/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });
      var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
      var table = $('#datatable-fixed-col').DataTable({
        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true,
        paging: false,
        fixedColumns: {
          leftColumns: 1,
          rightColumns: 1
        }
      });
    });
    TableManageButtons.init();

  </script>
</body>
</html>

