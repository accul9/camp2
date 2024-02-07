<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>個別商品一覧</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="w-full h-20 p-5 text-2xl text-teal-500 bg-slate-700">ここは暫定のナビゲーター</nav>
    <main class="">
        <h1 class="">個別商品一覧</h1>
        <div>
            @foreach ($items as $item)
                <p>{{ $item->item_name }}</p>
                <div><a href="{{ route('items.show', $item) }}"><img src="{{ asset($item->item_image) }}"
                            alt="Item Image"></a>
                </div>
            @endforeach
        </div>
    </main>
</body>

</html>
