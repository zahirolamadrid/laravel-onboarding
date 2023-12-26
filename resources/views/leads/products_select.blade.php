<x-layout>
    @foreach($products as $product_select)
    <div>
        <h1>{{$product_select->name}}</h1>
    </div>
    <div>
        <p>{{$product_select->description}}</p>
    </div>
    @endforeach
    <br>
</x-layout>
