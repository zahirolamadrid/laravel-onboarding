<x-layout>
    <h1>Selecciona lo que necesitas</h1>
    <p>Elige una o varias de las soluciones que tenemos para hacer crecer tu empresa y comenzar a ganar.</p>
    <form action="{{'leads.add_products'}}" method="post">
        @csrf
        <section>
            <fieldset>
                <legend><h3>Plataforma empresarial</h3></legend><!-- Título campo -->
                <div>
                    <input id="invoicing" type="checkbox" name="invoicing" checked>
                    <label for="invoicing" class="info">Facturación</label>
                    <input id="payroll" type="checkbox" name="payroll">
                    <label for="payroll" class="info">Nómina</label>
                </div>
            </fieldset>
            <fieldset>
            <legend><h3>Crédito</h3></legend>
                <br>
                <div>
                    <input id="credit-card" type="checkbox" name="credit-card" checked>
                    <label for="credit-card" class="info">Tarjeta de crédito</label>
                    <input id="pyme-credit" type="checkbox" name="pyme-credit">
                    <label for="pyme-credit" class="info">Crédito PyME</label>
                    <input id="flex-credit" type="checkbox" name="flex-credit">
                    <label for="flex-credit" class="info">Crédito FLEX</label>
                </div>
            </fieldset>
        <br>
        <button type="submit">Siguiente</button>
        </section>
    </form>
</x-layout>
