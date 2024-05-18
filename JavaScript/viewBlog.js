let login = document.getElementById("login");
let post = document.getElementById("addPost");
let clickMe = document.querySelectorAll("button[id='hover']");

login.addEventListener("click", function() {

    let buttonText = login.innerHTML.trim();

    if (buttonText == "Log In") {
        window.location.href = "login.html";
    }
    else if (buttonText == "Log Out") {
        window.location.href = "logout.php";
    }
    else {
       console.log("Error: login button not working" + login.innerHTML);
    }
});

post.addEventListener("click", function() {
    window.location.href = "addEntry.php";
});

clickMe.forEach(button => {
    button.addEventListener("click", function() {

        let article = document.getElementById(this.name); 
        if (article.style.height == "21rem") {
            article.style.height = "20rem";
        }

        if (article.style.height == "auto") {
            article.style.height = "20rem";
            article.querySelector("p").style.overflow = "hidden";
        } else {
            article.style.height = "auto";
            article.querySelector("p").style.overflow = "scroll";
        }

    });
});