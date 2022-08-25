<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Client Search</title>
    <link rel="stylesheet" href="style.css">
    <link href ="script.js">

    <style>
      
    #log-form{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #logbtn{
            background-color: blue;

            color: white;
            width: 6rem;
            height: 2rem;
            border: 0.1px green;
            margin-left: 30%;
        }
</style>
    
</head>
<body>
    
@include('partials/header')
<div id="log-form">
    <form action="{{ route('logging') }}" method="post">
        <!-- @if(Session::get('Success'))
        @endif -->
        @csrf
    <h1>Admin Login</h1>
        <label for="Name">Username</label>
        <input type="text" name="Name" id="uname" value="{{ old('Name') }}">
        @error('username')**{{$message}}@enderror
        <br>
        <br>
        <label for="Password"> Password:</label>
        <input type="password" name="Password" id="upass"> 
        @error('password')**{{$message}}@enderror
        <br>
        <br>
        <Button id="logbtn">Login</Button>
    </form>
</div>
</body>
</html>
