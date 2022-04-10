<!DOCTYPE html>
<html>

@include('includes.head')

<title> @yield('title') - Bearact</title>

@stack('before-style')

@include('includes.style')

@stack('after-style')

<body>
    <!-- Sidenav -->
    @include('includes.sidenav')
    <!-- End of Sidenav -->

    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('includes.topnav')
        <!-- End  of Topnav -->

        <!-- Page content -->
        @yield('content')

        <!-- Footer -->
        @include('includes.footer')
        <!-- End of Footer -->

    </div>

    @include('includes.script')

</body>

</html>
