<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <h1>Edit</h1>
    <form method='POST' action="{{ route('homework.update', ['homework'=>$homework->id] ) }}">
        @csrf
        @method('PATCH')

        <div>
            Points:<br>
            <input type="number" name="points" value="{{ $homework->points }}">
        </div>
        <div>
        Evaluation:<br>
            <input type="string" name="evaluation" value="{{ $homework->evaluation }}">
        </div>
        <div>
        <td><a href="{{ route('homework.index') }}" >
                <button type="button">Vissza</button></a>

                <button type="submit">Értékelem</button></td>
        </div>
    </form>
</body>
</html>
