<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is the entry file used</h2>
    <table>
        <tr>
            <th>title</th>
            <th>Position</th>
</tr>
@foreach($data as $item)
<tr>
    <td>{{$item['name']}}</td>
    <td>{{$item['position']}}</td>
    
</tr>
@endforeach
</table>
</body>
</html>