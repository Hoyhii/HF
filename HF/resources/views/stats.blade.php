<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>
<body>
    <h1>Homework details</h1>
    <p>Total number of homeworks: {{ $homeworkCount }}</p>
    <p>avaragepoints: {{ $homeworkAvg }}</p>
    <p>
        <a href="{{ route('homework.index') }}">Go to homework listing</a>
    </p>
</body>
</html>
