
<head>
    <meta charset="UTF-8">
    <title> Client Search </title>
    <link rel="stylesheet" href="style.css">
    
</head>
<header>
       <h1> ClubJB Client Lookup </h1> 
       <div class= "auth">
       
       <button>
       <a href="">Admin Login</a>
       <a href="">|</a>
        <a href="{{ route('register') }}">Add Admin</a>
       </button>
       
       <button >
        <a href="../newEmp.blade.php">Register New Employee</a>
        <a href="">|</a>
        <a href="../empLogin.blade.php">Employee Login</a>
        </button>
       </div>
</header>

<script>
const title2 = document.querySelector('h1');
title2.addEventListener('click', ()=>{
    window.open("../","_self");
    console.log('click');
});
</script>