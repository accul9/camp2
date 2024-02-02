<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>セット選択</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="w-full h-20 p-5 text-2xl text-teal-500 bg-slate-700">ここは暫定のナビゲーター</nav>
    <main class="">
        <h1 class="">今日はどんなセットの気分？</h1>
        <div>
            @foreach ($sets as $set)
                <p>{{ $set->set_name }}</p>
                <div><a href="{{ route('sets.show', $set) }}"><img src="{{ asset($set->set_image) }}"
                            alt="Set Image"></a>
                </div>
            @endforeach
        </div>
    </main>
</body>

</html>
