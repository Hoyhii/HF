<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $homework->name }}</title>
</head>
<body>
    <h1>The homework of {{ $homework->name }}</h1>
    Class:<p>{{ $homework->class }}</p>
    URL:<p>{{ $homework->url }}</p>
    Evaluation:<p>{{ $homework->evaluation }}</p>
    Points<p>{{ $homework->points }}</p>
    <a href="{{ route('homework.index') }}" >
                <button type="button">Vissza</button></a>
</body>
</html>
