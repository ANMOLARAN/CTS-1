<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add student</title>
</head>
<style>
.center{
    width:100%;
    height:100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}
    .form{
        display:flex;
     width:500px;
    }
    
    .inside-form{
        display:flex;
        flex-direction:column;
        gap:7px;
        
    }
    .inside-form div{
        display:flex;
        flex-direction: column;
        justify-content: space-between;
    }

    input{
        width:300px;
        padding:10px;
    }
    button{
        width:60px;
    }
</style>
<body>
    <div class="center">

<h2>Enter the details here for update</h2>
<div class='form'>
<form action="{{route('updateData')}}" method="POST">
    @csrf
    <div class='inside-form'>
        <div>
    <label>id</label>
    <input type='text' name='id' value="{{$item['id']}}"/>
</div>
<div>
   <label>Name</label>
   <input type='text' name='name' value="{{$item['name']}}"/>
</div>
   <div>
   <label>Email</label>
   <input type='email' name='email' value="{{$item['email']}}"/>
</div>
   <div>
    <button type='submit'>Submit</button>
</div>
</div>
</form>
</div>
</div>
</body>
</html>