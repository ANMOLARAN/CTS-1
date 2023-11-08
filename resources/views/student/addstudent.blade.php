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

    span{
        color:red;
    }
</style>
<body>

<div class="center">

<h2>Enter the details of New Students here</h2>
<!-- <pre>
@if($errors->any())
@php
print_r($errors->all())
@endphp
@endif
</pre> -->
<div class='form'>
<form action="{{route('saveStudent')}}" method="POST">
    @csrf
<div class='inside-form'>
    <div>
   <label>Name</label>
   <input value="{{old('name')}}" type='text' name='name'/>
   <span>
    @error('name')
     {{$message}}
    @enderror
   </span>
   </div>
   <div>
   <label>Email</label>
   <input value="{{old('email')}}" type='text' name='email'/>
   <span>
   @if(session('error'))
        {{ session('error') }}
@endif
   </span>
   <span>
    @error('email')
    {{$message}}
    @enderror
   </span>
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