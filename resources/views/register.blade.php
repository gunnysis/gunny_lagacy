<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ًApplication</title>
    @vite('resources/css/default.css')
    @vite('resources/css/header.css')
    @vite('resources/css/footer.css')
    @vite('resources/css/memo.css')
    @vite('resources/css/register.css')
</head>
<body>
<div class="container">
    <header class="flex" id="header"></header>
    <main class="flex main register">
        <form method="POST" action="/storeData">
            @csrf
            <!-- "종류" 필드 -->
            <label for="type">종류:</label>
            <input type="text" name="kind" id="type">
            <br>

            <!-- "발음" 필드 -->
            <label for="pronunciation">발음:</label>
            <input type="text" name="jap_pron" id="pronunciation">
            <br>

            <!-- "일본어" 필드 -->
            <label for="japanese">일본어:</label>
            <input type="text" name="jap_lang" id="japanese">
            <br>

            <!-- "의미" 필드 -->
            <label for="meaning">의미:</label>
            <input type="text" name="jap_mean" id="meaning">
            <br>

            <div class="div__btn">
                <button type="submit">제출</button>
            </div>
        </form>
    </main>
    <footer id="footer"></footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
