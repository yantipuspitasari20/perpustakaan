<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-2AqDyo/x9ER8V6R2TbC4b4zD/R9Bhh9Xzy5MQ+n0E5i2A0J8aOYVsn5YQ1BdhKb4NdKkkf4tpQiw3Ue+frJ+w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Figtree', sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden; /* Prevent scrollbars */
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/layout_img/Random_Image3.jpg');
            background-size: cover;
            background-position: center;
            z-index: -1; /* Place behind other content */
        }
        .login-container {
            background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.7));
            border-radius: 15px;
            padding: 2.5rem;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
            text-align: center;
            position: relative;
            z-index: 1; /* Ensure it's above the background */
        }
        .login-container h2 {
            font-size: 2.25rem;
            margin-bottom: 1.5rem;
            color: #4a2c2a;
        }
        .login-container .icon {
            margin-bottom: 1.5rem;
        }
        .login-container .icon i {
            font-size: 4.5rem;
            color: #6d4c41;
        }
        .login-container label {
            display: block;
            font-size: 0.9rem;
            color: #4a2c2a;
            margin-bottom: 0.5rem;
        }
        .login-container input {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 0.75rem;
            width: 100%;
            margin-bottom: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
            background-color: #fff; /* Ensure the background is white for readability */
        }
        .login-container input:focus {
            outline: none;
            border-color: #6d4c41;
            box-shadow: 0 0 0 3px rgba(109, 76, 65, 0.25);
        }
        .login-container button {
            background-color: #6d4c41;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 0.75rem;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s;
            width: 100%;
        }
        .login-container button:hover {
            background-color: #4e342e;
            transform: scale(1.05);
        }
        .login-container a {
            color: #6d4c41;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .login-container .remember-label {
            font-size: 0.8rem;
            color: #4a2c2a;
        }
        .login-container .remember-checkbox {
            width: 16px;
            height: 16px;
        }
        .login-container .flex {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="login-container">
        <div class="icon">
            <i class="fas fa-book-reader"></i> <!-- Library icon from Font Awesome -->
        </div>
        <h2>Login to Your Library</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="email">Email Address</label>
                <input id="email" type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>
            <div class="flex">
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="remember-checkbox">
                    <label for="remember_me" class="remember-label">Remember me</label>
                </div>
                <a href="{{ route('password.request') }}">Forgot your password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
