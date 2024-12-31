<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Culture partage - Inscription</title>
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans leading-normal tracking-normal min-h-screen">
    <div class="relative h-screen">
        <!-- Background Image -->
        <img src="/Asset/hero.jpg" alt="Hero Image" class="w-full h-full object-cover">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40">
            <!-- Content Container -->
            <div class="relative h-full flex flex-col items-center justify-center">
                <!-- Hero Content -->
                <div id="welcomText" class="text-center z-10">
                    <h1 class="text-4xl md:text-5xl text-white font-bold px-4 mb-8">Soyez Bienvenus chez Culture Partage</h1>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button id="loginBtn"
                            class="px-8 py-3 bg-white text-gray-800 rounded-full hover:bg-gray-100 transform hover:scale-105 transition duration-300 font-semibold shadow-lg">
                            Login
                        </button>
                        <button id="registerBtn"
                            class="px-8 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transform hover:scale-105 transition duration-300 font-semibold shadow-lg">
                            Register
                        </button>
                    </div>
                </div>

                <!-- Login Form Overlay -->
                <div id="loginForm"
                    class="absolute inset-0 flex items-center justify-center bg-black/40 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
                    <div class="bg-white p-8 rounded-xl shadow-xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0"
                        id="loginFormContent">
                        <div class="flex justify-end mb-4">
                            <button onclick="hideForm('login')" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="red" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Connexion</h2>
                        <form method="POST" class="space-y-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email" placeholder="Votre Email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 placeholder-gray-400">
                            </div>

                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <input type="password" name="password" id="password" placeholder="Votre Mot de passe"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 placeholder-gray-400">
                            </div>

                            <button type="submit"
                                class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transform hover:scale-[1.02] transition duration-300 font-semibold shadow-md">
                                Se connecter
                            </button>

                            <p class="text-center text-sm text-gray-600">Pas encore de compte ?
                                <a href="#" onclick="switchForm('register')" class="text-indigo-600 hover:text-indigo-800 font-medium transition duration-200">
                                    Inscrivez-vous
                                </a>
                            </p>
                        </form>
                    </div>
                </div>

                <!-- Register Form Overlay -->
                <div id="registerForm"
                    class="absolute inset-0 flex items-center justify-center bg-black/40 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
                    <div class="bg-white p-8 rounded-xl shadow-xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0"
                        id="registerFormContent">
                        <div class="flex justify-end mb-4">
                            <button onclick="hideForm('register')" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">Créer un compte</h2>
                        <form method="POST" class="space-y-6">
                            <div>
                                <label for="email-register" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" name="email" id="email-register" placeholder="Votre Email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 placeholder-gray-400">
                            </div>

                            <div>
                                <label for="confirm-email" class="block text-sm font-medium text-gray-700 mb-1">Confirmer Email</label>
                                <input type="email" name="confirm-email" id="confirm-email" placeholder="Confirmer votre Email"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 placeholder-gray-400">
                            </div>

                            <div>
                                <label for="password-register" class="block text-sm font-medium text-gray-700 mb-1">Mot de passe</label>
                                <input type="password" name="password" id="password-register" placeholder="Votre Mot de passe"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200 placeholder-gray-400">
                            </div>

                            <button type="submit"
                                class="w-full bg-indigo-600 text-white py-3 rounded-lg hover:bg-indigo-700 transform hover:scale-[1.02] transition duration-300 font-semibold shadow-md">
                                Créer un compte
                            </button>

                            <p class="text-center text-sm text-gray-600">Déjà inscrit ?
                                <a href="#" onclick="switchForm('login')" class="text-indigo-600 hover:text-indigo-800 font-medium transition duration-200">
                                    Connectez-vous
                                </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const welcome = document.getElementById('welcomText'); //à cacher
            const loginBtn = document.getElementById('loginBtn');
            const registerBtn = document.getElementById('registerBtn');
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('register');

            loginBtn.addEventListener('click', () => {
                loginForm.classList.remove('hidden');
                registerForm.classList.add('hidden');
                welcome.classList.add('hidden');
            });
            registerBtn.addEventListener('click', () => {
                loginForm.classList.add('hidden');
                registerForm.classList.remove('hidden');
                welcome.classList.add('hidden');
            });
        });
    </script>
    <!-- 
    <script>
        function showForm(formType) {
            const form = document.getElementById(`${formType}Form`);
            const formContent = document.getElementById(`${formType}FormContent`);
            
            form.classList.remove('hidden');
            // Force reflow
            form.offsetHeight;
            form.classList.remove('opacity-0');
            
            setTimeout(() => {
                formContent.classList.remove('scale-95', 'opacity-0');
            }, 10);
        }

        function hideForm(formType) {
            const form = document.getElementById(`${formType}Form`);
            const formContent = document.getElementById(`${formType}FormContent`);
            
            formContent.classList.add('scale-95', 'opacity-0');
            form.classList.add('opacity-0');
            
            setTimeout(() => {
                form.classList.add('hidden');
            }, 300);
        }

        function switchForm(newForm) {
            const currentForm = newForm === 'login' ? 'register' : 'login';
            hideForm(currentForm);
            setTimeout(() => {
                showForm(newForm);
            }, 300);
        }
    </script> -->
</body>

</html>