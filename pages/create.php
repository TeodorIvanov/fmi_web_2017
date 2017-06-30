<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Page - Siteline</title>

    <!-- Bootstrap Core CSS -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../static/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../static/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.../static/js1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="../index.php">Siteline</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="accounts/sign_in.php">Sign In</a>
                    </li>
                    <li>
                        <a href="accounts/sign_up.php">Sign Up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="content-section-b" style="margin-top:20px;">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Choose your template</h4>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4 col-md-6 sb-preview text-center">
                        <div class="card h-100">
                            <a class="sb-preview-img" href="create-from-template.php?temp=1">
                                <img style="max-width:100%;" class="card-img-top img-fluid" src="../static/img/theme_demo_images/1.jpg">
                            </a>
                            <div class="card-block">
                                <h4 class="card-title">New Age</h4>
                                <p class="card-text">An app landing page theme.</p>
                            </div>
                            <div class="card-footer">
                                <a href="create-from-template.php?temp=1" class="btn btn-secondary">Choose</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 sb-preview text-center">
                        <div class="card h-100">
                            <a class="sb-preview-img" href="create-from-template.php?temp=2">
                                <img style="max-width:100%;" class="card-img-top img-fluid" src="../static/img/theme_demo_images/2.jpg">
                            </a>
                            <div class="card-block">
                                <h4 class="card-title">Creative</h4>
                                <p class="card-text">A one page creative theme.</p>
                            </div>
                            <div class="card-footer">
                                <a href="create-from-template.php?temp=2" class="btn btn-secondary">Choose</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 sb-preview text-center">
                        <div class="card h-100">
                            <a class="sb-preview-img" href="create-from-template.php?temp=4">
                                <img style="max-width:100%;" class="card-img-top img-fluid" src="../static/img/theme_demo_images/4.jpg">
                            </a>
                            <div class="card-block">
                                <h4 class="card-title">Grayscale</h4>
                                <p class="card-text">A multipurpose one page theme.</p>
                            </div>
                            <div class="card-footer">
                                <a href="create-from-template.php?temp=4" class="btn btn-secondary">Choose</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-top:30px;">
                        <p class="text-center">None of our templates suit your needs?<br/>
                        We update our template library constantly.
                        <a href="../contact_us.php">Contact us for inquiries</a></p>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="indeh.html">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="accounts/sign_in.php">Sign In</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="accounts/sign_up.php">Sign Up</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="contact_us.php">Contact us</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Toto Productions 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../static/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../static/js/bootstrap.min.js"></script>

</body>

</html>
