<style>
    .emp-dashboard{
        padding: 10px;
        background-color: rgba(168, 145, 68, 0.377);
        align-items: center;
        justify-content: center;
    }
    table{
        margin: auto;
        border: 2px solid;
        padding:3%;
        width: 80%;
        display: grid;
        justify-content: center;
        text-align: center;
    }
    table tr{
        text-align: center;
        margin: 3%;
    }
    .emp-actions{
        display: flex;
        padding:0px;
        margin: 10px;
    }
    .emp-actions button{
        border-radius: 30px;
        width: 22%;
        margin: 10px 2%;
        height: 3rem;
        background-color: lightblue;
        
        font-size: 1.2rem ;
    }
</style>

@include('partials/header')

<h1 id="hh" style="text-align:center;">Hello, Employee!</h1>
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
        <button class="one">Add New Customer</button>
        <button class="2">Add New Sale</button>
        <button class="3">Customer Report</button>
        <button class="4">Sales Report</button>
        
        <div class="action-window">


        </div>
    </div>
</section>

<script src="script.js"> </script>
