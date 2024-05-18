<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadid Alam's Logout Page</title>
</head>
<body>
    <?php
        session_start(); 
        session_unset(); 
        session_destroy(); 

        echo "Session data has been reset and session has been stopped.";
        header("Location: index.php");
        exit;
    ?>
</body>
</html>