<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>

<style>
   
   .form{
    width:100%;
    height:100vh;
    display:flex;
    flex-direction: column;
    align-items: center;
    background-color: orange;
   }

    form{
        width:400px;
        display:flex;
        flex-direction: column;
        gap:10px;
        background-color:pink;
        border-radius: 6px;
        padding:40px;
    }

    input{
        padding:6px;
        width:300px;
    }

    button{
        padding:10px 20px; 
        margin-left:40%;
        background-color: gray;
        border-radius: 4px;
        font-size: larger;
    }

    a{
        text-decoration: none;
    }

</style>
<body>
    <div class='form'>
    <h1>Alredy have an account</h1>
    <h2>Log In</h2>
    @if(session('data'))
    <h2>{{session('data')}}</h2>
    @endif
        <form method='post'action='/auth/save' >
            @csrf
<div>
           <label>Name</label>
           <input type='text' name='name'/>
</div>
<div>
           <label>Email</label>
           <input type='email' name='email'/>
</div>
<div>
           <button type='submit'>Submit</button>
</div>
        </form>
    </div>
</body>
</html>