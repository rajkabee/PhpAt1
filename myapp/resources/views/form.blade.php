<form action="/product/addProduct" method="POST">
    <label for="productName">Product Name: </label>
    <input type="text" name="productName"><br>
    <label for="brand">Manufacturer: </label>
    <input type="text" name="brand"><br>
    <label for="description">Product Description: </label>
    <input type="textbox" name="description"><br>
    <label for="price">Price: </label>
    <input type="number" name="price"><br>
    <label for="isInStock">Is in stock: </label>
    <input type="radio" name="isInStock" value="true"><label for="true">Yes</label>
    
    <input type="radio" name="isInStock" value="false"><label for="false">No</label><br>
    <input type="submit" value="Add Product">
</form>
