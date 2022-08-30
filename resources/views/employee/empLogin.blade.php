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
    <form action=" {{ route('emplogin') }} ">

    @if(Session::get('Success'))
        <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('fail'))
        <p style="background-color:red; padding:10px">{{Session::get('fail')}}</p>
    @endif
    @csrf
       
    <h1>Employee Login</h1>
        <label for="number">Phone number: </label>
        <input name="number" type="text" name="number" id="unumber" value="{{ old('number') }}">
        @error('number')**{{$message}}@enderror
        <br>
        <label for="logpin">Pin:</label>
        <input name="logpin" type="password" id="upass"> 
        @error('Nalogpinme')**{{$message}}@enderror
        <br>
        <br>
        <input type="submit" value="Login"id="logbtn">
    </form>
</div>