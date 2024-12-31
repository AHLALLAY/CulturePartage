<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Culture partage - Inscription</title>
    <link rel="stylesheet" href="/CSS/style.css">
</head>

<body class="bg-gradient-to-br from-gray-50 to-gray-100 font-sans leading-normal tracking-normal min-h-screen">
    <div class="relative h-screen overflow-hidden">
        <!-- Background Image avec effet parallax subtil -->
        <img src="/Asset/hero.jpg" alt="Hero Image"
            class="w-full h-full object-cover transform scale-105 transition-transform duration-1000">

        <!-- Dark Overlay amélioré -->
        <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/60">
            <!-- Content Container -->
            <div class="relative h-full flex flex-col items-center justify-center">
                <!-- Hero Content -->
                <div id="welcomeText" class="text-center z-10 slide-down">
                    <h1 class="text-5xl md:text-6xl text-white font-bold px-4 mb-12 leading-tight">
                        Soyez Bienvenus chez<br>
                        <span class="text-indigo-400">Culture Partage</span>
                    </h1>
                    <div class="flex flex-col sm:flex-row gap-6 justify-center">
                        <button id="loginBtn"
                            class="px-8 py-3 bg-white text-gray-800 rounded-full hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center gap-2">Login</span>
                        </button>
                        <button id="registerBtn"
                            class="px-8 py-3 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                            Register
                        </button>
                    </div>
                </div>

                <!-- Forms Container avec meilleure transition -->
                <div id="formsContainer" class="absolute inset-0 pointer-events-none">
                    <!-- Login Form Overlay -->
                    <div id="loginForm"
                        class="absolute inset-0 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-all duration-500 pointer-events-auto">
                        <div class="bg-white p-8 rounded-xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-500 scale-95 opacity-0"
                            id="loginFormContent">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-3xl font-bold text-gray-800">Connexion</h2>
                                <button class="closeForm text-gray-400 hover:text-red-500 transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
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

                                <!-- <p class="text-center text-sm text-gray-600">Pas encore de compte ?
                                    <a href="#" onclick="switchForm('register')" class="text-indigo-600 hover:text-indigo-800 font-medium transition duration-200">
                                        Inscrivez-vous
                                    </a>
                                </p> -->
                            </form>
                        </div>
                    </div>

                    <!-- Register Form Overlay -->
                    <div id="registerForm"
                        class="absolute inset-0 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-all duration-500 pointer-events-auto">
                        <div class="bg-white p-8 rounded-xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-500 scale-95 opacity-0"
                            id="registerFormContent">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-3xl font-bold text-gray-800">Créer un compte</h2>
                                <button class="closeForm text-gray-400 hover:text-red-500 transition-colors duration-300">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
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

                                <!-- <p class="text-center text-sm text-gray-600">Déjà inscrit ?
                                    <a href="#" onclick="switchForm('login')" class="text-indigo-600 hover:text-indigo-800 font-medium transition duration-200">
                                        Connectez-vous
                                    </a>
                                </p> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/JS/script.js"></script>
</body>

</html>