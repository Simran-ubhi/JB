

@include('partials/header')

<h1 id="hh" style="text-align:center;">Hello, {{ $empinfo['employee_name'] }}</h1>

<section>
    <div class="emp-dashboard">
        <h3>Your Dashboard</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Entries</th>
            </tr>   
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>12/2/2012</td>
                <td>12</td>
            </tr>

        </table>    
    </div>

    <div class = "emp-actions">
        <button class="one" > <a style="text-decoration:none; color:black; "href="{{ route('addclient') }}">Add New Customer</a> </button>
        <button class="2"><a style="text-decoration:none; color:black; " href="{{route('newSale')}}">Add New Sale</a> </button>
        <button class="3">Customer Report</button>
        <button class="4">Sales Report</button>
        
        <div class="action-window">


        </div>
    </div>
</section>

<script src="script.js"> </script>
