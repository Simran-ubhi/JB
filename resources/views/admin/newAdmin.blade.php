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
    <form action="" method="post" class='form-newEmp'>
        @csrf
       <div>
        <label for="Etype">Admin type:</label>
        <input type="text" list="admCat" id="admtype">  
        <datalist id="admCat">
            <option value="Work From Home"></option>
            <option value="Part-time"></option>
            <option value="Full-time"></option>
        </datalist>
        <br>
        <label for="admname">Admin Name:</label>
        <input type="text" name="" id="admname">
        <br>
        <label for="admcontact">Admin Contact:</label>
        <input type="text" name="" id="admcontact">  
        <br>
        <label for="admemail">Admin E-mail:</label>
        <input type="text" name="" id="admemail">  
        <br>
        <label for="adminPassowrd">Password:</label>
        <input type="password" name="adminPassword">
        <br>
        <label for="adm-DOB">Admin D.O.B:</label>
        <input type="text" name="" id="adm-DOB">  
        <br>
        <label for="admadrss">Admin Adress:</label>
        <input type="text" name="" id="admadrss">  
        <br>
        
        <br>
        <button>Register</button>
        </div>
   
    </form>

</div>