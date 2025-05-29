<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Live Wallpaper</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #bg-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            object-position: center center;
            z-index: -1;
        }

        .hero {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 1;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .btn {
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 4px;
            border: 1px solid #ffffff50;
            background-color: rgba(0, 0, 0, 0.4);
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            min-width: 150px;
            text-align: center;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-color: #ffffff80;
        }

        .icon-btn {
            background-color: transparent;
            border: none;
            padding: 0;
        }

        .google-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .google-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(255,0,0,0.5);
        }

        @media screen and (max-width: 600px) {
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>

<video autoplay muted loop id="bg-video">
    <source src="{{ asset('video/sw.mp4') }}" type="video/mp4">
    مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
</video>

<div class="hero">
    <div class="hero-buttons">
        <!-- دکمه آیکون گوگل -->
        <a href="{{ route('google.login') }}" class="icon-btn">
            <img src="{{ asset('images/google.png') }}" alt="Login with Google" class="google-icon">
        </a>

        <!-- دکمه متن‌دار عادی برای لاگین -->
        <a href="{{ route('login') }}" class="btn">Login</a>
    </div>
</div>

</body>
</html>
