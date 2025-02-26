const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signIn = document.getElementById('signInForm');
const signUp = document.getElementById('signUpForm');

signUpButton.addEventListener('click', function () {
    signIn.style.display = 'none';
    signUp.style.display = 'block';
});
signInButton.addEventListener('click', function () {
    signIn.style.display = 'block';
    signUp.style.display = 'none';
});