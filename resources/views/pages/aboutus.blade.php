
{{-- -navbar including here --}}
@include('components.navbar')

    <!-- bread crumb area -->
    <div class="rts-bread-crumbarea-1 rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <h1 class="title">About Us</h1>
                        <!-- breadcrumb pagination area -->
                        <div class="pagination-wrapper">
                            <a href="{{ route('home') }}">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="{{ route('about') }}">About us</a>
                        </div>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->





{{-- brandCourse--including--here --}}
@include('components.brandCourse')

{{-- -studenttag--including--here --}}
@include('components.studenttag')

{{-- -stfeedback--including--here --}}
@include('components.stfeedback')

{{-- -courseIntro=including==here --}}
@include('components.courseIntro')

   {{-- -Instructors including here --}}
@include('components.teachers')


   {{-- Home page view file with singleheading file -with--gapsection--}}
    @include('components.footer', [
        'showSingleHeading' => true,
        'showGapSection' => true
    ])
