<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    <link href="{{ url('dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('dist/css/skins/skin-blue.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ url('plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"/>
    <link href="{{ url('plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="{{  url('/dashboard') }}" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">{!! Config::get('app.short_name') !!}</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">{!! Config::get('app.name') !!}</span>
        </a>

        <!-- Header Navbar -->
        @include('nav')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar Menu -->
            @include('sidebar')
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('content-header')
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            {{  Config::get('app.version') }}
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ date('Y') }} <a href="http://www.witleaf.com">WitLeaf</a>.</strong> All rights
        reserved.
    </footer>

</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            @yield('modal')
        </div>
    </div>
</div>
<!-- ./wrapper -->


<!-- jQuery 2.1.4 -->
<script src="{{ url('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ url('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
<script src="{{ url('plugins/timepicker/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>

<script src="{{ url('plugins/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>
<script src="{{ url('plugins/input-mask/jquery.inputmask.extensions.js') }}" type="text/javascript"></script>
<script src="{{ url('plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/app.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $(function () {
        $(".timepicker").timepicker({
            showInputs: false
        });

        $(".date-mask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
        $(".textarea").wysihtml5();


        $('.mailbox-messages input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
            var clicks = $(this).data('clicks');
            if (clicks) {
                //Uncheck all checkboxes
                $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
            } else {
                //Check all checkboxes
                $(".mailbox-messages input[type='checkbox']").iCheck("check");
                $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
            }
            $(this).data("clicks", !clicks);
        });

        $('.btn-submit').click(function (e) {
            e.preventDefault();
            var form = $('.btn-submit').parent().parent().find('form');
            var url = form.attr('action');
            var data = form.serialize();
            $.post(url, data, function (data, status, xhr) {
                if (status === 'success') {
                    $('#dialog').modal('close');
                    window.location.reload();
                    return true;
                } else {
                    alert('保存失败');
                    return false;
                }
            });
        });
    });
</script>
</body>
</html>