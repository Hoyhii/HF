<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
<p><a href="{{ route('home') }}">Vissza a főoldalra</a></p>
    <table>
        <tr>
            <th>Name</th>
            <th>Class</th>
            <th>Url</th>
            <th>Evaluation</th>
            <th>Points</th>
            <th>Operations</th>
        </tr>
    @foreach ($homework as $hwork)
        <tr>
            <td>
                <a href="{{ route('homework.show', $hwork->id) }}">{{ $hwork->name }}</a>
            </td>
            <td>{{ $hwork->class }}</td>
            <td>{{ $hwork->url }}</td>
            <td>{{ $hwork->evaluation }}</td>
            <td>{{ $hwork->points }}</td>
            <td><form action="{{ route('homework.destroy', $hwork->id) }}" method="POST">
                @csrf @method('DELETE')<button type="submit">Delete</button></form>
            <form action="{{ route('homework.edit',$hwork->id)}}"><button type="submit" method="POST">Értékelés</button></form></td>
        </tr>
    @endforeach

    </table>
    <a href="{{ route('homework.create') }}" >
                <button type="submit">Create new Homework</button></a>
</body>
</html>
