<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
div{
    display:flex;
    justify-content: space-between;
}

a {
  text-decoration: none;
  color: pink;
}
    </style>
<body>
    
<div>
    <h2><a href='/auth'>LOGO</a></h2>
    <h2><a href='/auth/contact'>Contact Us</a></h2>
    <h2><a href='/auth/aboutus'>About Us</a></h2>
    @if(session()->has('email'))
    <h2><a href='/auth/logout'>Log Out</a></h2>
    @else
    <h2><a href='/auth/signup'>SignUp</a></h2>
    @endif
</div>

</body>
</html>