
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    @include('includes.header')

    <div class="container">

      @yield('content')

    </div><!-- /.container -->

    @include('includes.footer')

</body>
</html>
