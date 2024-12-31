document.addEventListener('DOMContentLoaded', () => {
    const welcomeText = document.getElementById('welcomeText');
    const loginBtn = document.getElementById('loginBtn');
    const registerBtn = document.getElementById('registerBtn');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    const loginFormContent = document.getElementById('loginFormContent');
    const registerFormContent = document.getElementById('registerFormContent');
    const closeBtns = document.querySelectorAll('.closeForm');

    function showForm(form, formContent) {
        welcomeText.classList.add('fade-out');
        form.classList.remove('hidden');
        requestAnimationFrame(() => {
            form.classList.remove('opacity-0');
            formContent.classList.remove('scale-95', 'opacity-0');
        });
    }

    function hideForm(form, formContent) {
        welcomeText.classList.remove('fade-out');
        formContent.classList.add('scale-95', 'opacity-0');
        form.classList.add('opacity-0');

        setTimeout(() => {
            form.classList.add('hidden');
        }, 300);
    }

    function hideAllForms() {
        hideForm(loginForm, loginFormContent);
        hideForm(registerForm, registerFormContent);
    }

    loginBtn.addEventListener('click', () => {
        hideForm(registerForm, registerFormContent);
        showForm(loginForm, loginFormContent);
    });

    registerBtn.addEventListener('click', () => {
        hideForm(loginForm, loginFormContent);
        showForm(registerForm, registerFormContent);
    });

    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            hideAllForms();
        });
    });

    // Fermer le formulaire en cliquant en dehors
    [loginForm, registerForm].forEach(form => {
        form.addEventListener('click', (e) => {
            if (e.target === form) {
                hideAllForms();
            }
        });
    });

    // Gestion des touches clavier
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            hideAllForms();
        }
    });
});