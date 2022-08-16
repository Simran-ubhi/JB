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
            background-color: green;
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
    <form action="">
    <h1>Admin Login</h1>
      <label for="username">Username</label>
        <input type="text" name="username" id="uname">
        <br>
        <br>
        <label for="logpin">Login Pin:</label>
        <input type="password" id="upass"> 
        <br>
        <br>
        <input type="submit" value="Login"id="logbtn">
    </form>
</div>
</body>
</html>
