@include('front.partials.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('front.partials.spiner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('front.partials.navbar')
        @yield('hero')
        <!-- Navbar & Hero End -->

        @yield('content')

        
    @include('front.partials.footer')

        
    @include('front.partials.scripts')
    