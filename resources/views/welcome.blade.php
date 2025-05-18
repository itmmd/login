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
            justify-content: flex-start;
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
        <a href="{{ route('register') }}" class="btn">Register</a>
        <a href="{{ route('login') }}" class="btn">Login</a>
    </div>
</div>

</body>
</html>
