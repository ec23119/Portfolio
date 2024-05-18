<!-- 
author:  Jadid Alam
date:    01/03/2024
version: 1.0

This is the homepage for Jadid Alam's portfolio. 
-->

<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Jadid Alam's Homepage</title>
        <meta name="viewport" content="width=device-width">
        <!-- link to the CSS file for the page -->
        <link rel="stylesheet" href="CSS/homepage.css" media="screen and (min-width: 769px)">
        <link rel="stylesheet" href="CSS/homepage-tablet.css" media="screen and (min-width: 481px) and (max-width: 768px)">
        <link rel="stylesheet" href="CSS/homepage-mobile.css" media="screen and (max-width: 480px)">
    </head>

    <body>

        <!-- logo of the page -->
        <header>
            <h1>Jadid Alam</h1>
        </header>

        <!-- links for different parts of the portfolio  -->
        <nav>
            <ul>
                <li class="current-page"><a href="index.php">Home</a></li>
                <li><a href="about-me.html">About</a></li>
                <li><a href="skills-achievements.html">Skills</a></li>
                <li><a href="educations-qualifications.html">Education</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="portfolio-projects.html">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
            </ul>
        </nav>

        <!-- contains the the articles that place in different spots on the page-->
        <main>

            <!-- article with a short introduction about me -->
            <article class="item1">
                <p>Hello, I am <strong>Jadid Alam</strong> and I am a computer science student ,with the hopes of becoming a principal software engineer in the future.</p>
            </article>

            <!-- article with a link to my linked-in page with an image of linked in logo -->
            <article class="item2">

                <figure>
                    <img src="images/LinkedIn-logo.png" alt="Linked-in">
                    <a href="https://www.linkedin.com/in/jadid-alam-b57a112a5/">&#8599;</a>
                </figure>

            </article>

            <!-- article with a link to my github page with an image of github logo -->
            <article class="item3">

                <figure>
                    <img src="images/GitHub.jpg" alt="Github">
                    <a href="">&#8599;</a>
                </figure>

            </article>

            <!-- article with a link to my skills and achievements page with an image -->
            <article class="item4">

                <figure>
                    <img src="images/skills-and-achievements.png" alt="Skills and Achievements">
                    <a href="skills-achievements.php">Skills &#8599;</a>
                </figure>

            </article>

            <!-- article with a link to my blog page with a stock image -->
            <article class="item5">

                <figure>
                    <img src="images/Blog.png" alt="Blog">
                    <a href="blog.php">Blog &#8599;</a>
                </figure>

            </article>
            
            <!-- article with a link to my about me page with an image of me -->
            <article class="item6">

                <figure>
                    <img src="images/Jadid-Alam.jpg" alt="About Me">
                    <a href="about-me.php">About Me &#8599;</a>
                </figure>

            </article>

            <!-- article with a link to my experience page with a stock image -->
            <article class="item7">

                <figure>
                    <img src="images/Experience.png" alt="Experience">
                    <a href="experience.php">Experience &#8599;</a>
                </figure>

            </article>

            <!-- article with a link to my projects page with a stock image -->
            <article class="item8">

                <figure>
                    <img src="images/Projects.png" alt="Projects">
                    <a href="portfolio-projects.php">Projects &#8599;</a>
                </figure>

            </article>

            <!-- article with a link to my educations and qualifications page with a stock image -->
            <article class="item9">

                <figure>
                    <img src="images/education.jpg" alt="Educations and Qualifications">
                    <a href="educations-qualifications.php">Educations &#8599;</a>
                </figure>

            </article>

            <!-- article with a short introduction about my blog -->
            <article class="item10">

                <article>
                    <p>My blog is a collection of my thoughts on technology related subjects. I hope you enjoy reading it.</p>
                </article>

            </article>


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