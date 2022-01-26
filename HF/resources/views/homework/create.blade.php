<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <h1>New</h1>
    <form method='POST' action="{{ route('homework.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Name:<br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            Class:<br>
            <input type="number" name="class" value="{{ old('class') }}">
            @error('class')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            Url:<br>
            <input type="number" name="url" value="{{ old('url') }}">
            @error('url')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
        <a href="{{ route('homework.index') }}" >
                <button type="button">Vissza</button></a>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
