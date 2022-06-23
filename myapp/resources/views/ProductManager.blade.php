<x-header data= "Product Manager"/>


<?php
if(isset($name)){
    echo 'procuct: '.$name. ' Price: '.$price;
}
?>
<form action="/product/addProduct" method="POST">
    {{ csrf_field() }}
    <label for="name">Product name: </label>
    <input type="text" name="name"><br>
    <label for="price">Price: </label>
    <input type="number" name="price"><br>
    <input type="submit" value="Submit">
</form>