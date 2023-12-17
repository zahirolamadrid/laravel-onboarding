<x-layout>
    <div>
        <h1><label>{{$product->name}}</label></h1>
    </div>
    <div>
        <p><label>{{$product->description}}</label></p>
    </div>
    <br>
    <div>
        <button><a href="{{ route('products.index') }}">Regresar</a></button>
    </div>
</x-layout>
