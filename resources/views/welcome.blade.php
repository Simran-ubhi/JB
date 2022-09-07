<!DOCTYPE html>
<html lang="en">

<body>
    
@include('partials/header')
   
    

@if((Session::has('LoggedUser')) || (Session::has('LoggedEmp')))
<div class="search-form">
        <form class="form-contact" method="GET" action="{{ route('numsearch') }}">
            <h1 style='text-align:center;'> Enter Mobile Number <h1>
        <input name="pnumber" maxlength="12" class="search-field" type="text" placeholder="Enter contact number" value="{{old('pnumber')}}">
        <button class="search-button"> Submit </button>
        </form>
    </div>
@else
<div class="log-wrapper">
    <div class="log-container">
        <Button class="log-buttonA"> <a href="{{ route('login') }}">Admin login</a> </Button>
        <br>
        <button class="log-buttonE">  <a href="{{ route('Elogin') }}"> Employee login</a></button>
    </div>
</div>
@endif
</body>
</html>
