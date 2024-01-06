<x-layout>
        <br>
    <h1>Formulario de Dirección</h1>
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
        <input type="number" id="number" name="number" placeholder="Número" required>
    </div>
        <br>
    <div>
        <label for="interior-number">Número interior:</label>
        <input type="number" id="interior-number" name="interior-number" placeholder="Número interior">
    </div>
        <br>
    <div>
        <label for="colony">Colonia:</label>
        <input type="text" id="colony" name="colony" placeholder="Colonia" required>
    </div>
        <br>
        <div>
        <label for="municipality">Delegación o Municipio:</label>
        <input type="text" id="municipality" name="municipality" placeholder="Delegación o Municipio" required>
    </div>
        <br>
        <div>
            <label for="city">Ciudad:</label>
            <input type="text" id="city" name="city" placeholder="Ciudad" required>
        </div>
        <br>
    <div>
        <label for="state">Estado:</label>

                <select name="state" id="state">
                    <option value="seleccionar">Selecciona un Estado</option>
                    @foreach($states as $state)
                        <option value={{$state}}>{{$state}}</option>
                    @endforeach
                </select>
            </div>
        <br>
    <div>
        <label for="postcode">Código Postal:</label>
        <input type="number" id="postcode" name="postcode" placeholder="Código Postal" required>
    </div>
        <br>
    <button type="submit">Registrar</button>
    </form>
    </x-layout>

