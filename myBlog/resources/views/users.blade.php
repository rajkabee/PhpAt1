@if($users)
<table>
    <tr>
        <th>Sn.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    
    @foreach($users as $user)
    <tr>
        <td>{{ $user -> id }}</td>
        <td>{{ $user -> name }}</td>
        <td>{{ $user -> email }}</td>
        <td>

        <a href="/deleteUser?id=1"><button>Delete</button></a>
        
        </td>
    </tr>

    @endforeach
@endif