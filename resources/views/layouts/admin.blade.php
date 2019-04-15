<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('meta-title') | Admin Site</title>

        <!-- Favicon -->
        <link href="{{ asset('favicon.ico') }}" rel="icon" type="image/x-icon">
        
        <!-- Bootstrap -->
        <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        
        <!-- Font-awesome -->
        <link href="{{ asset('bower_components/components-font-awesome/css/fontawesome-all.min.css') }}" rel="stylesheet" type="text/css">

        <!-- sb-admin -->
        <link href="{{ asset('startbootstrap-sb-admin-gh-pages/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <link href="{{ asset('startbootstrap-sb-admin-gh-pages/css/sb-admin.css') }}" rel="stylesheet">
        
        <!-- summernote -->
        <link href="{{ asset('summernote-0.8.9-dist/dist/summernote-bs4.css') }}" rel="stylesheet">

        <!-- admin style -->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    </head>
    <body id="page-top">

        @include('layouts.admin_header')

        <div id="wrapper">
            @include('layouts.admin_sidebar')

            <div id="content-wrapper">

                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    @yield('breadcrumb')

                    
                    <!-- Page Content -->
                    <div class="card mb-3">

                        <!-- Page Title -->
                        <div class="card-header">
                            <h3>
                                <i class="fas @yield('page-icon')"></i>
                                @yield('page-title')
                            </h3>
                        </div>

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            @yield('content')
                        </div>
                    </div>
                </div>

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>{!! config('app.copyright') !!}</span>
                        </div>
                    </div>
                </footer>
                
            </div>
        <div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- jQuery -->
        <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>

        <!-- popper -->
        <script src="{{ asset('js/popper.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

        <!-- summernote -->        
        <script src="{{ asset('summernote-0.8.9-dist/dist/summernote-bs4.js') }}"></script>

        <!-- sb-admin -->
        <script src="{{ asset('startbootstrap-sb-admin-gh-pages/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('startbootstrap-sb-admin-gh-pages/vendor/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('startbootstrap-sb-admin-gh-pages/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
        <script src="{{ asset('startbootstrap-sb-admin-gh-pages/js/sb-admin.min.js') }}"></script>        

        <!-- Document Ready Scripts -->
        <script>
            $(function() 
            {
                $('table[id^="dataTable"]').dataTable({
                    "columnDefs": [{
                        "targets": 'disable-sort-filter',
                        "orderable": false,
                        "searchable": false
                    }]
                });
                
                if ($("textarea#summernote").length > 0) {
                    $('textarea#summernote').summernote({
                        minHeight: 200,
                    });
                }
            });
        </script>
    </body>
</html>