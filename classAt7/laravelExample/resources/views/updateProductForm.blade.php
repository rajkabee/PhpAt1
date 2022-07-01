<h1>New Product Form</h1>
<form action="/updateProduct" method="POST">
        {{ csrf_field() }}
    <input type="hidden" name="productId" value="{{ $product->productId }}">

    <label for="productName">Product Name: </label>
    <input type="text" name="productName" value="{{ $product->productName }}"><br>
    <label for="brand">Manufacturer: </label>
    <input type="text" name="brand" value="{{ $product->brand }}"><br>
    <label for="description">Product Description: </label>
    <input type="textbox" name="description" value="{{ $product->description }}"><br>
    <label for="price">Price: </label>
    <input type="number" name="price" value="{{ $product->price }}"><br>
    <label for="isInStock">Is in stock: </label>
    <input type="radio" name="isInStock" value="true" @if($product->isInStock) checked @endIf><label for="true" >Yes</label>

    <input type="radio" name="isInStock" value="false"@if(!$product->isInStock) checked @endIf><label for="false">No</label><br>
    <input type="submit" value="Update Product">
</form>
