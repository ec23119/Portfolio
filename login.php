<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadid Alam's Login Page</title>
</head>
<body>
    <?php
        
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "Blog";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . $conn_connect_error());
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $email = $_POST['email'];
            $pass1 = $_POST['password'];
            $sql = "SELECT email,password FROM USERS WHERE email = '$email' AND password = '$pass1'";
            
            if (mysqli_num_rows(mysqli_query($conn,$sql))  > 0) 
            {
                echo "successfully Logged in";
                session_start();

                // Retrieve first name and last name from the database
                $sql = "SELECT firstName, lastName FROM USERS WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['firstName'] = $row['firstName'];
                    $_SESSION['lastName'] = $row['lastName'];
                }
                
                session_write_close();
                if (isset($_SESSION['gotoaddEntry']) || $_SESSION['gotoaddEntry'] == true) {
                    unset($_SESSION['gotoaddEntry']);
                    header("Location: addEntry.php");
                    exit;
                }
                header("Location: viewBlog.php");
                exit;
            } 
            else 
            {
                echo "<h1>Error: Invalid email or password. Redirecting to the login page in 2 seconds.<h1>";
                $delay=2;
                header("Refresh: $delay; URL=login.html");
            }
            mysqli_close($conn);
        }

    ?>
</body>
</html>