<!DOCTYPE html>
<html>

<head>
    <title>Email từ Laravel</title>
</head>

<body>
    <h1>Mail from Laravel</h1>
    @foreach ($details as $detail)
        <p>{{$detail->name}}</p>
    @endforeach
</body>

</html>