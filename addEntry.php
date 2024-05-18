<!-- 
author:  Jadid Alam
date:    01/03/2024
version: 1.0

This is the log in page for Jadid Alam's Blog. 
-->


<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Jadid Alam's Add Entry</title>
        <meta name="viewport" content="width=device-width">
        <!-- link to the CSS file for the page -->
        <link rel="stylesheet" href="CSS/addEntry.css" media="screen and (min-width: 769px)">
        <link rel="stylesheet" href="CSS/addEntry-tablet.css" media="screen and (min-width: 481px) and (max-width: 768px)">
        <link rel="stylesheet" href="CSS/addEntry-mobile.css" media="screen and (max-width: 480px)">
        <!-- link to the JavaScript file for the page -->
        <script src="JavaScript/addEntry.js" defer></script>
    </head>

    <body>

        <?php
            session_start();
            if (!isset($_SESSION['firstName'])) {
                $_SESSION['gotoaddEntry'] = true;
                header("Location: login.html");
                exit;
            }
        ?>

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
                <li><a href="viewBlog.php">Blog</a></li>
            </ul>
        </nav>

        <main>

            <!-- form to add a blog to the blog -->
            <form action="addPost.php" method="POST" id="form">
            
                <legend>Add a new blog</legend>

                <!-- add blog title -->
                <?php
                    if(isset($_POST['title'])) {
                        $title = $_POST['title'];
                    } else {
                        $title = "";
                    }

                    if(isset($_POST['content'])) {
                        $content = $_POST['content'];
                    } else {
                        $content = "";
                    }
                ?>
                

                <label for="title" class="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $title; ?>" required>

                <!-- add blog content -->
                <label for="content" class="content">Content:</label>
                <textarea id="content" name="content" required><?php echo $content;  ?></textarea>
                
                <!-- add clear and submit buttons -->
                <div class="buttons">
                    <button type="submit" id="preview">Preview</button>
                    <button type="clear" id="clear">Clear</button>
                    <button type="submit" id="submit">Submit</button>
                </div>

            </form>

        </main>

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