<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{app()->getLocale()=='ar'?'rtl':'ltr'}}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{url('/')}}/assets/images/favicon.png" rel="icon">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
        <!-- font aweasome -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/d3eb7bac5e.css" crossorigin="anonymous">
        <!-- bootstrap 5.2.2 -->
        <link href="{{url('/')}}/assets/css//bootstrap.min.css" rel="stylesheet">
        <!-- fonts -->
        <!-- Main Stylesheet File -->
        <link href="{{url('/')}}/assets/css/ahsan.css" rel="stylesheet">
        <link href="{{url('/')}}/assets/css/style.css" rel="stylesheet">
        <link href="{{url('/')}}/assets/css/home.css" rel="stylesheet">
        <link href="{{url('/')}}/assets/css/rtl.css" rel="stylesheet">
    

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
        <script src="{{url('/')}}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('/')}}/assets/js/scripts.js"></script>
        <script src="{{url('/')}}/assets/js/home.js"></script>
    
    
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    </head>
    <body class="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">
        <div class="app">
        @inertia


      
        </div>
    </body>

    {{-- <script src="/assets/js/public/scripts.js"></script> --}}

</html>
