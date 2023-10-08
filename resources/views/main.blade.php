<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ًApplication</title>
    @vite('resources/css/default.css')
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/main.css')
</head>
<body>
<div class="container">
    <header class="header flex" id="header"></header>
    <main class="main flex">
        메인페이지
    </main>
    <footer class="footer" id="footer"></footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
