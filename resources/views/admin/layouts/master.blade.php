<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Screening</title>

    <!-- vendor css -->
    <link href="{{asset('admin')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{asset('admin')}}/lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('admin')}}/img/logo.png" type="image/x-icon" />

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/starlight.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="{{url('admin/home')}}"></i> Screening</a></div>
    <div class="sl-sideleft">
        <div class="input-group input-group-search">
            <input type="search" name="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
        </div><!-- input-group -->

        <label class="sidebar-label">Navigation</label>
        <div class="sl-sideleft-menu">
            <a href="{{url('/')}}" class="sl-menu-link @yield('dashboard')">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="{{url('/admin/rumahsakits/')}}" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-world-outline tx-22"></i>
                    <span class="menu-item-label">Add Rumah Sakit</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
            <a href="{{url('/admin/pasiens/')}}" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-world-outline tx-22"></i>
                    <span class="menu-item-label">Add Pasien</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->
        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name"><span class="hidden-md-down"></span></span>
                        <img src="{{asset('admin')}}/img/muaylogo.png" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    @yield('admin_content');



    <script src="{{asset ('admin')}}/lib/jquery/jquery.js"></script>
    <script src="{{asset ('admin')}}/lib/popper.js/popper.js"></script>
    <script src="{{asset ('admin')}}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{asset ('admin')}}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{asset ('admin')}}/lib/datatables/jquery.dataTables.js"></script>
    <script src="{{asset ('admin')}}/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script>
    $(function() {
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });

    });
    </script>
    <script src="{{asset ('admin')}}/lib/medium-editor/medium-editor.js"></script>
    <script src="{{asset ('admin')}}/lib/summernote/summernote-bs4.min.js"></script>
    <script>
    $(function() {
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })

        $('#summernote2').summernote({
            height: 150,
            tooltip: false
        })
    });
    </script>
    <script src="{{asset ('admin')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{asset ('admin')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="{{asset ('admin')}}/lib/d3/d3.js"></script>
    <script src="{{asset ('admin')}}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{asset ('admin')}}/lib/chart.js/Chart.js"></script>
    <script src="{{asset ('admin')}}/lib/Flot/jquery.flot.js"></script>
    <script src="{{asset ('admin')}}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset ('admin')}}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{asset ('admin')}}/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="{{asset ('admin')}}/js/starlight.js"></script>
    <script src="{{asset ('admin')}}/js/ResizeSensor.js"></script>
    <script src="{{asset ('admin')}}/js/dashboard.js"></script>
    <script src="{{asset ('admin')}}/lib/highlightjs/highlight.pack.js"></script>
    <script src="{{asset ('admin')}}/lib/select2/js/select2.min.js"></script>
    <script src="{{asset ('admin')}}/js/starlight.js"></script>
</body>

</html>