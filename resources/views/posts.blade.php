<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    @foreach($posts as $post) 
    <p>
        {{
            $post
        }}
    </p>
    @endforeach
</div>

</body>
</html>
