<!DOCTYPE html>
<html>

@include('includes.head')

<title> @yield('title') - Wirakom</title>

@stack('before-style')

@include('includes.style')

@stack('after-style')

<body>
    
    <!-- Main content -->
    <div class="main-content" id="panel">
        
        <!-- Page content -->
        <div class="container-fluid mt--6">

            @yield('content')

        </div>
    </div>

    @include('includes.script')

</body>

</html>
