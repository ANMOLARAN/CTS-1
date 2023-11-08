<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Add Image here
    <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data">
        @csrf
     <label>Choose Image</label>
     <input type='file' name='image'/>
     <button type='submit'>Submit </button>
    </form>
</body>
</html>