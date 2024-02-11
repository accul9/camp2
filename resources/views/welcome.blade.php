<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta charset="UTF-8">
    <title>メインページ</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css.map') }}">
    <link rel="stylesheet" href="{{ asset('css/styleS.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.scss') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="antialiased">
    <!-- @if (Route::has('login'))
                <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                    @auth
                                                                                                                                                                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
@else
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                                                                                                                                                    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
                    @endauth
                </div>
            @endif -->

    <header>
        <nav>
            <a class="header-logo-link" href="#">
                <img class="header-logo-img" src="{{ asset('storage/logo.png') }}" alt="A descriptive alternative text"
                    title="Additional information about the image">
            </a>
            <ul class="mainnav">
                <li><a href="{{ route('sets.index') }}">
                        <p class="nava">Sets</p>
                    </a></li>
                <li><a href="{{ route('items.index') }}">
                        <p class="nava">Items</p>
                    </a></li>
                <li><a href="">
                        <p class="nava">Shop</p>
                    </a></li>
            </ul>

            <ul class="mainnav mainnav1">
                <li><a href="{{ route('login') }}">
                        <p class="nava">login</p>
                    </a></li>
                <li><a href="{{ route('register') }}">
                        <p class="nava">signup</p>
                    </a></li>
            </ul>
        </nav>
    </header>

    <div class="slideshow">
        <div class="slideshow-image" style="background-image: url('{{ asset('images/camp-2650359_1920.jpg') }}')">
        </div>
        <div class="slideshow-image" style="background-image: url('{{ asset('images/abstract-1868624_1920.jpg') }}')">
        </div>
        <div class="slideshow-image" style="background-image: url('{{ asset('images/fireplace-1598243_1920.jpg') }}')">
        </div>
        <div class="slideshow-image" style="background-image: url('{{ asset('images/oil-lamp-6771785_1920.jpg') }}')">
        </div>
    </div>

    <nav class="screen">
        <ul class="screen_menu">
            <li><a href="./index.html">Home</a></li>
            <li><a href="">Items</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>


    <!--　 -->
    <div class="empty_1">
        <!-- メニューをposionで固定するための空の要素 -->
        <div class="openbtn"><span></span><span></span><span></span></div>
    </div>

    <div class="empty_2">
        <!-- メイン画像をposionで固定づるための空の要素 -->
    </div>

    <section>
        <p class="p0"> PRODUCTS </p>
        <p class="p1">商品説明</p>
        <p class="p2">pr文章</p>

        <div class="p3">
            <a href="">
                <p>一覧はこちらから</p>
            </a>
        </div>

        <img class="img1 slideshow-img" src="{{ asset('image/image1.jpg') }}" alt="">
        <img class="img2 slideshow-img" src="{{ asset('image/image4.jpg') }}" alt="">
    </section>



    <div class="empty_3">

    </div>

    <div class="front_content">CONTENT AREA</div>
    <div class="parallax_content img_bg_02">PARALLAX AREA</div>
    <div class="front_content">CONTENT AREA</div>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>



</body>

</html>
