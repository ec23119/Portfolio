<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadid Alam's Add Post Page</title>
</head>

    <body>
        <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "blogposts";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if (!$conn) {
                die("Connection failed: " . $conn_connect_error());
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $title = $_POST['title'];
                $date = date('Y-m-d H:i:s');
                $text = $_POST['content'];
                
                $stmt = mysqli_prepare($conn, "INSERT INTO blog_posts (title, post_date, content) VALUES (?, ?, ?)"); // palce holders beacuse when i user large data it gives an error
                mysqli_stmt_bind_param($stmt, "sss", $title, $date, $text); // sss means string, string, string and this method binds the parameters to the place holders
            
                if (mysqli_stmt_execute($stmt)) {
                    echo "New record created successfully";
                    header("Location: viewBlog.php");
                    exit;
                } else {
                    echo "Error: " . mysqli_stmt_error($stmt); // Use mysqli_stmt_error for prepared statements
                }
            
                mysqli_stmt_close($stmt);
                
                mysqli_close($conn);
            }
        ?>

    </body>
</html>