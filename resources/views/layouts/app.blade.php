<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Benefish | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
  <div id="content">
    @include('partials.navbar')
    @yield('content')
    <br>
  </div>
  <footer id="footer">
    @include('partials.footer')
  </footer>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('.custom-file-input').on('change',function(){
            filename = $(this).val().split('\\').pop()
            $(this).next('.custom-file-label').addClass('selected').html(filename)
        })

</script>

</body>


</html>
