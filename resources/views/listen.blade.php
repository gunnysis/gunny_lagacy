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
    @vite('resources/css/pagination.css')
</head>
<body>
    <header class="header flex" id="header"></header>
    <div class="container">
        <main class="listen flex">
            @if (count($videos) > 0)
                @foreach ($videos as $video)
                    <div class="media flex">
                        <span class="media__kind">{{ $video->kind }}</span>
                        {{ $video->id }}. {{ $video->title }}<br>
                        <iframe src={{ $video->url . "&output=embed" }} frameborder="0" allowfullscreen width="300" height="150"></iframe>
                    </div>
                @endforeach
            @endif
            <div class="pagination flex">
                {{ $videos->links() }}
            </div>
        </main>
        <footer class="footer" id="footer"></footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
