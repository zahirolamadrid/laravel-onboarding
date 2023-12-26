<x-layout>
    <h1>Selecciona lo que necesitas</h1>
    <p>Elige una o varias de las soluciones que tenemos para hacer crecer tu empresa y comenzar a ganar.</p>
    <style>
        .marco{
            border:1px solid black;
            padding:10px;
            margin-bottom: 10px;
        }
    </style>

        <form action="{{ route('add_products.store')}}" method="post">
            @csrf
            <section>
                <fieldset>
                    <legend>
                       <h2>Plataforma empresarial y Crédito</h2><!-- Título campo -->
                    </legend>
                    @foreach($products as $product)
                    <div class="marco">
                        <input id="{{$product->id}}" type="checkbox" name="{{$product->id}}" value="{{$product->id}}">
                        <label for="{{$product->id}}" class="info">{{$product->name}}</label>
                        <br>
                        <label for="product-description" class="info">{{$product->description}}</label>
                    </div>
                    @endforeach
                </fieldset>
                    <br>
                <button type="submit">Siguiente</button>
            </section>
        </form>

</x-layout>
