<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />

    <title>@yield('title')</title>

    <!-- Required CSS -->
    @include('layouts.partial_app2.css')
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.partial_app2.navbar')
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('page_header')
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        @yield('show')
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        @include('layouts.partial_app2.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('layouts.partial_app2.script')
</body>

</html>
