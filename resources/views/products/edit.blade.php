<x-layout>
    <div>
        <h1><label>Editar producto</label></h1>
    </div>
    <div>
        <form action="{{ route('products.update', $product->id) }}" method="post">
            @csrf
            @method("put")
            <label for="product-name">
                Nombre del producto:
            </label>
                <br>
            <input id="product-name" type="text" name="product-name" value="{{ $product->name }}">

            <br>
            <label for="description">
                Descripción del producto:
                <br>
                <textarea id="description" name="description" rows="6">{{$product->description}}</textarea>
            </label>
            <br>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
        <br>
        <div>
            <button><a href="{{ route('products.index') }}">Regresar</a></button>
        </div>
    </div>
</x-layout>
