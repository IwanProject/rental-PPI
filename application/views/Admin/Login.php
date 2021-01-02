<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="<?= base_url() ?>">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.png">
    <!-- Page Title  -->
    <title><?= $title; ?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashlite.css?ver=2.2.0">
    <link id="skin-default" rel="stylesheet" href="<?= base_url() ?>assets/css/theme.css?ver=2.2.0">
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">

                    <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                        <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                    </div>
                    <div class="nk-block nk-block-middle nk-auth-body">

                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">Sign-In</h5>

                            </div>
                        </div><!-- .nk-block-head -->
                        <form action="<?= base_url() ?>Admin/login" method="POST">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="username">Username</label>
                                </div>
                                <input type="text" class="form-control form-control-lg" name="username" id="username" placeholder="Enter your username ">
                            </div><!-- .foem-group -->
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="form-control-wrap">
                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your password">
                                </div>
                            </div><!-- .foem-group -->

                            <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>

                        </form><!-- form -->
                        <div class="form-note-s2 pt-4"> New on our platform? <a href="<?= base_url('Register') ?>">Create an account</a> </div>

                    </div><!-- .nk-block -->


                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="<?= base_url() ?>assets/js/bundle.js?ver=2.2.0"></script>
    <script src="<?= base_url() ?>assets/js/scripts.js?ver=2.2.0"></script>

</html>