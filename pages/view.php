<?php require "../accounts/login/loginheader.php"; ?>

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

    $sql = "SELECT * FROM web.pages WHERE user_id='" . $_SESSION['username'] . "' AND slug='" . $_GET['slug'] . "' LIMIT 1;";
    $pages = mysqli_query($conn, $sql);
    mysqli_close($conn);

    foreach($pages as $page) {
      $template_name = '../templates/' . $page['template_id'] . '/index.php';
      $name = $page['slug'];
      $main_title = $page['main-title'];
      $subtitle = $page['subtitle'];
      $image1 = $page['image1'];
      $title_2 = $page['title-2'];
      $subtitle_2 = $page['subtitle-2'];
      $title_3 = $page['title-3'];
      $subtitle_3 = $page['subtitle-3'];
      $google_app = $page['google-app'];
      $iphone_app = $page['iphone-app'];
      $twitter_link = $page['twitter-link'];
      $facebook_link = $page['facebook-link'];
      $telephone = $page['telephone'];
      $contact_email = $page['contact-email'];
      $project_image1 = $page['project-image1'];
      $project_image2 = $page['project-image2'];
      $project_image3 = $page['project-image3'];
      $project_title1 = $page['project-title1'];
      $project_title2 = $page['project-title2'];
      $project_title3 = $page['project-title3'];
    }
?>

<?php include($template_name); ?>
