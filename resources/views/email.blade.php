<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    @foreach($datas as $data)
    <table style="border-bottom: 1px solid #333;">
        <tr>
            <td>Key</td>
            <td>Value</td>
        </tr>
        <tr>
            <td>Created_at</td>
            <td>{{$data->created_at}}</td>
        </tr>
        @foreach($data->data as $k => $v)
        <tr>
            <td>{{$k}}</td>
            <td>{{$v}}</td>
        </tr>
        @endforeach
    </table>
    @endforeach
</body>

</html>