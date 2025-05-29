<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Live Wallpaper</title>

    <!-- فونت فارسی -->
    <link href="https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css" rel="stylesheet">

    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: 'Vazir', sans-serif;
            direction: rtl;
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
            color: #ffffff;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            flex-direction: row-reverse;
        }

.btn {
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 4px;
    border: 1px solid #ffffff50;
    background-color: rgba(0, 0, 0, 0.4);
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
    min-width: 120px;
    display: flex;
    justify-content: center;  /* وسط افقی */
    align-items: center;      /* وسط عمودی */
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
            width: 45px;
            height: 45px;
            border-radius: 50%;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .google-icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 12px rgba(255,0,0,0.5);
        }

        /* متن تایپی سمت راست وسط صفحه */
        #side-text {
            position: absolute;
            right: 40px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1em;
            color: #ffffff;
            z-index: 2;
            text-align: right;
            max-width: 300px;
        }

        #side-text::after {
            content: '|';
            animation: blink 0.7s infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        @media screen and (max-width: 600px) {
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            #side-text {
                font-size: 0.9em;
                right: 20px;
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
        <a href="{{ route('google.login') }}" class="icon-btn">
            <img src="{{ asset('images/google.png') }}" alt="Login with Google" class="google-icon">
        </a>

        <a href="{{ route('login') }}" class="btn">Login</a>
    </div>
</div>

<!-- متن تایپی وسط راست -->
<div id="side-text"></div>

<script>
    const epicText = @json($epicText);
    const target = document.getElementById("side-text");
    let index = 0;

    function typeWriter() {
        if (index < epicText.length) {
            target.innerHTML += epicText.charAt(index);
            index++;
            setTimeout(typeWriter, 100);
        }
    }

    window.onload = typeWriter;
</script>

</body>
</html>
