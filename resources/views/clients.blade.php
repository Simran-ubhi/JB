@include('/partials/header')


<h1 style="text-align:center">Clients</h1>
<section class="clients-table-box">
    <table>
        <tr>
            <th>Clients ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>City</th>
            <th>Actions
            </th>
        </tr>
        @foreach($clients as $client )
        <tr>
            <td>{{ $client['clientID'] }}</td>
            <td>{{ $client['cname'] }}</td>
            <td>{{ $client['pnumber'] }}</td>
            <td>{{ $client['City'] }}</td>
            <td><a href="">U</a>|<a href="">D</a></td>
            </tr>
        @endforeach
        
    </table>
</section>