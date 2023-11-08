<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    The images are:


    @foreach($data as $item)
    <img src="{{ url('public/Image/'.$item->image) }}"/>
    <img src="url('public/Image/'.$item->image) }}"/>
    @endforeach

</body>
</html>