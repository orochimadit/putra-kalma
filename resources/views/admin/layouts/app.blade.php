
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}">

  <title>PT. Putra Kalma Raya -Administrator</title>

  <link href="{{asset('admin/assets/plugins/summernote/summernote.css')}}" rel="stylesheet" />


  <!--alert -->
  <link href="{{asset('admin/assets/plugins/bootstrap-sweetalert/sweet-alert.css')}}" rel="stylesheet" type="text/css">

  <!-- ION Slider -->
  <link href="{{asset('admin/assets/plugins/ion-rangeslider/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/ion-rangeslider/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet" type="text/css"/> 
  <link href="{{asset('admin/assets/plugins/bootstrap-slider/css/bootstrap-slider.min.css')}}" rel="stylesheet" type="text/css"/>


  <!-- plugin datepicker -->
  <link href="{{asset('admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet">

  <!-- DataTables -->
  <link href="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset('admin/assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>


  <!-- css spinner form perumahan -->
  <link href="{{asset('admin/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />

  <!-- csss multi select form perumahan -->
  <link href="{{asset('admin/assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{asset('admin/assets/plugins/magnific-popup/css/magnific-popup.css')}}"/>


  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/percent_slider.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />

  <script src="{{('admin/assets/js/modernizr.min.js')}}"></script>
  @livewireStyles
</head>


<body class="fixed-left">
@include('admin.partials.header')

  <!-- Begin page -->
  <div id="wrapper">

  @include('admin.partials.sidebar')
 


 
  <!-- Left Sidebar End --> 

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->                      
  <div class="content-page">
    <div class="content">
      <div class="container">
      @include('alert')
    @yield('contents')
    </div>
</div>
  <footer class="footer text-right">
    © 2018. All rights reserved.
  </footer>

</div>

</div>
<!-- END wrapper -->


@livewireScripts
@stack('script')
<script>
  var resizefunc = [];
</script>

<script>
  $("input[name='demo3']").TouchSpin();
</script>


<!-- jQuery  -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/detect.js')}}"></script>
<script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/assets/js/waves.js')}}"></script>
<script src="{{asset('admin/assets/js/wow.min.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/assets/js/percent_slider.js')}}"></script>

<script src="{{asset('admin/assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!--plugin multiselect form input perumahan -->

<script type="text/javascript" src="{{asset('admin/assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>

<!--plugin spinner form input perumahan -->
<script src="{{asset('admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('admin/assets/plugins/touchspin.js')}}"></script>

<!-- plugin view gallery form gallery -->
<script type="text/javascript" src="{{asset('admin/assets/plugins/isotope/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>

<!-- plugin upload file input form input gellery -->   
<script src="{{asset('admin/assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>

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

<!-- date picker -->
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-datepicker/datepicker.js')}}"></script>

<!-- input slider progres -->
<script src="{{asset('admin/assets/plugins/ion-rangeslider/ion.rangeSlider.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/bootstrap-slider/js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('admin/assets/pages/jquery.ui-sliders.js')}}"></script>

<!-- Sweet-Alert  -->
<script src="{{asset('admin/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js')}}"></script>
<script src="{{asset('admin/assets/pages/jquery.sweet-alert.init.js')}}"></script>

<!-- Modal-Effect -->
<script src="{{asset('admin/assets/plugins/custombox/js/custombox.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/custombox/js/legacy.min.js')}}"></script>


<script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>

<!-- summerbote -->
<script src="{{asset('admin/assets/pages/jquery.dashboard_3.js')}}"></script>
<script src="{{asset('admin/assets/plugins/summernote/summernote.min.js')}}"></script>


<!-- input Prefix rupiah -->
<script src="{{asset('admin/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/assets/plugins/autoNumeric/autoNumeric.js')}}" type="text/javascript"></script>




<!-- input Prefix rupiah -->
<script type="text/javascript">

  jQuery(function($) {
    $('.autonumber').autoNumeric('init');    
  });
</script>
<!-- summernote -->
<script>
  jQuery(document).ready(function(){

    $('.summernote').summernote({
      height: 350,                 
      minHeight: null,             
      maxHeight: null,             
      focus: false                
    });

    $('.inline-editor').summernote({
      airMode: true            
    });

  });
</script>

<!--javascript slider gallery -->
<script type="text/javascript">
  $(window).load(function(){
    var $container = $('.portfolioContainer');
    $container.isotope({
      filter: '*',
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });

    $('.portfolioFilter a').click(function(){
      $('.portfolioFilter .current').removeClass('current');
      $(this).addClass('current');

      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        }
      });
      return false;
    }); 
  });
  $(document).ready(function() {
    $('.image-popup').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-fade',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                      }
                    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function () {
    $('.datatable').dataTable();
    $('#datatable-keytable').DataTable({keys: true});
    $('#datatable-responsive').DataTable();
    $('#datatable-colvid').DataTable({
      "dom": 'C<"clear">lfrtip',
      "colVis": {
        "buttonText": "Change columns"
      }
    });
    $('#datatable-scroller').DataTable({
      ajax: "assets/plugins/datatables/json/scroller-demo.json",
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
<script type="text/javascript">
  $(document).ready(function(){
   $('#edit_data').click(function(){
    var url = $(this).attr('href');
    $.ajax({
     url : url,
     success:function(response){
      $('#edit-modal').html(response);
    }
  });
  });

 });
</script>



</body>
</html>