<x-layout>
    <div><h3>Productos</h3></div>
    <div>
        <button type="submit"><a href="{{ route('products.create') }}">Adicionar nuevo producto</a></button>
    </div>
    <div>
        <br>
        <table class="table table-striped table-bordered">
            <style>
                table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
            </style>
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <button type="submit"><a href="{{ route('products.show', $product->id) }}">Mostrar</a></button>
                    <button type="submit"><a href="{{ route('products.edit', $product->id) }}">Editar</a></button>
                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Quieres eliminar este producto?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @empty
                <td colspan="6">
                                <span class="text-danger">
                                    <strong>¡Producto no encontrado!</strong>
                                </span>
                </td>
            @endforelse
            </tbody>
        </table>
    </div>
</x-layout>
