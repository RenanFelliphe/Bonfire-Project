const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const registerButton = document.getElementById("register");
const container = document.getElementById("container");

signUpButton.addEventListener('click', () => {
    container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});
registerButton.addEventListener('click', () => {
    container.classList.remove('right-panel-active');
});