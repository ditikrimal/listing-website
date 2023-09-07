<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Project - Listing</title>


    <script src="https://kit.fontawesome.com/eac1eb5eeb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>



<header>
    <div class="logoContainer">
        <a href="/">
            <h1>Logo<span>Name</span></h1>
        </a>

    </div>
    <nav>
        <ul class="navBar">
            <a href="/">
                <li><i class="fa-solid fa-home"></i>
                    Home
            </a>
            </li>
            @auth
                <li>
                    <a href="/listings/manage">
                        <i class="fa-solid fa-gear"></i>
                        Manage Listings
                    </a>
                </li>
                <li>
                    <a href="/listings">

                        <i class="fa-solid fa-list"></i>
                        Listings
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        My Profile
                    </a>
                </li>
                <li>
                    <form method="POST" action="/logout">
                        @csrf
                        <a><button type="submit"><i class="fa-solid fa-right-to-bracket"></i>
                                Logout
                            </button>
                        </a>
                    </form>
                </li>
            @else
                <li>
                    <a href="/listings">

                        <i class="fa-solid fa-list"></i>
                        Listings
                    </a>
                </li>

                <li>
                    <a href="/login">
                        <i class="fa-solid fa-user"></i>

                        Login
                    </a>
                </li>
                <li>
                    <a href="/signup">
                        <i class="fa-solid fa-user-plus"></i>

                        Signup
                    </a>
                </li>
            @endauth
        </ul>
    </nav>
    <div class="navBtn" id="navBtn">
        <span id="btn1"></span>
        <span id="btn3"></span>
        <span id="btn2"></span>
    </div>
</header>

<body>
    <div class="addRow">
        <div class="addContent">
            <h1>Add your listing</h1>
            <a href="/listings/create"> <button>Add</button></a>
        </div>
    </div>
    <section class="yieldSection">

        {{ $slot }}
    </section>

</body>
<footer>
    <div class="row">

        <div class="foot-1">
            <h1>LogoName</h1>
            <div class="footDescription">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus dolorum non ipsa dolorem molestias,
                nemo qui ipsum ad recusandae ipsam eligendi architecto maxime delectus. Non cupiditate quia sed adipisci
                quod.
            </div>
            <div class="socials">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-google"></i>
                <i class="fa-brands fa-tiktok"></i>
            </div>
        </div>
        <hr>
        <div class="foot-2">
            <span><i class="fa-solid fa-phone"></i> +977 9845678109</span>
            <span><i class="fa-solid fa-location-dot"></i> Bharatpur, Chitwan</span>
            <span><i class="fa-solid fa-at"></i> example@feedback.com</span>
        </div>
        <hr>
        <div class="foot-3">

            <span>Our Team</span>
            <div class="member">
                <ul>
                    <li>
                        Elon Musk
                    </li>
                    <li> Larry Paige</li>
                    <li>Mark Zuckerburg</li>
                    <li>Bill Gates</li>

                </ul>
            </div>
        </div>
    </div>
    <hr>
    <h1 style="font-size: 15px; font-weight:500;text-align:center;margin-top:17px;">Copyright © LogoName 2023. All
        rights reserved.</h1>
</footer>
<x-flashMessage />
<script src="{{ asset('script/app.js') }}"></script>

</html>
