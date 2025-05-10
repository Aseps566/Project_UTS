<?php
session_start();
if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['role'] === 'admin') {
        header("Location: dashboard/beranda.php");
    } else {
        header("Location: landpage.php");
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .form-input {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .form-input:focus {
            transform: scale(1.02);
            box-shadow: 0 0 0 3px rgba(74, 222, 128, 0.3);
        }
        
        .login-container {
            perspective: 1000px;
        }
        
        .login-card {
            transition: transform 0.6s, box-shadow 0.3s;
            transform-style: preserve-3d;
        }
        
        .login-card:hover {
            transform: translateY(-5px) rotateX(5deg);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .btn-login {
            background-image: linear-gradient(to right, #10b981, #22c55e, #84cc16);
            background-size: 200% auto;
            transition: all 0.5s ease-in-out;
        }
        
        .btn-login:hover {
            background-position: right center;
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(34, 197, 94, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }
        
        .pulse-on-load {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        .bg-gradient-animated {
            background-size: 300% 300%;
            background-image: linear-gradient(45deg,rgb(168, 241, 207),rgb(126, 235, 191),rgb(68, 194, 148),rgb(13, 139, 97),rgb(4, 121, 84));
            animation: gradient 15s ease infinite;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .input-error {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
            border-color: #ef4444;
        }
        
        @keyframes shake {
            10%, 90% { transform: translateX(-1px); }
            20%, 80% { transform: translateX(2px); }
            30%, 50%, 70% { transform: translateX(-4px); }
            40%, 60% { transform: translateX(4px); }
        }
        
        .text-accent {
            color: #059669;
        }
        
        .hover\:text-accent:hover {
            color: #047857;
        }
        
        .border-focus:focus {
            border-color: #34d399;
            ring-color: #a7f3d0;
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-animated flex items-center justify-center p-4">
    <div class="w-full max-w-md login-container">
        <div class="bg-white/90 backdrop-blur-sm shadow-2xl rounded-xl px-10 py-10 login-card hover:shadow-3xl transition-all duration-300">
            <div class="flex justify-center mb-6">
                <svg class="w-20 h-20 text-emerald-500 floating-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 11c0 1.1046-.8954 2-2 2s-2-.8954-2-2 .8954-2 2-2 2 .8954 2 2zm0 0v1.5a1.5 1.5 0 001.5 1.5h1.5m3-4.5V12m-3 0h3m-3 0v3m0-3h-3m0 0V9m0 3H9"></path>
                </svg>
            </div>
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-6 pulse-on-load">Selamat Datang</h2>
            <form action="login_process.php" method="POST" class="space-y-6">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="username">Username</label>
                    <input id="username" name="username" type="text" required
                           class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-emerald-400 focus:outline-none placeholder-gray-400 hover:border-emerald-300"
                           placeholder="Enter your username">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-2" for="password">Password</label>
                    <input id="password" name="password" type="password" required
                           class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-emerald-400 focus:outline-none placeholder-gray-400 hover:border-emerald-300"
                           placeholder="Enter your password">
                </div>
                <div class="pt-2">
                    <button type="submit"
                            class="w-full btn-login text-white font-bold py-3 rounded-xl shadow-lg hover:shadow-xl focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-opacity-75 transition-all">
                        Sign In
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-sm mt-8 transition-colors hover:text-gray-600">
                Don't have an account?
                <a href="#" class="text-emerald-600 hover:text-emerald-700 underline font-semibold transition-colors">Contact Admin</a>
            </p>
        </div>
    </div>
    
    <script>
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('invalid', () => {
                input.classList.add('input-error');
                setTimeout(() => {
                    input.classList.remove('input-error');
                }, 500);
            });
        });
    </script>
</body>
</html>