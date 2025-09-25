<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title ?? 'Page Title' }} | Diagnostics</title>

<!-- App favicon -->
<link rel="shortcut icon" href="{{asset("assets/images/logo-sm.png")}}">

<!-- App css -->
<link href="{{asset("assets/css/app.min.css")}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons -->
<link href="{{asset("assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />

<!-- Datatables css -->
<link href="{{asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Flatpickr Timepicker css -->
<link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
