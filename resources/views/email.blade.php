<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <table>
        <tr>
            <td>Key</td>
            <td>Value</td>
        </tr>
        @foreach($data as $k => $v)
        <tr>
            <td>{{$k}}</td>
            <td>{{$v}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>