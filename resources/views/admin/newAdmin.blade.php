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

        <label for="Name">Admin Name:</label>
        <input type="text" name="Name" id="">
        <p>@error('Name')**{{$message}}@enderror</p>
        <br>
        <label for="Phone_Number">Admin Contact:</label>
        <input type="text" name="Phone_Number" id="">
        <p>@error('Phone_Number')**{{$message}}@enderror</p>
        <br>
        <label for="Email">Admin E-mail:</label>
        <input type="text" name="Email" id="">
        <p>@error('Email')**{{$message}}@enderror</p>
        <br>
        <label for="Password">Password:</label>
        <input type="password" name="Password">
        <p>@error('Password')**{{$message}}@enderror</p>
        <br>
        <label for="D_O_B">Admin D.O.B:</label>
        <input type="text" name="D_O_B" id="">
        <p>@error('D_O_B')**{{$message}}@enderror</p>
        <br>
        <label for="Address">Admin Adress:</label>
        <input type="text" name="Address" id="">
        <p>@error('Address')**{{$message}}@enderror</p>
        <br>
        <br>
        <button>Register</button>
        </div>

    </form>

</div>