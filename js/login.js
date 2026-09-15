// Toggle de visibilidade da senha (apenas efeito visual, sem envio/validação real)
const passwordField = document.getElementById('login-password');
const toggleEyeIcon = document.getElementById('togglePasswordVisibility');

if (passwordField && toggleEyeIcon) {
    toggleEyeIcon.addEventListener('click', () => {
        const isHidden = passwordField.type === 'password';

        passwordField.type = isHidden ? 'text' : 'password';
        toggleEyeIcon.classList.toggle('bi-eye-slash', !isHidden);
        toggleEyeIcon.classList.toggle('bi-eye', isHidden);
    });
}
