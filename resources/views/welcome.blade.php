<!DOCTYPE html>
<html lang="en">

<body>
    
@include('partials/header')
   
    <div class="search-form">
        <form class="form-contact" method="GET" action="{{ route('numsearch') }}">
            <h1 style='text-align:center;'> Enter Mobile Number <h1>
        <input name="pnumber" maxlength="12" class="search-field" type="text" placeholder="Enter contact number" value="{{old('pnumber')}}">
        <button class="search-button"> Submit </button>
        </form>
    </div>
</body>
</html>
