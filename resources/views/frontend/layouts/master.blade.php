<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.includes.head')

</head>

<body>

<!-- Header -->
<header class="">
    @include('frontend.includes.nav')
</header>

<!-- Page Content -->
<!-- Banner Starts Here -->
@yield('banner')
<!-- Banner Ends Here -->
{{--@include('frontend.includes.add_section')--}}

<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>

            @include('frontend.includes.sidebar')
        </div>
    </div>
</section>


<footer>
@include('frontend.includes.footer')
</footer>

@include('frontend.includes.scripts')

</body>
</html>
