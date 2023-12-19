<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('/pics/small-logo.jpg')}}">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- //google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow:wght@300;400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/275c3c76a3.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css_bootstrap.min.css')}}">
    <script rel="jquery" src="{{asset('/jquery_3.6.4_jquery.min.js')}}"></script>
    
    
    <link rel="stylesheet" href="{{asset('/style.css')}}">
    <title>@yield('title')</title>


</head>

<body>
    
<div class="cursor"></div>
    {{-- @include('layouts.navigation') --}}
    @yield('content')
    @include('layouts.footer')
    
    <!-- Mouse Animation  -->
 <script>
    var timeout;
    // cursor
    const cursor = document.querySelector(".cursor");
    document.addEventListener('mousemove', (e) => {
        let x = e.pageX;
        let y = e.pageY;

         // Adjust for scroll
        x -= window.pageXOffset;
        y -= window.pageYOffset;

        cursor.style.top = y + "px";
        cursor.style.left = x + "px";
        cursor.style.display = "block";

        function mouseStopped() {
            cursor.style.display = "none";
        }
        
        timeout = setTimeout(mouseStopped, 1000);
    });

    //cursor stopped
    document.addEventListener('mouseout', () => {
        cursor.style.display = "none";
    });
</script>

<script rel="javascript" src="{{asset('file.js')}}"></script>
<script src="{{asset('/cdn.jsdelivr.net_npm.js')}}"></script>
<script src="{{asset('/js_bootstrap.min.js')}}"></script>

</body>

</html>