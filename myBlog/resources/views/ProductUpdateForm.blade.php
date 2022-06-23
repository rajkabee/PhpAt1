<h1>Product Update Form</h1>

    <form action="/updateProduct" method= "POST">

    {{ csrf_field() }}
    <input type="hidden" name="productId" value={{$product->productId}} >
    <label for="productName" >Product Name: </label>
    <br>
    <input type="text" name="productName"  value = {{ $product->productName }}>
    <br>
    <label for="manufacturer">Manufacturer: </label>
    <br>
    <input type="text" name="manufacturer"  value = {{ $product->brand }}>
    <br>
    <label for="description">Product Description: </label>
    <br>
    <textarea name="description" id="" cols="50" rows="4"  value = "">{{ $product->description }}</textarea>
    <br>
    <label for="price">Price: </label>
    <br>
    <input type="number" step="0.01" name="price"  value = {{ $product->price }}>
    <br>
    <label for="isInStock">Is Available: </label>
    <br>
    <input type="radio" name="isInStock" value="true" 
    @if($product->isInStock)
        checked
    @endif
    ><span>Yes</span>
    <input type="radio" name="isInStock" value="false" @if(!$product->isInStock)
        checked
    @endif><span>No</span>

    <br>
    <input type="submit" value="Submit">
    </form>