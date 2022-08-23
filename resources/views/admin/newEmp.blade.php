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
    <h1 style="text-align:center;">Register New Employee</h1>
    <form class='form-newEmp' action="{{ route('Ecreate') }}">
    
    @if(Session::get('Success'))
        <p style="background-color:lightgreen; padding:10px">{{Session::get('Success')}}</p>
    @endif

    @if(Session::get('Fail'))
        <p style="background-color:red; padding:10px">{{Session::get('Fail')}}</p>
    @endif
    @csrf

       <div>
        <label for="category">Employee type:</label>
        <input type="text" list="EmpCat" name="category" value=" {{old('category')}} "> 
        @error('Etype')**{{$message}}@enderror 
        <datalist id="EmpCat">
            <option value="Work From Home"></option>
            <option value="Part-time"></option>
            <option value="Full-time"></option>
        </datalist>
        <br>
        <label for="employee_name">Employee Name:</label>
        <input type="text" name="employee_name" id="" value=" {{old('employee_name')}} ">
        @error('employee_name')**{{$message}}@enderror
        <br>
        <label for="contact_1">Employee Contact:</label>
        <input type="number" name="contact_1" id="" value=" {{old('contact_1')}} ">  
        @error('contact_1')**{{$message}}@enderror
        <br>
        <label for="contact_2">Employee Contact 2:</label>
        <input type="number" name="contact_2" id="" value=" {{old('contact_2')}} ">  
        <br>
        <label for="emp_email">Employee E-mail:</label>
        <input type="email" name="emp_email" id="" value=" {{old('emp_email')}} ">  
        @error('emp_email')**{{$message}}@enderror
        <br>
        <label for="emp_DOB">Employee D.O.B:</label>
        <input type="date" name="emp_DOB" id="" value=" {{old('emp_DOB')}} ">  
        @error('emp_DOB')**{{$message}}@enderror
        <br>
        <label for="Emp_adress">Employee Adress:</label>
        <input type="text" name="Emp_adress" id="" value=" {{old('Emp_adress')}} ">  
        @error('Emp_adress')**{{$message}}@enderror
        <br>
        <label for="active_City">Work City:</label>
        <input type="text" name="active_City" id="" value=" {{old('active_City')}} ">  
        @error('active_City')**{{$message}}@enderror
        <br>
        <label for="monthly_customer_target">New customers target(Monthly):</label>
        <input type="text" name="monthly_customer_target" id="" value=" {{old('monthly_customer_target')}} ">  
        @error('monthly_customer_target')**{{$message}}@enderror
        <br>
        <label for="monthly_books_sale_target">Monthly sales target:</label>
        <input placeholder="Booklets.."type="text" name="monthly_books_sale_target" id="" value=" {{old('monthly_books_sale_target')}} ">  
        @error('monthly_books_sale_target')**{{$message}}@enderror
        <input placeholder="Amount in Rs.."type="text" name="monthly_sale_target" id="" value=" {{old('monthly_sale_target')}} ">
        @error('monthly_sale_target')**{{$message}}@enderror
        <br>
        <label for="emp_password">Create New 4-digit pin:</label>
        <input type="password" maxlength="4"  name="emp_password" id="">
        @error('emp_password')**{{$message}}@enderror
        <br>
        <button>Register</button>
        </div>
   
    </form>

</div>