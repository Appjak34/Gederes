<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=helvetica&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src="./js/jquery-2.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/blocs.min.js"></script>
    <script src="./js/jqBootstrapValidation.js"></script>
    <script src="./js/formHandler.js"></script>
    <title>Log-In</title>
    <!-- Google Analytics -->
    <!-- Google Analytics END -->
</head>

<body>
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-0 -->
        <div class="bloc sticky-nav full-width-bloc bgc-white l-bloc" id="bloc-0">
            <div class="container">
                <nav class="navbar nav-center row mini-nav">
                    <div class="navbar-header"><a class="navbar-brand" href="index.html"><span class="special-tag-for-editing-text-with-html"></span><span class="special-tag-for-editing-text-with-html"></span><img src="img/Sin%20título-1.svg" alt="logo" height="130" width="275" /></a><button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle menu-icon-rounded-bars" data-toggle="collapse" data-target=".navbar-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                    <div class="collapse navbar-collapse navbar-1 nav-special fullscreen-nav">
                        <ul class="site-navigation nav navbar-nav">
                            <li><a href="index.html" class="ltc-white">Home</a></li>
                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="log-in.html" class="ltc-white">Log In</a></li>
                            <li></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- bloc-0 END -->
        <!-- bloc-3 -->
        <div class="bloc bgc-white l-bloc" id="bloc-3">
            <div class="container bloc-lg">
                <div class="row login">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="mg-clear">Log In</h3>
                            </div>
                            <div class="panel-body">
                                <form id="form_1" novalidate success-msg="Your message has been sent." fail-msg="Sorry it seems that our mail server is not responding, Sorry for the inconvenience!">
                                    <div class="form-group"><label>Email<br></label><input id="email" class="form-control" type="email" required /></div>
                                    <div class="form-group"><label>Password<br></label><input id="name" class="form-control" required /></div> <button class="bloc-button btn btn-d btn-lg btn-block" type="submit">Submit</button></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-3 END -->
    </div>
    <!-- Main container END -->
</body>

</html>
