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
    <header class="flex" id="header"></header>
    <main class="flex main">
        <div class="search" style="margin: 0 auto;">
            <form action="/sendSearch" method="get">
                <select onchange="this.form.submit();" id="select__kind" name="selectedOption">
                    <option value="">선택</option>
                    <option value="인사말">인사말</option>
                    <option value="식사">식사</option>
                </select>
            </form>
        </div>

        @if (count($memo1) > 0)
            <ul class="flex main__ul">
                @foreach ($memo1 as $item)
                    <li class="main__li">
                        <strong>No:</strong> {{ $item->id }}<br>
                        <strong>종류:</strong> {{ $item->kind }}<br>
                        <strong>발음:</strong> {{ $item->jap_pron }}<br>
                        <strong>일본어:</strong> {{ $item->jap_lang }}<br>
                        <strong>의미:</strong> {{ $item->jap_mean }}<br>
                    </li>
                @endforeach
            </ul>
        @endif
        {{ $memo1->links() }}

    </main>
    <footer id="footer"></footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
