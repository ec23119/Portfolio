<!-- 
author:  Jadid Alam
date:    01/03/2024
version: 1.0

This is the educations page for Jadid Alam's portfolio. 
-->

<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Jadid Alam's Blog Page</title>
        <meta name="viewport" content="width=device-width">
        <!-- link to the CSS file for the page -->
        <link rel="stylesheet" href="CSS/blog.css" media="screen and (min-width: 769px)">
        <link rel="stylesheet" href="CSS/blog-tablet.css" media="screen and (min-width: 481px) and (max-width: 768px)">
        <link rel="stylesheet" href="CSS/blog-mobile.css" media="screen and (max-width: 480px)">
        <script src="JavaScript/viewBlog.js" defer></script>
    </head>


    <body>

        <!-- logo of the page -->
        <header>
            <h1>Jadid Alam</h1>
        </header>

        <!-- links for different parts of the portfolio  -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-me.html">About</a></li>
                <li><a href="skills-achievements.html">Skills</a></li>
                <li><a href="educations-qualifications.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="portfolio-projects.html">Projects</a></li>
                <li class="current-page"><a href="viewBlog.php">Blog</a></li>
            </ul>
        </nav>

        <!-- this has article with information about my educations and qualifications -->
        <main>

            <?php
                session_start();

                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "blogposts";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if (!$conn) {
                    die("Connection failed: " . $conn_connect_error());
                }

                $result = mysqli_query($conn, "SELECT * FROM blog_posts");

                // Check if there are any entries available
                if (mysqli_num_rows($result) > 0) {
                    // Fetch all entries into an array
                    $entries = 0;
                    $query = 0; 
                    $month = 0;

                    if (isset($_GET['month'])) {
                        $month = $_GET['month'];
                    }

                    if ($month == 1) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 1";
                    } elseif ($month == 2) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 2";
                    } elseif ($month == 3) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 3";
                    } elseif ($month == 4) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 4";
                    } elseif ($month == 5) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 5";
                    } elseif ($month == 6) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 6";
                    } elseif ($month == 7) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 7";
                    } elseif ($month == 8) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 8";
                    } elseif ($month == 9) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 9";
                    } elseif ($month == 10) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 10";
                    } elseif ($month == 11) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 11";
                    } elseif ($month == 12) {
                        $query  = "SELECT * FROM blog_posts WHERE MONTH(post_date) = 12";
                    } else {
                        $query = "SELECT * FROM blog_posts";
                    }

                    // Retrieve all entries from the database
                    
                    $result = mysqli_query($conn, $query);

                    // Create an empty array to store the entries
                    $entries = array();

                    // Fetch each row from the result set and add it to the entries array
                    while ($row = mysqli_fetch_assoc($result)) {
                        $entries[] = $row;
                    }

                    // Sort the entries array using two for loops
                    $count = count($entries);
                    for ($i = 0; $i < $count - 1; $i++) {
                        for ($j = 0; $j < $count - $i - 1; $j++) {
                            // Compare the 'post_date' values of adjacent entries
                            if ($entries[$j]['post_date'] < $entries[$j + 1]['post_date']) {
                                // Swap the entries if the 'post_date' of the current entry is less than the next entry
                                $temp = $entries[$j];
                                $entries[$j] = $entries[$j + 1];
                                $entries[$j + 1] = $temp;
                            }
                        }
                    }

                    // Now the $entries array contains the sorted entries
                    // You can use it as per your requirements


                    foreach ($entries as $entry) {
                        echo '<article id=' . $entry['ID'] . '>';
                        echo '<small>' . date('d-m-Y h:i', strtotime($entry['post_date'])) . ' UTC' . '</small>';
                        echo '<h2>' . $entry['title'] . '</h2>';
                        echo '<pre>' . $entry['content'] . '</pre>';
                        echo '<button id="hover" name='.$entry['ID'].'>Click to View Full Blog</button>';
                        echo '</article>';
                    }

                    // Use the latest entry as needed
                    // ...
                } else {
                    // No entries available
                    // Handle the case when there are no entries
                    echo '<p>No entries available.</p>';
                    header("Location: addEntry.php");
                    exit;
                }

            ?>

        </main>

        <aside>
            <form id="dateFilter" action="viewBlog.php" method="GET">
                <label for="month">Filter by Month:</label>
                <select name="month" id="month">
                    <option value="0"
                        <?php
                            if ($month == 0) {
                                echo 'selected';
                            }
                        ?>
                    >All Months</option>
                    <option value="1"
                        <?php
                            if ($month == 1) {
                                echo 'selected';
                            }
                        ?>
                    >January</option>
                    <option value="2"
                        <?php
                            if ($month == 2) {
                                echo 'selected';
                            }
                        ?>
                    >February</option>
                    <option value="3"  
                        <?php
                            if ($month == 3) {
                                echo 'selected';
                            }
                        ?>
                    >March</option>
                    <option value="4"
                        <?php
                            if ($month == 4) {
                                echo 'selected';
                            }
                        ?>
                    >April</option>
                    <option value="5"
                        <?php
                            if ($month == 5) {
                                echo 'selected';
                            }
                        ?>
                    >May</option>
                    <option value="6"
                        <?php
                            if ($month == 6) {
                                echo 'selected';
                            }
                        ?>
                    >June</option>
                    <option value="7"
                        <?php
                            if ($month == 7) {
                                echo 'selected';
                            }
                        ?>
                    >July</option>
                    <option value="8"
                        <?php
                            if ($month == 8) {
                                echo 'selected';
                            }
                        ?>
                    >August</option>
                    <option value="9"
                        <?php
                            if ($month == 9) {
                                echo 'selected';
                            }
                        ?>
                    >September</option>
                    <option value="10"
                        <?php
                            if ($month == 10) {
                                echo 'selected';
                            }
                        ?>
                    >October</option>
                    <option value="11"
                        <?php
                            if ($month == 11) {
                                echo 'selected';
                            }
                        ?>
                    >November</option>
                    <option value="12"
                        <?php
                            if ($month == 12) {
                                echo 'selected';
                            }
                        ?>
                    >December</option>
                </select>
                <button type="submit">Filter</button>
            </form>
            
            <p class="message">
                <?php
                    if(isset($_SESSION['firstName'])) {
                        echo 'Welcome, ' . $_SESSION['firstName'] . '!';
                    } else {
                        echo 'Welcome, Guest!';
                    }
                    
                ?>
            </p>
            <button id="login">
                <?php
                    
                    if(isset($_SESSION['firstName'])) {
                        echo 'Log Out';
                    } else {
                        echo 'Log In';
                    }
                    session_write_close();
                ?>
            </button>
            <button id="addPost">Add Post</button>
        </aside>

        <!-- the bottom of the page, has contact details and useful links -->
        <footer>
            <h4>Contact information:</h4>
            <small>
                Email: <a href="mailto:jadid.alam.08@gmail.com">jadid.alam.08@gmail.com</a> | 
                Phone: <a href="tel:+447491277476">+44 7491 277476</a> | 
                Indeed: <a href="https://www.indeed.co.uk/me/jobs/jadid-alam-b57a112a5">Indeed Profile</a>
            </small>
            <br>
            <small>@2024 Jadid Alam</small>
        </footer>

    </body>

</html>