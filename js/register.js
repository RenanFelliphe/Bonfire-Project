// Menu mobile (abre/fecha o nav no header em telas estreitas)
const menuToggle = document.getElementById('LPMenuToggle');
const mobileNav = document.getElementById('LPMobileNav');

if (menuToggle && mobileNav) {
    menuToggle.addEventListener('click', () => {
        const isOpen = mobileNav.classList.toggle('LP-open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.querySelector('i').className = isOpen ? 'bi bi-x' : 'bi bi-list';
    });

    mobileNav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('LP-open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.querySelector('i').className = 'bi bi-list';
        });
    });
}

// Validação (apenas front-end, sem envio/cadastro real) do formulário de registro
const registerForm = document.getElementById('registerForm');

if (registerForm) {
    const fullname = document.getElementById('register-fullname');
    const username = document.getElementById('register-username');
    const email = document.getElementById('register-email');
    const confirmEmail = document.getElementById('register-confirm-email');
    const password = document.getElementById('register-password');
    const confirmPassword = document.getElementById('register-confirm-password');

    const setError = (input, message) => {
        const field = input.closest('.field');
        const errorEl = registerForm.querySelector(`[data-error-for="${input.id}"]`);

        if (field) field.classList.toggle('field-invalid', Boolean(message));
        if (errorEl) errorEl.textContent = message || '';
    };

    const validateRequired = (input, label) => {
        if (!input.value.trim()) {
            setError(input, `Preencha o campo ${label}.`);
            return false;
        }
        setError(input, '');
        return true;
    };

    const validateEmailsMatch = () => {
        if (!email.value || !confirmEmail.value) return true;

        if (email.value.trim().toLowerCase() !== confirmEmail.value.trim().toLowerCase()) {
            setError(confirmEmail, 'Os emails não coincidem.');
            return false;
        }
        setError(confirmEmail, '');
        return true;
    };

    const validatePasswordsMatch = () => {
        if (!password.value || !confirmPassword.value) return true;

        if (password.value !== confirmPassword.value) {
            setError(confirmPassword, 'As senhas não coincidem.');
            return false;
        }
        setError(confirmPassword, '');
        return true;
    };

    registerForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const checks = [
            validateRequired(fullname, 'Nome Completo'),
            validateRequired(username, 'Nome de Usuário'),
            validateRequired(email, 'Email'),
            validateRequired(confirmEmail, 'Confirmar Email'),
            validateRequired(password, 'Senha'),
            validateRequired(confirmPassword, 'Confirmar Senha'),
        ];

        const emailsOk = validateEmailsMatch();
        const passwordsOk = validatePasswordsMatch();

        const isValid = checks.every(Boolean) && emailsOk && passwordsOk;

        if (!isValid) {
            const firstInvalid = registerForm.querySelector('.field-invalid .field-input');
            if (firstInvalid) firstInvalid.focus();
            return;
        }

        // Sem back-end conectado ainda: apenas avança visualmente (placeholder da próxima etapa).
        window.location.href = 'home.html';
    });

    [email, confirmEmail].forEach((input) => {
        input.addEventListener('blur', validateEmailsMatch);
    });

    [password, confirmPassword].forEach((input) => {
        input.addEventListener('blur', validatePasswordsMatch);
    });
}
