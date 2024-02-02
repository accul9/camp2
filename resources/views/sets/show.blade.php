<!DOCTYPE html>
<html>

<head>
    <title>{{ $set->set_name }}</title>
</head>

<body>
    <h1>{{ $set->set_name }}</h1>
    <h2>セットレシピ：</h2>
    <ul>
        @foreach ($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.show', $recipe->recipe_id) }}">{{ $recipe->recipe_name }}</a>
            </li>
        @endforeach
    </ul>

    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="set_id" value="{{ $set->id }}">
        <button type="submit">購入</button>

    </form>

    <a href="{{ route('sets.index') }}"><button>セット一覧に戻る</button></a>
</body>

</html>
