<a href="/addProduct"><button>Add Product</button></a>

@if($products)

        <table>
            <tr>
                <th>Sn.</th>
                <th>Product Name</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Price</th>
                <th>Is Available</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->productId}}</td>
                    <td>{{$product->productName}}</td>
                    <td>{{$product->brand}}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->isInStock)
                        Available
                        @else
                        Not Available
                        @endif
                    </td>
                    <td>
                        <a href="/deleteProduct/{{$product->productId}}"><button>Delete</button></a>
                        <a href="/updateProductForm/{{$product->productId}}"><button>Update</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
        
    @endif