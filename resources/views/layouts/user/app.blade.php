<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sprout</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/AdminLTE.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('iCheck/flat/blue.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/css/slick-theme.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('slick/css/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/iziToast.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.print.css') }}" media="print">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <meta name="fullpathAssignCompany" content="{{ URL::to('doAssignCompanyBuyLead') }}">
  <meta name="fullpathRemoveAssign" content="{{ URL::to('doRemoveAssignedCompany') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  @yield('content')
  

  
  <script src="{{ asset('js/myscript/company.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{ asset('js/underscore.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jstz.min.js') }}"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.13/pagination/full_numbers_no_ellipses.js"></script>
  <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/fullcalendar.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('slick/js/slick.min.js') }}"></script>
  <script src="{{ asset('js/iziToast.min.js') }}"></script>
  <script src="{{ asset('iCheck/icheck.min.js') }}"></script>
  <script src="{{ asset('bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>