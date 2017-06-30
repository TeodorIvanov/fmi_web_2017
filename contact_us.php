<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact us - Siteline</title>

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

<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Siteline'; 
		$to = 'support@siteline.com'; 
		$subject = 'Message from Siteline contact form';
		
		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage) {
            if (mail ($to, $subject, $body, $from)) {
                $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
            } else {
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            }
        }
            }
?>


    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Contact us</h3>

                    <p>Don't hesitate to message us for any questions or inquiries, customer satisfaction is Siteline's #1 priority!</p>

                    <form class="form-horizontal" role="form" method="post" action="contact_us.php">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
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
