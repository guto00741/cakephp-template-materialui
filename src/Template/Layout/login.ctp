<!DOCTYPE html>
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
        <script type="text/javascript">
            window.onload = function () {
                // fix for windows 8
                if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                    document.head.innerHTML += '<?= $this->Html->css("CakePagesTemplate.windows.chrome.fix.css"); ?>'
            }
        </script>
    </head>
    <body class="fixed-header ">
        <div class="login-wrapper ">
            <!-- START Login Background Pic Wrapper-->
            <div class="bg-pic">
                <!-- START Background Pic-->
                <img src="<?= $this->Url->build('/img/background.jpg') ?>" data-src="<?= $this->Url->build('/img/background.jpg') ?>" data-src-retina="<?= $this->Url->build('/img/background.jpg') ?>" alt="" class="lazy">
                <!-- END Background Pic-->
                <!-- START Background Caption-->

                <!-- END Background Caption-->
            </div>
            <!-- END Login Background Pic Wrapper-->
            <!-- START Login Right Container-->
            <div class="login-container bg-white">             
                <?php echo $this->Flash->render(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <!-- END Login Right Container-->
    </div>
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
        'CakePagesTemplate./plugins/jquery-ios-list/jquery.ioslist.min.js',
        'CakePagesTemplate./plugins/jquery-actual/jquery.actual.min.js',
        'CakePagesTemplate./plugins/jquery-scrollbar/jquery.scrollbar.min.js',
        'CakePagesTemplate./plugins/select2/js/select2.full.min.js',
        'CakePagesTemplate./plugins/classie/classie.js',
        'CakePagesTemplate./plugins/switchery/js/switchery.min.js',
        'CakePagesTemplate./plugins/jquery-validation/js/jquery.validate.min.js',
        'CakePagesTemplate.pages.min.js'
    ]);
    echo $this->fetch('script');
    ?>
    <script>
        $(function () {
            $('#form-login').validate()
        });
    </script>
</body>
</html>