
<head>
    <meta charset="UTF-8">
    <title> Client Search </title>
    <link rel="stylesheet" href="style.css">

</head>
<header>


       <h1> ClubJB Client Lookup </h1>
       <div class= "auth">
       @if(Session::has('LoggedUser'))
       <button>
        <a href="{{ route('logout') }}">| logout |</a>
        </button>
        @elseif(Session::has('LoggedEmp'))
        <button>
        <a href="{{ route('elogout') }}">| logout |</a>
        </button>
        </div>
       @endif


       @if(Session::has('LoggedUser'))
       <button>
        <a href="{{ route('register') }}">Add Admin</a>
       </button>

       <button >
        <a href="{{ route('Eregister') }}">Register New Employee</a>
      </button>
       @elseif(!Session::has('LoggedEmp'))
       <button>
       <a href="{{ route('login') }}">Admin Login</a>
        </button>
     
        <button>
        <a href="{{ route('Elogin') }}">Employee Login</a>
        </button>
       
       @endif

       
</header>

<script>
const title2 = document.querySelector('h1');
title2.addEventListener('click', ()=>{
    window.open("../","_self");
    console.log('click');
});
</script>