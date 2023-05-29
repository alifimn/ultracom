<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ultracom Admin</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <!-- style -->
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')

</head>

<body>
    <!-- Sidebar -->
    @include('includes.sidebar')

    <div id="right-panel" class="right-panel">

        <!-- Navbar-->
        @include('includes.navbar')
        

        <div class="content">
            <!-- Content -->
            @yield('content')
            @include('sweetalert::alert')
        </div>

        <div class="clearfix"></div>
    </div>


    <!-- Script -->
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>
