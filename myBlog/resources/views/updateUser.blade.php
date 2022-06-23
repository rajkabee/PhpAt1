<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>
<body>
    <h1>user Update form</h1>
    <form action="/updateUser" method = "POST">
    {{ csrf_field() }}
        <input type="hidden" name= "id" value = "{{ $user->id }}" >
        <label for="name">Name: </label>
        <input type="text" name = "name" value = "{{ $user->name }}"><br>
        <label for="email">Email: </label>
        <input type="email" name="email" value = "{{ $user->email }}" >
        <br>
        <input type="submit" value ="Update">

    </form>    

</body>
</html>