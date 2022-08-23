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
        <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('Fail'))
        <p style="background-color:red; padding:10px">{{Session::get('Fail')}}</p>
    @endif
    @csrf
    <br>
       <div>

        <label for="Name">Admin Name:</label>
        <input type="text" name="Name" id="" value="{{old('Name')}}" >
        
    
        @error('Name')**{{$message}}@enderror
        <br>
        <label for="Category">Work type:</label>
        <input type="text" name="Category" value="{{old('Category')}}" list="Cats">
        <datalist id="Cats">
            <option>Work from home</option>
            <option>Work from office</option>
            <option>Part-time</option>
        </datalist>
        <br>
        <label for="Phone_Number">Admin Contact:</label>
        <input type="number" name="Phone_Number" id="" value="{{old('Phone_Number')}}">
        @error('Phone_Number')**{{$message}}@enderror
        <br>
        <label for="Email">Admin E-mail:</label>
        <input type="email" name="Email" id="" value="{{old('Category')}}">
        @error('Email')**{{$message}}@enderror
        <br>
        <label for="Password">Password:</label>
        <input type="password" name="Password" >
        @error('Password')**{{$message}}@enderror
        <br>
        <label for="D_O_B">Admin D.O.B:</label>
        <input type="date" name="D_O_B" id="" value="{{old('Category')}}">
        @error('D_O_B')**{{$message}}@enderror
        <br>
        <label for="Address">Admin Adress:</label>
        <input type="text" name="Address" id="" value="{{old('Category')}}">
        @error('Address')**{{$message}}@enderror
        <br>
        <br>
        <button>Register</button>
        </div>

    </form>

</div>