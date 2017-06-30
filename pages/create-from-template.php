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
              <h4>Your template</h4>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 sb-preview text-center">
                        <div class="card h-100">
                            <a class="sb-preview-img" href="create-from-template.php?temp=1">
                                <img style="max-width:100%;" class="card-img-top img-fluid"
                                src="../static/img/theme_demo_images/<?php echo $_GET['temp']; ?>.jpg">
                            </a>
                            <div class="card-block">
                                <h3 class="card-title">
                                    <?php if ($_GET['temp'] == 1) {
                                                echo "New Age";
                                        } else if ($_GET['temp'] == 2) {
                                            echo "Creative";
                                        } else if ($_GET['temp'] == 3) {
                                            echo "";
                                        } else if ($_GET['temp'] == 4) {
                                            echo "";
                                        } else if ($_GET['temp'] == 5) {
                                            echo "";
                                        };
                                    ?>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <a href="create.php" class="btn btn-secondary">Choose a different template</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Customize your page</h4>
            </div>
            <div class="panel-body">
                <h5 class="text-center">Customizing your page is easy and only takes a few minutes.</h5>
                <div class="content-section-b">
                    <form class="form-horizontal" role="form" method="post" action="create-from-template.php">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your product or company's name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="The page where your page will be hosted" value="<?php echo htmlspecialchars($_POST['slug']); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="main-title" class="col-sm-2 control-label">Heading page title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="main-title" name="main-title" placeholder="" value="<?php echo htmlspecialchars($_POST['main-title']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subtitle" class="col-sm-2 control-label">Heading page subtitle</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="" value="<?php echo htmlspecialchars($_POST['subtitle']); ?>">
                            </div>
                        </div>


                        <h4 class="text-center">Second panel</h4>

                        <div class="form-group">
                            <label for="title-2" class="col-sm-2 control-label">Second page title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title-2" name="title-2" placeholder="" value="<?php echo htmlspecialchars($_POST['title-2']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subtitle-2" class="col-sm-2 control-label">Second page subtitle</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle-2" name="subtitle-2" placeholder="" value="<?php echo htmlspecialchars($_POST['subtitle-2']); ?>">
                            </div>
                        </div>


                        <h4 class="text-center">Third panel</h4>

                        <div class="form-group">
                            <label for="title-3" class="col-sm-2 control-label">Third page title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title-3" name="title-3" placeholder="" value="<?php echo htmlspecialchars($_POST['title-3']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subtitle-3" class="col-sm-2 control-label">Third page subtitle</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subtitle-3" name="subtitle-3" placeholder="" value="<?php echo htmlspecialchars($_POST['subtitle-3']); ?>">
                            </div>
                        </div>
                        
                        <h4 class="text-center">Mobile app links</h4>
                        <div class="form-group">
                            <label for="google-app" class="col-sm-2 control-label">Google App store link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="google-app" name="google-app" placeholder="" value="<?php echo htmlspecialchars($_POST['google-app']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="iphone-app" class="col-sm-2 control-label">Apple store link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="iphone-app" name="iphone-app" placeholder="" value="<?php echo htmlspecialchars($_POST['iphone-app']); ?>">
                            </div>
                        </div>

                        <h4 class="text-center">Contacts</h4>                        
                        <div class="form-group">
                            <label for="facebook-link" class="col-sm-2 control-label">Facebook link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="facebook-link" name="facebook-link" placeholder="" value="<?php echo htmlspecialchars($_POST['facebook-link']); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="twitter-link" class="col-sm-2 control-label">Twitter link</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="twitter-link" name="twitter-link" placeholder="" value="<?php echo htmlspecialchars($_POST['twitter-link']); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="telephone" class="col-sm-2 control-label">Telephone number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="" value="<?php echo htmlspecialchars($_POST['telephone']); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="contact-email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="contact-email" name="contact-email" placeholder="" value="<?php echo htmlspecialchars($_POST['contact-email']); ?>">
                            </div>
                        </div>

                        <h4 class="text-center">Media</h4>

                        <div class="form-group">
                            <label for="image-1" class="col-sm-2 control-label">Image 1</label>
                            <div class="col-sm-10">
                                <input type="file" name="image1" id="image1">
                            </div>
                        </div>


                        <h4 class="text-center">Projects (if applicable)</h4>

                        <div class="form-group">
                            <label for="proj-image1" class="col-sm-2 control-label">Project Image 1</label>
                            <div class="col-sm-10">
                                <input type="file" name="proj-image1" id="proj-image1">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="proj-title1" class="col-sm-2 control-label">Project Title 1</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="proj-title1" name="proj-title1" placeholder="" value="<?php echo htmlspecialchars($_POST['proj-title1']); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="proj-image2" class="col-sm-2 control-label">Project Image 2</label>
                            <div class="col-sm-10">
                                <input type="file" name="proj-image2" id="proj-image2">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="proj-title2" class="col-sm-2 control-label">Project Title 2</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="proj-title2" name="proj-title2" placeholder="" value="<?php echo htmlspecialchars($_POST['proj-title2']); ?>">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="proj-image3" class="col-sm-2 control-label">Project Image 3</label>
                            <div class="col-sm-10">
                                <input type="file" name="proj-image3" id="proj-image3">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="proj-title3" class="col-sm-2 control-label">Project Title 3</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="proj-title3" name="proj-title3" placeholder="" value="<?php echo htmlspecialchars($_POST['proj-title3']); ?>">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>	
                            </div>
                        </div>
                    </form> 
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
