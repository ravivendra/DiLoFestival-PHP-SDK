<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title><?php echo FUSION_PLATFORM_NAME . ' | ' . FUSION_APP_NAME . ' ' . FUSION_APP_VERSION; ?></title>

		<meta name="keywords" content="tmoney, danra, documentation, smart, centralized, api, smart api, danra, fusion, ravi vendra rishika" />
		<meta name="description" content="<?php echo FUSION_PLATFORM_NAME . ' | ' . FUSION_APP_NAME . ' ' . FUSION_APP_VERSION . ' | ' . FUSION_AUTHOR_NAME . ' - ' . FUSION_AUTHOR_QUOTE; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="author" content="DANRA">

        <link rel="shortcut icon" href="<?php echo $params['base_image']; ?>favicon.png" type="image/png" />
		<link rel="apple-touch-icon" href="<?php echo $params['base_image']; ?>favicon.png" type="image/png" />

        <link href="<?php echo $params['base_theme']; ?>plugins/codemirror/codemirror.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>plugins/codemirror/ambiance.css" rel="stylesheet" type="text/css">

        <link href="<?php echo $params['base_theme']; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>css/core.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>css/components.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>css/pages.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>css/menu.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $params['base_theme']; ?>css/responsive.css" rel="stylesheet" type="text/css">

		<!-- DataTables -->
        <link href="<?php echo $params['base_theme']; ?>plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $params['base_theme']; ?>plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $params['base_theme']; ?>plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $params['base_theme']; ?>plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $params['base_theme']; ?>plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo $params['base_theme']; ?>js/modernizr.min.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="<?php echo base_url(); ?>" class="logo"><img height="50" src="<?php echo $params['base_image']; ?>favicon.png" />&nbsp;<span>T-MONEY</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!-- <div class="user-details">
						<a href="<?php echo base_url(); ?>" class="logo"><img alt="T-MONEY Fusion API" height="40" src="<?php echo $params['base_image']; ?>t-money.png" /></a>
                    </div> -->
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>" class="waves-effect active"><i class="ion-home"></i><span>Dashboard </span></a>
                            <!-- <li><a href="<?php echo base_url(); ?>" class="waves-effect"><i class="ion-code-working"></i><span>Base API Environment </span></a></li> -->
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="ion-locked"></i><span>Authentication </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                            		<a href="<?php echo site_url('api/sign-up'); ?>" class="waves-effect"><span>Registration</span></a>
                            		<a href="<?php echo site_url('api/sign-in'); ?>" class="waves-effect"><span>Sign In</span></a>
                            	</ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-payment"></i><span>Transaction </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                            		<!-- <a href="<?php echo site_url('api/topup-finpay-0211'); ?>" class="waves-effect"><span>FinPay 0211 </span></a>
                            		<a href="<?php echo site_url('api/game-and-voucher'); ?>" class="waves-effect"><span>Game & Voucher </span></a>
                            		<a href="<?php echo site_url('api/transfer-p2b'); ?>" class="waves-effect"><span>Transfer P2B </span></a> -->
                            		<a href="<?php echo site_url('api/transfer-p2p'); ?>" class="waves-effect"><span>Transfer P2P </span></a>
                            	</ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-money"></i><span>IPG </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                            		<a href="<?php echo site_url('api/ipg-get-ticket'); ?>" class="waves-effect"><span>Get Ticket</span></a>
                            		<a href="<?php echo site_url('api/ipg-payment'); ?>" class="waves-effect"><span>Payment</span></a>
                            	</ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <?php
                        	if($this->uri->segment(1) == 'api' && $this->uri->segment(2) == 't-money')
                        		$this->load->view($content);
                        	else
                        	{
                        		if(FUSION_API_KEY == '' OR FUSION_API_KEY == '_SET_IT_WITH_YOUR_OWN_KEY_')
                        		{
                        ?>
                        	<!-- Page-Title -->
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <h4 class="pull-left page-title">Set your own key from our system (www.mainapi.net)</h4>
	                            </div>
	                        </div>
                        <?php
                        		}
                        		else
                        		if(FUSION_TERMINAL == '' OR FUSION_TERMINAL == '_ASKED_TO_INSTRUCTOR_')
                        		{
                        ?>
                        	<!-- Page-Title -->
	                        <div class="row">
	                            <div class="col-sm-12">
	                                <h4 class="pull-left page-title">Set your terminal by asking to the instructor</h4>
	                            </div>
	                        </div>
                        <?php
                        		}
                        		else
                        			$this->load->view($content);
                        	}
                        ?>
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    <?php echo date('Y'); ?> &copy; <strong><?php echo FUSION_PLATFORM_NAME; ?></strong> by PT Telkom Indonesia - <em>Developed by <strong>Ravi Vendra Rishika</strong></em>
                </footer>

            </div>

        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>js/jquery.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/detect.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/fastclick.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/jquery.slimscroll.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/jquery.blockUI.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/waves.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/wow.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/jquery.nicescroll.js"></script>
        <script src="<?php echo $params['base_theme']; ?>js/jquery.scrollTo.min.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>plugins/moment/moment.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/counterup/jquery.counterup.min.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>plugins/sweetalert/dist/sweetalert.min.js"></script>

        <!-- flot Chart -->
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>pages/jquery.todo.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>pages/jquery.chat.js"></script>

        <!--Morris Chart-->
		<script src="<?php echo $params['base_theme']; ?>plugins/raphael/raphael-min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/morris.js/morris.min.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo $params['base_theme']; ?>pages/jquery.dashboard.js"></script>

        <!-- Datatables-->
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/datatables/dataTables.scroller.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo $params['base_theme']; ?>pages/datatables.init.js"></script>

        <script src="<?php echo $params['base_theme']; ?>js/jquery.app.js"></script>

        <!--codemirror-->
        <script src="<?php echo $params['base_theme']; ?>plugins/codemirror/codemirror.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/codemirror/formatting.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/codemirror/xml.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/codemirror/javascript.js"></script>
        <script src="<?php echo $params['base_theme']; ?>plugins/codemirror/custom.codemirror.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable( { keys: true } );
                $('#datatable-responsive').DataTable();
                $('#datatable-scroller').DataTable( { ajax: "<?php echo $params['base_theme']; ?>plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );

                var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
            });

            TableManageButtons.init();
        </script>
    </body>
</html>