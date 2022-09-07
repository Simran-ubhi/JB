@include('/partials/header')


<h1 style="text-align:center">Employees</h1>
<section class="clients-table-box">
    <table>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>Active City</th>
            <th>Actions</th>
        </tr>
        @foreach($employees as $emp )
        <tr>
            <td>{{ $emp['empID'] }}</td>
            <td>{{ $emp['employee_name'] }}</td>
            <td>{{ $emp['contact_1'] }}</td>
            <td>{{ $emp['active_City'] }}</td>
            <td><a href="">U</a>|<a href="">D</a></td>
        </tr>
        @endforeach
    </table>
</section>