<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png')}}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-6.css')}}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css')}}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css')}}">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/jquery-ui.css')}}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/metismenu.css')}}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
</head>

<body>


    {{-- navbar section include --}}
    @include('components.navbar')

    {{-- Hero section include --}}
    @include('components.hero')

    {{-- HeroTwo section include --}}
    {{-- -- @include('components.heroTwo') --}}

    {{-- HeroThree section include --}}
    {{-- @include('components.heroThree') --}}

    {{-- studenttag section include --}}
    @include('components.studenttag')

    {{-- brandCourse section include --}}
    @include('components.brandCourse')

    {{-- topcategory section include --}}
    @include('components.topcategory')

    {{-- courses section include --}}
    @include('components.courses', ['showGapSection' => true])


    {{-- courseIntro section include --}}
    @include('components.courseIntro')

    {{-- events section include --}}
    @include('components.events')

    {{-- Instructors section include --}}
    

    {{-- stfeedback section include --}}
    @include('components.stfeedback')

    {{-- blogs section include --}}
    @include('components.blogs')

    {{-- Home page view file with singleheading file -with--gapsection--}}
    @include('components.footer', [
        'showSingleHeading' => true,
        'showGapSection' => false
    ])




    <!-- all scripts -->
    <!-- jquery min js -->
    <script src="{{ asset('assets/js/vendor/jquery.min.js')}}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('assets/js/vendor/jquery-ui.js')}}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('assets/js/vendor/metismenu.js')}}"></script>
    <!-- magnific popup js-->
    <script src="{{ asset('assets/js/vendor/magnifying-popup.js')}}"></script>
    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('assets/js/plugins/swiper.js')}}"></script>
    <!-- counterup js -->
    <script src="{{ asset('assets/js/plugins/counterup.js')}}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('assets/js/vendor/waypoint.js')}}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/vendor/waw.js')}}"></script>
    <!-- isotop mesonary -->
    <script src="{{ asset('assets/js/plugins/isotop.js')}}"></script>
    <!-- jquery imageloaded -->
    <script src="{{ asset('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <!-- resize sensor js -->
    <script src="{{ asset('assets/js/plugins/resizer-sensor.js')}}"></script>
    <!-- sticky sidebar -->
    <script src="{{ asset('assets/js/plugins/sticky-sidebar.js')}}"></script>
    <!-- gsap twinmax js -->
    <script src="{{ asset('assets/js/plugins/twinmax.js')}}"></script>
    <!-- chroma js -->
    <script src="{{ asset('assets/js/vendor/chroma.min.js')}}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('assets/js/plugins/contact.form.js')}}"></script>
    <!-- calender js -->
    <script src="{{ asset('assets/js/plugins/calender.js')}}"></script>
    <!-- main Js -->
    <script src="{{ asset('assets/js/main.js')}}"></script>


</body>

</html>
