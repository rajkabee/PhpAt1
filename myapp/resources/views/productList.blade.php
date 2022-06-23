@include('pageHeader')
<h1>Product List</h1>
<x-product-card :product="'laptop'" />
<?php echo "PHP template"  ?>
<br>
{{ "Blade Template" }}
{{ $msg }}

@if($msg=="Laptop")
    <h1>price >50000</h1>
    @elseif($msg=="mouse")
    <h1>price >200</h1>
    @else
    <h1>price could be anything</h1>
@endif


@for ($i = 0; $i < 5; $i++)
    <h3>{{ $products[$i] }}</h3>
@endfor

@foreach($products as $product)
    <h3>foreach: {{ $product }}</h3>

@endforeach
@csrf


<script>
    var products = @Json($products);
    console.log(products);
</script>
