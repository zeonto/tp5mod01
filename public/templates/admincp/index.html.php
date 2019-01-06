<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script src="__STATIC__/plugins/head.min.js" data-headjs-load="__JS__/cpframe.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
<!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

    {include file="./templates/admincp/header.html.php" /}

    <!-- =============================================== -->

    {include file="./templates/admincp/sidebar.html.php" /}

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div id="tab-frame-content" style="overflow: auto">
<!--            <div class="tab-content tab-addtabs" id="tab_content" style="overflow-y: hidden;"></div>-->
<!--            {block name="content"} {/block}-->
        </div>

    </div>
    <!-- /.content-wrapper -->

<!--    {include file="./templates/admincp/footer.html.php" /}-->

    <!-- Control Sidebar -->
    {include file="./templates/admincp/control-sidebar.html.php" /}
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<script>
    head.ready("jquery", function () {
        // $('.sidebar-menu').tree();
    });

    head.ready("addtabs", function () {
        $.addtabs({
            // tab_content: '#tab-content',
            iframe: true,
            target: '#navtabs-menus',
            // store: true,
            // iframeHeight: 350,
        });
    });

</script>
</body>
</html>
