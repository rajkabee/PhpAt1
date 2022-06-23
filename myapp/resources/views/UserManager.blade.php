<x-mycontent subject = "My content"/>


<?php
if(isset($name)){
    echo 'hello '.$name. ' of age '.$age;
}
?>
<form action="/user/addUser" method="POST">
    {{ csrf_field() }}
    <label for="name">Name: </label>
    <input type="text" name="name"><br>
    <label for="age">Age: </label>
    <input type="number" name="age"><br>
    <input type="submit" value="submit">
</form>


