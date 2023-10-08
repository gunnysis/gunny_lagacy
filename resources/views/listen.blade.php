<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ًApplication</title>
    @vite('resources/css/default.css')
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/listen.css')
</head>
<body>
<div class="container">
    <header class="header flex" id="header"></header>
    <main class="listen flex">
        <div class="div__listen flex">
            @foreach ($videos as $video)
                <div class="media flex">
                    <h4>{{ $video->title }}</h4>
                    <iframe src={{ $video->url . "&output=embed" }} frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            @endforeach
            {{ $videos->links() }}
        </div>

    </main>
    <footer class="footer" id="footer"></footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
