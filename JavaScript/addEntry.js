let clearButton = document.getElementById("clear");
let submitButton = document.getElementById("submit");
let previewButton = document.getElementById("preview");
let title = document.getElementById("title");
let blog = document.getElementById("content");


function clear(event) {

    event.preventDefault();
    let confirmed = window.confirm("Are you sure you want to clear the blog post?");

    if (confirmed) {
        
        title.value = "";
        date.value = "";
        blog.value = "";
    }
}

function submit1(event1) {   
    if (title.value === "" || blog.value === "") 
    {
        alert("Please fill out all fields before submitting.");
        event1.preventDefault();
        if (title.value === "")
        {
            title.style.border = "3px solid red";
        }
        else 
        {
            title.style.border = "1px solid lightcoral";
        }

        if (date.value === "")
        {
            date.style.border = "3px solid red";
        }
        else
        {
            date.style.border = "1px solid lightcoral";
        }

        if (blog.value === "")
        {
            blog.style.border = "3px solid red";
        }
        else
        {
            blog.style.border = "1px solid lightcoral";
        }
    }
    else 
    {   
        document.getElementById("form").action = "addPost.php";
        document.getElementById("form").submit();
        
    }
}


function preview(event) {
    if (title.value === "" || blog.value === "") 
    {
        alert("Please fill out all fields before submitting.");
        event1.preventDefault();
        if (title.value === "")
        {
            title.style.border = "3px solid red";
        }
        else 
        {
            title.style.border = "1px solid lightcoral";
        }

        if (date.value === "")
        {
            date.style.border = "3px solid red";
        }
        else
        {
            date.style.border = "1px solid lightcoral";
        }

        if (blog.value === "")
        {
            blog.style.border = "3px solid red";
        }
        else
        {
            blog.style.border = "1px solid lightcoral";
        }
    }
    else 
    {

        document.getElementById("form").action = "preview.php";
        
    }
    
}


previewButton.addEventListener('click', preview);
clearButton.addEventListener('click',clear);
submitButton.addEventListener('click',submit1);