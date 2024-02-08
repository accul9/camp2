<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta charset="UTF-8">
        <title>メインページ</title>
        <link rel="stylesheet" href="{{ asset('storage/css/style.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">
            <!-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
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
                <img class="header-logo-img" src="{{ asset('images/logo.png') }} "alt="A descriptive alternative text" title="Additional information about the image">
            </a>
            <ul class="mainnav">
                <li><a href=""><p class="nava">Recipe</p> </a></li>
                <li><a href=""><p class="nava">Making</p></a></li>
                <li><a href=""><p class="nava">Shop</p> </a></li>
            </ul>

            <ul class="mainnav mainnav1">
                <li><a href=""><p class="nava">login</p> </a></li>
                <li><a href=""><p class="nava">signup</p> </a></li>
            </ul>
        </nav>
    </header>

    <div class="slideshow">
        <div class="slideshow-image" style="background-image: url('./image/camp-2650359_1920.jpg')"></div>
        <div class="slideshow-image" style="background-image: url('./image/abstract-1868624_1920.jpg')"></div>
        <div class="slideshow-image" style="background-image: url('./image/fireplace-1598243_1920.jpg')"></div>
        <div class="slideshow-image" style="background-image: url('./image/oil-lamp-6771785_1920.jpg')"></div>
    </div>

    <nav class="screen">
        <ul class="screen__menu">
            <li><a href="./index.html">Home</a></li>
            <li><a href="">Items</a></li>
            <li><a href="">News</a></li>
            <li><a href="">Login</a></li>
        </ul>
    </nav>


    <!--　 -->
<div class="empty_1" >
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
        <a href=""><p>一覧はこちらから</p></a>
    </div>

    <img class="img1 slideshow-img" src="./image/image1.jpg" alt="">
    <img class="img2 slideshow-img" src="./image/image4.jpg" alt="">
</section>



<div class="empty_3">

</div>

<div class="front_content">CONTENT AREA</div>
    <div class="parallax_content img_bg_02">PARALLAX AREA</div>
<div class="front_content">CONTENT AREA</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="./js/script.js"></script>

    </body>
</html>
