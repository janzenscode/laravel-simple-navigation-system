<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row jumbotron">
            <h3>@yield('title')</h3>
        </div>
        <div class="row">
            <div class="col-3">
                @include('partial/sidebar-segment1')
            </div>
            
            <div class="col-3">
                @include('partial/sidebar-segment2')
            </div>

            <div class="col-6">
                
                @yield('content')
            </div>
       
       
            
        </div>
        <div class="row">
            @include('partial/footer')
        </div>
    </div>
</body>
</html>