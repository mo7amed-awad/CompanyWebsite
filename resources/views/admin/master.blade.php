
@include('admin.partials.head')
        @include('admin.partials.navbar')

        @include('admin.partials.sidebar')

        <main role="main" class="main-content">
          @yield('content')
        </main> <!-- main -->
@include('admin.partials.scripts')
