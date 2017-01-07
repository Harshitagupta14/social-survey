<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>SocialCop|Login </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= $this->config->item('adminassets'); ?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= $this->config->item('adminassets'); ?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= $this->config->item('adminassets'); ?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= $this->config->item('adminassets'); ?>global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?= $this->config->item('adminassets'); ?>global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= $this->config->item('adminassets'); ?>global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= $this->config->item('adminassets'); ?>global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= $this->config->item('adminassets'); ?>global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?= $this->config->item('adminassets'); ?>pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <script>
            var baseurl = '<?= base_url() ?>';
        </script>
    </head>
    <body class=" login">
        <!-- BEGIN : LOGIN PAGE 5-1 -->
        <div class="user-login-5">
            <div class="row bs-reset">
                <div class="col-md-6 bs-reset mt-login-5-bsfix">
                    <div class="login-bg" style="background-image:url(http://localhost/pos1/assets/admin/pages/img/login/bg1.jpg)">
                        <!--<img class="login-logo" src="<?= $this->config->item('adminassets'); ?>pages/img/login/logo.png" /> -->
                    </div>
                </div>
                <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">
                    <div class="login-content">
                        <?php if (!empty($message)) { ?>
                            <?php echo $message; ?>
                        <?php } ?>
                        <h1>SOCIALCOP LOGIN</h1>
                        <form action="" class=" " method="post">
                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button>
                                <span>Enter any username and password. </span>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input id="sender-email" type="text" name="login_identity" class="form-control form-control-solid placeholder-no-fix form-group" placeholder="Username Or Email-Id" required /> </div>
                                <div class="col-xs-6">
                                    <input type="password" name="login_password" class="form-control form-control-solid placeholder-no-fix form-group" placeholder="Password" id="user-pass" required /> </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- <div class="rem-password">
                                         <label class="rememberme mt-checkbox mt-checkbox-outline">
                                             <input type="checkbox" name="remember" value="1" /> Remember me
                                             <span></span>
                                         </label>
                                     </div> -->
                                </div>
                                <div class="col-sm-8 text-right">
                                    <!--   <div class="forgot-password">
                                           <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                                       </div> -->
                                    <input type="submit" class="btn green" value="Sign In" name="login_user">
                                    <a href="<?php echo site_url('register') ?>" class="btn btn-danger">Sign Up</a>

                                </div>
                            </div>
                        </form>
                        <!-- BEGIN FORGOT PASSWORD FORM -->
                        <form class="forget-form" action="javascript:;" method="post">
                            <h3 class="font-green">Forgot Password ?</h3>
                            <p> Enter your e-mail address below to reset your password. </p>
                            <div class="form-group">
                                <input class="form-control placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                            <div class="form-actions">
                                <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                            </div>
                        </form>
                        <!-- END FORGOT PASSWORD FORM -->
                    </div>
                    <div class="login-footer">
                        <div class="row bs-reset">
                            <div class="col-xs-5 bs-reset">
                                <ul class="login-social">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="icon-social-dribbble"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-xs-7 bs-reset">
                                <div class="login-copyright text-right">
                                    <p>Copyright &copy; SOCIALCOP PVT LTD 2016</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END : LOGIN PAGE 5-1 -->
        <!--[if lt IE 9]>
    <script src="<?= $this->config->item('adminassets'); ?>global/plugins/respond.min.js"></script>
    <script src="<?= $this->config->item('adminassets'); ?>global/plugins/excanvas.min.js"></script>
    <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?= $this->config->item('adminassets'); ?>global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= $this->config->item('adminassets'); ?>global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?= $this->config->item('adminassets'); ?>pages/scripts/login-5.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>