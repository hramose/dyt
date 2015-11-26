<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> @yield('title') </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"> 
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="/css/roboto.min.css" rel="stylesheet">
    <link href="/css/material.min.css" rel="stylesheet">
    <link href="/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/js/datatables/media/css/jquery.dataTables.min.css">
   
 
</head>
<body>

@include('shared.navbar')

@yield('content')

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/material.min.js"></script>
 <!--AngularJS-->

<script>
    $(document).ready(function() {
        // This command is used to initialize some elements and make them work properly
        $.material.init();
    });
</script>
<script src="/js/datatables/media/js/jquery.dataTables.min.js"></script>


 <script src="/js/angular.min.js"></script>
 <script src="/js/angular-route.min.js"></script>
    <script src="js/app.js"></script>
@yield('scripts')

</body>
<script>
    $(document).ready(function(){
    $('#myTable').DataTable( {
        "language": {
            "url": "../lang/datatables_es.json"
        }
    });

});
</script>
</html>