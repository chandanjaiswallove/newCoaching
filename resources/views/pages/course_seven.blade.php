@include('components.navbar')










   {{-- Home page view file with singleheading file -with--gapsection--}}
    @include('components.footer', [
        'showSingleHeading' => true,
        'showGapSection' => true
    ])
