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

@include('../partials/header')
<div id="log-form">
    <form action="">
    <h1>Employee Login</h1>
        <label for="number">Phone number: </label>
        <input type="text" name="number" id="unumber">
        <br>
        <label for="logpin">Pin:</label>
        <input type="password" id="upass"> 
        <br>
        <br>
        <input type="submit" value="Login"id="logbtn">
    </form>
</div>