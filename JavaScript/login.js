let loginButton = document.getElementById("login");
let email = document.getElementById("email");
let password = document.getElementById("password");

function login(event1) {   
    if (email.value === "" || password.value === "") 
    {
        alert("Missing email or password!");
        event1.preventDefault();

        if (email.value === "")
        {
            email.style.border = "3px solid red";
        }
        else 
        {
            email.style.border = "1px solid lightcoral";
        }

        if (password.value === "")
        {
            password.style.border = "3px solid red";
        }
        else
        {
            password.style.border = "1px solid lightcoral";
        }
    }
    else 
    {
        let post = document.createElement("form");
        post.submit();
    }
}


loginButton.addEventListener('click',login);