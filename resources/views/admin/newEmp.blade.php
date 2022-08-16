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
    <form class='form-newEmp' action="">
       <div>
        <label for="Etype">Employee type:</label>
        <input type="text" list="EmpCat" id="Etype">  
        <datalist id="EmpCat">
            <option value="Work From Home"></option>
            <option value="Part-time"></option>
            <option value="Full-time"></option>
        </datalist>
        <br>
        <label for="Ename">Employee Name:</label>
        <input type="text" name="" id="Ename">
        <br>
        <label for="Econtact">Employee Contact:</label>
        <input type="text" name="" id="Econtact">  
        <br>
        <label for="Econtact2">Employee Contact 2:</label>
        <input type="text" name="" id="Econtact2">  
        <br>
        <label for="Eemail">Employee E-mail:</label>
        <input type="text" name="" id="Eemail">  
        <br>
        <label for="E-DOB">Employee D.O.B:</label>
        <input type="text" name="" id="E-DOB">  
        <br>
        <label for="Eadrss">Employee Adress:</label>
        <input type="text" name="" id="Eadrss">  
        <br>
        <label for="E-city">Work City:</label>
        <input type="text" name="" id="E-city">  
        <br>
        <label for="target-cust">New customers target(Monthly):</label>
        <input type="text" name="" id="target-cust">  
        <br>
        <label for="target-sales">Monthly sales target:</label>
        <input placeholder="Booklets.."type="text" name="" id="target-sales-books">  
        <input placeholder="Amount in Rs.."type="text" name="" id="target-sales-amount">
        <br>
        <label for="password">Create New 4-digit pin:</label>
        <input type="password" maxlength="4"  name="Epassword" id="Epassword">
        <br>
        <button>Register</button>
        </div>
   
    </form>

</div>