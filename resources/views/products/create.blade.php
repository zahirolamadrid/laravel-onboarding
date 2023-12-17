<x-layout>
    <div>
        <h1><label>Adicionar producto</label></h1>
    </div>
    <div>
        <form action="{{ route('products.store') }}" method="post">
            @csrf
            <label>
                Nombre del producto:
                <br>
                <input  type="text" name="name">
            </label>
            <br>
            <label>
                Descripción del producto:
                <br>
                <textarea name="description" rows="6"></textarea>
            </label>
            <br>
            <div>
                <button type="submit">Guardar</button>
            </div>
            <br>
        </form>

        <div>
            <button><a href="{{ route('products.index') }}">Regresar</a></button>
        </div>
    </div>
</x-layout>
