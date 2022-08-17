@include('partials/header')

<style>
    label{
        margin: 0.5rem;
    }
    input{
        margin: 0.5rem;
    }
    form{
      display: flex;
      align-items: center;
      justify-content: center;
    }
    form button{
        margin-left: 25%;
        width: 12rem;
        height: 3rem;
        color:white;
        background-color: rgb(54, 151, 9);
        border-radius: 10px;
        border-color:rgb(54, 151, 9);
    }
</style>    
<div>
    <h1 style="text-align:center;">Register New Admin</h1>
    <form action="{{ route('create') }}" method="post" class='form-newAdm'>
    
    @if(Session::get('Success'))
        <p>{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('Fail'))
        <p>{{Session::get('Fail')}}</p>
    @endif
    @csrf
       <div>
        <label for="admtype">Admin type:</label>
        <input type="text" list="admCat" name="admtype"> 
        <p>@error('admtype')**{{$message}}@enderror</p>
        <datalist name="admCat">
            <option value="Work From Home"></option>
            <option value="Part-time"></option>
            <option value="Full-time"></option>
        </datalist>
        
        <br>
        <label for="admname">Admin Name:</label>
        <input type="text" name="admname" id="">
        <p>@error('admname')**{{$message}}@enderror</p>
        <br>
        <label for="admcontact">Admin Contact:</label>
        <input type="text" name="admcontact" id="">  
        <p>@error('admcontact')**{{$message}}@enderror</p>
        <br>
        <label for="admemail">Admin E-mail:</label>
        <input type="text" name="admemail" id="">  
        <p>@error('admemail')**{{$message}}@enderror</p>
        <br>
        <label for="adminPassowrd">Password:</label>
        <input type="password" name="adminPassword">
        <p>@error('adminPassowrd')**{{$message}}@enderror</p>
        <br>
        <label for="adm-DOB">Admin D.O.B:</label>
        <input type="text" name="adm-DOB" id="">  
        <p>@error('adm-DOB')**{{$message}}@enderror</p>
        <br>
        <label for="admadrss">Admin Adress:</label>
        <input type="text" name="admadrss" id=""> 
        <p>@error('admadrss')**{{$message}}@enderror</p>
        <br>
        <br>
        <button>Register</button>
        </div>
   
    </form>

</div>