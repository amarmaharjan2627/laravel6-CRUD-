<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Larave 6.0 Crud Application</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('MDB/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('MDB/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{asset('MDB/css/style.css') }}">
  <!-- MDBootstrap Datatables  -->
<link href="{{asset('MDB/css/addons/datatables.min.css') }}" rel="stylesheet">
<!-- DataTables Select CSS -->
<link href="{{asset('MDB/css/addons/datatables-select.min.css') }}" rel="stylesheet">
<style type="text/css">
	body{
		background-color: #e8f4f8;
	}
</style>
</head>
<body>

  @yield('content')

  <!-- jQuery -->
  <script type="text/javascript" src="{{asset('MDB/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('MDB/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('MDB/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('MDB/js/mdb.min.js') }}"></script>
  <!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="{{asset('MDB/js/addons/datatables.min.js') }}"></script>
<!-- DataTables Select JS -->
<script href="{{asset('MDB/js/addons/datatables-select.min.js') }}" rel="stylesheet"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
    $(document).ready(function () {
	$('#dtstudent').DataTable();
	$('.dataTables_length').addClass('bs-select');
	});
  </script>

</body>
</html>
