<x-layout>
    <h1>Selecciona lo que necesitas</h1>
    <p>Elige una o varias de las soluciones que tenemos para hacer crecer tu empresa y comenzar a ganar.</p>
    <form action="{{'leads.add_products'}}" method="post">
        @csrf
        <section>
            <fieldset>
                <legend>
                   <h2>Plataforma empresarial y Crédito</h2><!-- Título campo -->
                </legend>
                    @foreach($products as $product)
                        <div>
                            <br>
                            <input id="invoicing" type="checkbox" name="invoicing" checked>
                            <label for="invoicing" class="info">{{$product->name}}</label>
                            <br>
                            <label for="invoicing" class="info">{{$product->description}}</label>
                            <br>
                        </div>
                    @endforeach
            </fieldset>
                <br>
                <button type="submit">Siguiente</button>
        </section>
    </form>
</x-layout>
