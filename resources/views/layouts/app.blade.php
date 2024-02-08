<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <header class="text-gray-600 body-font">
        <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
            <a class="flex items-center mb-4 font-medium text-gray-900 title-font md:mb-0">
                <img src="{{ asset('storage/logo.png') }}" alt="" class="object-contain w-10 h-10">
                <span class="ml-3 text-xl">キャンプメシ</span>
            </a>
            <nav class="flex flex-wrap items-center justify-center text-base md:ml-auto">
                <a class="mr-5 hover:text-gray-900">Cart</a>
                <a class="mr-5 hover:text-gray-900">My Page</a>
                <a class="mr-5 hover:text-gray-900">Home</a>
            </nav>
            @if (Auth::check())
                <form action="{{ route('logout') }}" method="POST" class="inline-flex items-center">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center px-3 py-1 mt-4 text-base bg-gray-100 border-0 rounded focus:outline-none hover:bg-gray-200 md:mt-0">
                        Logout
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                    class="inline-flex items-center px-3 py-1 mt-4 text-base bg-gray-100 border-0 rounded focus:outline-none hover:bg-gray-200 md:mt-0">Login
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            @endif
        </div>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <footer class="text-gray-600 body-font">
        <div class="container flex flex-col items-center px-5 py-8 mx-auto sm:flex-row">
            <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                <img src="{{ asset('storage/logo.png') }}" alt="" class="object-contain w-10 h-10">
                <span class="ml-3 text-xl">CampMeshi</span>
            </a>
            <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0">©
                2024 — Group4
                <a href="#.html" class="ml-1 text-gray-600" rel="noopener noreferrer" target="_blank">Contact Us</a>
            </p>
        </div>
    </footer>

    @section('scripts')
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @show
</body>

</html>
