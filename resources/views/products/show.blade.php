<x-layout>
    <div>
        <h1>{{$product->name}}</h1>
    </div>
    <div>
        <p>{{$product->description}}</p>
    </div>
    <br>
    <div>
        <button><a href="{{ route('products.index') }}">Regresar</a></button>
    </div>
</x-layout>
