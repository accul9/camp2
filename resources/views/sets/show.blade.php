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
            <li>{{ $recipe->recipe_name }}</li>
        @endforeach
    </ul>
</body>

</html>
