<?php $this->Html->docType(); ?>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <?php echo $this->element('CakePagesTemplate.SEO'); ?>
        <?php
        echo $this->Html->meta('icon');

        echo $this->fetch('meta');

        echo $this->Html->css([
            'CakePagesTemplate./plugins/pace/pace-theme-flash.css',
            'CakePagesTemplate./plugins/bootstrap/css/bootstrap.min.css',
            'CakePagesTemplate./plugins/font-awesome/css/font-awesome.css',
            'CakePagesTemplate./plugins/jquery-scrollbar/jquery.scrollbar.css',
            'CakePagesTemplate./plugins/select2/css/select2.min.css',
            'CakePagesTemplate./plugins/switchery/css/switchery.min.css',
            'CakePagesTemplate.pages-icons.css',
            'CakePagesTemplate.pages.min.css'
        ]);

        echo $this->fetch('css');
        ?>
    </head>
    <style>
        .icon-thumbnail {
            display: table;
        }
        .icon-thumbnail > i {
            font-size: 14px;
            vertical-align: middle;
            display: table-cell;
        }
    </style>


    <body class="fixed-header menu-pin">
        <!-- BEGIN SIDEBAR -->
        <!-- BEGIN SIDEBPANEL-->

        <?php echo $this->element('navigation'); ?>

        <!-- END SIDEBAR -->
        <!-- END SIDEBAR -->
        <!-- START PAGE-CONTAINER -->
        <div class="page-container">
            <!-- START PAGE HEADER WRAPPER -->
            <!-- START HEADER -->
            <div class="header ">
                <!-- START MOBILE SIDEBAR TOGGLE -->
                <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar">
                </a>
                <!-- END MOBILE SIDEBAR TOGGLE -->
                <?php echo $this->element('CakePagesTemplate.usermenu'); ?>
            </div>
            <!-- END HEADER -->
            <!-- END PAGE HEADER WRAPPER -->
            <!-- START PAGE CONTENT WRAPPER -->
            <div class="page-content-wrapper">
                <!-- START PAGE CONTENT -->
                <div class="content">
                    <!-- START JUMBOTRON -->
                    <div class="jumbotron" data-pages="parallax">
                        <?php echo $this->element('CakePagesTemplate.breadcrumb'); ?>
                    </div>
                    <!-- END JUMBOTRON -->
                    <!-- START CONTAINER FLUID -->
                    <div class="container-fluid container-fixed-lg">
                        <?php echo $this->Flash->render(); ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
                    <!-- END CONTAINER FLUID -->
                </div>
                <!-- END PAGE CONTENT -->
                <!-- START FOOTER -->
                <?php echo $this->element('CakePagesTemplate.footer'); ?>
                <!-- END FOOTER -->
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTAINER -->
        <?php
        echo $this->Html->script([
            'CakePagesTemplate./plugins/pace/pace.min.js',
            'CakePagesTemplate./plugins/jquery/jquery-1.11.1.min.js',
            'CakePagesTemplate./plugins/modernizr.custom.js',
            'CakePagesTemplate./plugins/jquery-ui/jquery-ui.min.js',
            'CakePagesTemplate./plugins/tether/js/tether.min.js',
            'CakePagesTemplate./plugins/bootstrap/js/bootstrap.min.js',
            'CakePagesTemplate./plugins/jquery/jquery-easy.js',
            'CakePagesTemplate./plugins/jquery-unveil/jquery.unveil.min.js',
            'CakePagesTemplate./plugins/jquery-bez/jquery.bez.min.js',
            'CakePagesTemplate./plugins/jquery-ios-list/jquery.ioslist.min.js',
            'CakePagesTemplate./plugins/imagesloaded/imagesloaded.pkgd.min.js',
            'CakePagesTemplate./plugins/jquery-actual/jquery.actual.min.js',
            'CakePagesTemplate./plugins/jquery-scrollbar/jquery.scrollbar.min.js',
            'CakePagesTemplate.pages.min.js',
            'CakePagesTemplate.scripts.js'
        ]);
        echo $this->fetch('script');
        ?>
    </body>

</html>