const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})
document.getElementById("fName").addEventListener("input", function (e) {
    const value = e.target.value;
    const errorElement = document.getElementById("fNameError");
    if (/[^a-zA-Z]/.test(value)) {
        errorElement.style.display = "inline"; // Show error message
    } else {
        errorElement.style.display = "none"; // Hide error message
    }
});

// Validate Last Name
document.getElementById("lName").addEventListener("input", function (e) {
    const value = e.target.value;
    const errorElement = document.getElementById("lNameError");
    if (/[^a-zA-Z]/.test(value)) {
        errorElement.style.display = "inline"; // Show error message
    } else {
        errorElement.style.display = "none"; // Hide error message
    }
});