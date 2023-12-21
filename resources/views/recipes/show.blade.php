<!DOCTYPE html>
<html>

<head>
    <title>{{ $recipe->recipe_name }}</title>

</head>

<body>
    <h1>{{ $recipe->recipe_name }}</h1>
    <div>{!! $recipe->recipe_description !!}</div>
</body>

</html>
