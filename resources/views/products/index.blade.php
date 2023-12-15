<x-layout>
    <div><h3>Productos</h3></div>
    <div>
        <button type="submit"><a href="products/create">Adicionar nuevo producto</a></button>
    </div>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acción</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>prueba</td>
                <td>prueba</td>
                <td>prueba</td>
                <td>
                    <button type="submit">Guardar</button>
                    <button type="submit"><a href="products/edit">Editar</a></button>
                    <button type="submit">Borrar</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</x-layout>
