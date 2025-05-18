<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ثبت‌نام</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen">

    <!-- ویدیو پس‌زمینه -->
    <video autoplay muted loop class="fixed top-0 left-0 w-full h-full object-cover z-0">
        <source src="{{ asset('storage/bg.mp4') }}" type="video/mp4">
        مرورگر شما از ویدیو پشتیبانی نمی‌کند.
    </video>

    <!-- محتوای فرم لاگین یا ثبت‌نام -->
    <div class="relative z-10 flex items-center justify-center min-h-screen">
        {{ $slot }}
    </div>

</body>
</html>
