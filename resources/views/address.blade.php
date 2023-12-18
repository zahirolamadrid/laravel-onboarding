<x-layout>
        <br>
    <h1>FORMULARIO DE DIRECCION</h1>
    <form method="POST" action="/address">
        @csrf
        <br>
    <div>
        <label for="street">Calle:</label>
        <input type="text" id="street" name="street" placeholder="Calle" required>
    </div>
        <br>
    <div>
        <label for="number">Número:</label>
        <input type="text" id="number" name="number" placeholder="Número" required>
    </div>
        <br>
    <div>
        <label for="inner-number">Número interior:</label>
        <input type="text" id="inner-number" name="inner-number" placeholder="Número interior" required>
    </div>
        <br>
    <div>
        <label for="colony">Colonia:</label>
        <input type="text" id="colony" name="colony" placeholder="Colonia" required>
    </div>
        <br>
        <div>
        <label for="Municipality">Delegación o Municipio:</label>
        <input type="text" id="Municipality" name="Municipality" placeholder="Delegación o Municipio" required>
    </div>
        <br>
    <div>
        <label for="state">Estado:</label>
        <input type="text" id="state" name="state" placeholder="Estado" required>
    </div>
        <br>
        <div>
            <label for="city">Ciudad:</label>
            <input type="text" id="city" name="state" placeholder="Ciudad" required>
        </div>
        <br>
    <div>
        <label for="postcode">Código Postal:</label>
        <input type="text" id="postcode" name="postcode" placeholder="Código Postal" required>
    </div>
        <br>
    <button type="submit">Registrar</button>
    </form>
    </x-layout>

