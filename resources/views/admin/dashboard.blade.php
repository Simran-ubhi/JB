@include('partials/header')


<div>
<h2 style="text-align:center">Admin Dashboard - {{ $info['Name'] }}</h2>
</div>
<hr>

<h2 style="text-align:center">Weclome!</h2>

    <div class="admin-dashboard">
    
        <button class="one" > <a style="text-decoration:none; color:black; "href="{{ route('clientsindex') }}">Clients</a> </button>
        <button class="2"><a style="text-decoration:none; color:black; " href="{{ route('employeeslist') }}">Employees</a> </button>
        <button class="4">Sales</button>
 
    </div>
</section>


