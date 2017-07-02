<?php require "../accounts/login/loginheader.php"; ?>
<?php
    function redirect($url, $statusCode = 303)
    {
     header('Location: ' . $url, true, $statusCode);
     die();
    }


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

    $sql = "DELETE FROM web.pages WHERE user_id='" .$_SESSION['username']. "' AND
                                        slug='" .$_GET['slug']. "';";
    $result_array = mysqli_query($conn, $sql);
    mysqli_close($conn);
    redirect('my_pages.php', 302);
?>
