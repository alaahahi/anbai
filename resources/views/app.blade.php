<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{app()->getLocale()=='ar'?'rtl':'ltr'}}>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font aweasome -->
        <link rel="stylesheet" href="https://kit.fontawesome.com/d3eb7bac5e.css" crossorigin="anonymous">
        <!-- bootstrap 5.2.2 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <!-- fonts -->
        <link href="/assets/fonts/fonts.css" rel="stylesheet">
        <!-- Main Stylesheet File -->
        <link href="/assets/css/public/ahsan.css" rel="stylesheet">
        <link href="/assets/css/public/style.css" rel="stylesheet">
        <link href="/assets/css/private/theme.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-header1.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-banner1.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-hdr-services1.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-about1.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-projects.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-services.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-team.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-last-news.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-faq.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-home-footer.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-about-page-about.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-team-page.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-privacy-policy.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-contact1-page.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-careers-page.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-blog-page.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-blog-news-component.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-blog-related.css" rel="stylesheet">
        <link href="/assets/css/private/blog-details.css" rel="stylesheet">
        <link href="/assets/css/private/services-page.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-services-related.css" rel="stylesheet">
        <link href="/assets/css/private/theme2-projects-page.css" rel="stylesheet">
        <link href="/assets/css/private/project-details.css" rel="stylesheet">
    

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

    
    
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">

        @inertia



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="/assets/js/private/theme2-header1.js"></script>
        <script src="/assets/js/private/theme2-banner.js"></script>
        <script src="/assets/js/private/theme2-home-about1.js"></script>
        <script src="/assets/js/private/theme2-home-services.js"></script>
        <script src="/assets/js/private/theme2-home-last-news.js"></script>
        <script src="/assets/js/private/theme2-home-faq.js"></script>
        <script src="/assets/js/private/theme2-home-footer.js"></script>
        <script src="/assets/js/private/theme2-about-page-about.js"></script>
        <script src="/assets/js/private/theme2-blog-related.js"></script>
        <script src="/assets/js/private/theme2-services-related.js"></script>
        <script src="/assets/js/private/project-details.js"></script>
        {{-- <script src="/assets/js/public/scripts.js"></script> --}}
    

    </body>
</html>
