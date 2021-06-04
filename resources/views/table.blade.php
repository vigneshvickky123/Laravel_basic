<h2>Data from DB</h2>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Mobile</td>
        <td>Email</td>
    </tr>
    @foreach($details as $detail)
    <tr>
        <td>{{$detail['id']}}</td>
        <td>{{$detail['name']}}</td>
        <td>{{$detail['mobile']}}</td>
        <td>{{$detail['email']}}</td>
    </tr>
    @endforeach
    

</table>
