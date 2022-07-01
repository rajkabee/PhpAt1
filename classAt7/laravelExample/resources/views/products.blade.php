<h1>Products</h1>
<a href="/addProductForm"><button>Add Product</button></a>
<table>
<thead>
    <th>Sn.</th>
    <th>Product Name</th>
    <th>Manufacturer</th>
    <th>Description</th>
    <th>Price</th>
    <th>Available</th>
    <th>Action</th>
</thead>
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
