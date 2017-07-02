<?php require "../accounts/login/loginheader.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Pages - Siteline</title>

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
                        <a href="my_pages.php">My pages</a>
                    </li>
                    <li>
                        <a href="../accounts/login/logout.php">Log out</a>
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
                  <h4>My Pages</h4>
              </div>
              <div class="panel-body">
                <?php
                    $host = "localhost";
                    $user = "root";
                    $password = "*0D3CED9BEC10A777AEC23CCC353A8C08A633045E_TESTING_P@55W0rd!";
                    $db = "web";

                    // Create connection
                    $conn = new mysqli($host, $user, $password, $db);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM web.pages WHERE user_id='" . $_SESSION['username'] . "';";
                    echo $sql;
                    $result_array = mysqli_query($conn, $sql);
                    mysqli_close($conn);

                ?>


                <table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Main title</th>
                      <th>Slug</th>
                      <th>View page</th>
                    </tr>
                  </thead>
                <?php
                    foreach($result_array as $page) {
                      echo "<tr>";
                      echo "<td>" . $page['title'] . "</td>";
                      echo "<td>" . $page['main-title'] . "</td>";
                      echo "<td>" . $page['slug'] . "</td>";
                      echo "<td><a href='" . "'>View page</a>" . "</td>";
                      echo "</tr>";
                    }
                ?>
                </table>
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
