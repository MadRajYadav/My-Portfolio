// Form Validation
function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var message = document.forms["contactForm"]["message"].value;
    
    if (name === "") {
        alert("Please enter your name.");
        return false;
    }
    
    if (email === "") {
        alert("Please enter your email address.");
        return false;
    }
    
    if (message === "") {
        alert("Please enter a message.");
        return false;
    }
    
    return true;
}

// File Upload Validation
function validateFileUpload() {
    var resume = document.getElementById("resume").value;
    
    if (resume === "") {
        alert("Please select a resume file.");
        return false;
    }
    
    var allowedExtensions = /(\.pdf|\.doc|\.docx)$/i;
    
    if (!allowedExtensions.exec(resume)) {
        alert("Invalid file type. Allowed file types: PDF, DOC, DOCX.");
        return false;
    }
    
    return true;
}

// Attach event listener to the form submit event
document.getElementById("contactForm").addEventListener("submit", function(event) {
    if (!validateForm() || !validateFileUpload()) {
        event.preventDefault();
    }
});


// scroll left and right
function scrollRight () {
    document.getElementById('home').scrollLeft += 300;
}
function scroll_left () {
    document.getElementById('home').scrollLeft -= 300;
}


        
   