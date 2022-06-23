<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        table,tr,td,th{
            border: 2px solid black;
            border-collapse: collapse;
        }
        .w-5{
            display:none;
        }
    </style>
</head>
<body>
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
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>
                        <a href="/deleteUser/{{$user->id}}"><button>Delete</button></a>
                        <a href="/updateUserForm/{{$user->id}}"><button>Update</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        <span>{{$users->links()}}</span>
    @endif
</body>
</html>