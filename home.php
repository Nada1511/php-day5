<?php
// Check if user is logged in, else redirect to login page
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .btn-danger {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <p class="lead">You have successfully logged in. Enjoy your time on our site.</p>
    <img src="download.png" alt="">
    <a href="logout.php" class="btn btn-danger btn-block">Signout</a>
</div>

</body>
</html>