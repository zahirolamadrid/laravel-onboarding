<x-layout>
    <div>
        <h1><label>{{$product->name}}</label></h1>
    </div>
    <div>
        <h3><label>Descripción del producto:</label></h3>
        <label>{{$product->description}}</label>
    </div>
    <br>
    <div>
        <button><a href="{{ route('products.index') }}">Regresar</a></button>
    </div>
</x-layout>
