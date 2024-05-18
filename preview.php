<!-- 
author:  Jadid Alam
date:    01/03/2024
version: 1.0

This is the experience page for Jadid Alam's portfolio. 
-->

<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Jadid Alam's Blog Entry Preview</title>
        <meta name="viewport" content="width=device-width">
        <!-- link to the CSS file for the page -->
        <link rel="stylesheet" href="CSS/preview.css" media="screen and (min-width: 769px)">
        <link rel="stylesheet" href="CSS/preview-tablet.css" media="screen and (min-width: 481px) and (max-width: 768px)">
        <link rel="stylesheet" href="CSS/preview-mobile.css" media="screen and (max-width: 480px)">
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
                <li class="current-page"><a href="about-me.html">About</a></li>
                <li><a href="skills-achievements.html">Skills</a></li>
                <li><a href="educations-qualifications.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="portfolio-projects.html">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
            </ul>
        </nav>

        <main>

            <article>
                <h2>
                    <?php
                        $title = $_POST['title'];
                        echo $title;
                    ?>
                </h2>
                <pre>
                    <?php
                        $content = $_POST['content'];
                        echo $content;
                    ?>
                </pres>
            </article>

            <div>
                <form method="POST" action="addEntry.php">
                    <input class="hidden" type="text" name="title" id="title" value="<?php echo $title; ?>">
                    <textarea class="hidden" name="content" id="content" ><?php echo $content; ?></textarea>
                    <button>Edit</button>
                </form>
                <form method="POST" action="addPost.php">
                    <input class="hidden" type="text" name="title" id="title" value="<?php echo $title; ?>">
                    <textarea class="hidden" name="content" id="content" ><?php echo $content; ?></textarea>
                    <button>Submit</button>
                </form>
                
            </div>

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