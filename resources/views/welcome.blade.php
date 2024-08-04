<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero {
            background-image: url('images/layout_img/Random_Image3.jpg');
            background-size: cover;
            background-position: center;
            height: 80vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero-text {
            position: relative;
            z-index: 10;
            color: white;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            font-family: 'Figtree', sans-serif;
        }

        .header-link {
            color: #FF2D20;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            transition: color 0.3s ease;
        }

        .header-link:hover {
            color: #e63946;
        }

        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1a202c;
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .section-title.dark {
            color: #f7fafc;
        }

        .description {
            font-size: 1.125rem;
            color: #4a5568;
            margin-top: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .description.dark {
            color: #a0aec0;
        }

        .book-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 1rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .book-description {
            font-size: 1rem;
            color: #718096;
            margin-top: 0.5rem;
        }

        .book-description.dark {
            color: #cbd5e0;
        }

        footer p {
            color: #a0aec0;
            font-size: 0.875rem;
        }

        footer p.dark {
            color: #718096;
        }
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="bg-gray-200 dark:bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <a href="{{ url('/') }}" class="text-xl font-bold text-black dark:text-white header-link">Library</a>
            </div>
            @if (Route::has('login'))
                <nav class="flex space-x-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white header-link"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white header-link"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white header-link"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-text">
            <h1 class="text-5xl font-bold">Welcome to Library</h1>
            <!-- Login and Register Buttons -->
            <div class="flex justify-center space-x-4 mt-4">
                <a href="{{ route('login') }}" class="text-white border border-white font-bold py-2 px-4 rounded-md">Log in</a>
                <a href="{{ route('register') }}" class="text-white border border-white font-bold py-2 px-4 rounded-md">Register</a>
            </div>
        </div>
    </section>
    <main class="container mx-auto p-6 text-center">
        <h2 class="section-title {{ app()->getLocale() == 'dark' ? 'dark' : '' }}">Library Dashboard</h2>
        <p class="description {{ app()->getLocale() == 'dark' ? 'dark' : '' }}">Selamat datang di dasbor perpustakaan Anda, tempat di mana Anda dapat mengelola koleksi buku dan aktivitas perpustakaan Anda.</p>
        <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                <img src="images/layout_img/Random_Image.jpg" alt="Random Image" class="w-full h-80 object-cover rounded-t-lg">
                <h3 class="book-title">Book 1</h3>
                <p class="book-description {{ app()->getLocale() == 'dark' ? 'dark' : '' }}">Koleksi buku-buku yang beraneka ragam, mulai dari kuliner, kopi, hingga desain, semuanya tertata rapi di rak. Cocok bagi mereka yang mencari inspirasi dan pengetahuan dari berbagai topik menarik.</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                <img src="images/layout_img/Random_Image1.jpg" alt="Random Image1" class="w-full h-80 object-cover rounded-t-lg">
                <h3 class="book-title">Book 2</h3>
                <p class="book-description {{ app()->getLocale() == 'dark' ? 'dark' : '' }}">Sebuah rak buku yang menampilkan koleksi buku klasik dan dekorasi vintage. Menyediakan suasana hangat dan nostalgia bagi para pembaca yang menyukai estetika dan nilai historis dari bacaan mereka.</p>
            </div>
            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                <img src="images/layout_img/Random_Image2.jpg" alt="Random Image2" class="w-full h-80 object-cover rounded-t-lg">
                <h3 class="book-title">Book 3</h3>
                <p class="book-description {{ app()->getLocale() == 'dark' ? 'dark' : '' }}">Rak buku yang penuh dengan berbagai literatur dari segala penjuru dunia, ditemani oleh tangga kayu yang menambah kesan rustic. Tempat sempurna untuk menjelajahi dunia melalui halaman-halaman buku yang beraneka ragam.</p>
            </div>
        </div>
    </main>
    <footer class="bg-gray-200 dark:bg-gray-800 p-4 mt-12">
        <div class="container mx-auto text-center">
            <p class="footer-text {{ app()->getLocale() == 'dark' ? 'dark' : '' }}">&copy; 2024 Library. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
