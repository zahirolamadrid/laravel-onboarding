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
        <label for="interior-number">Número interior:</label>
        <input type="text" id="interior-number" name="interior-number" placeholder="Número interior">
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
        //<ol>
        <label for="state">Estado:</label>
        <select name="state" id="state">
            <option value="estadomexico">Estado de México</option>
            <option value="jalisco">Jalisco</option>
            <option value="michoacan">Michoacán</option>
            <option value="ciudadmexico">Ciudad de México</option>
            <option value="yucatan">Yucatán</option>
            <option value="bcalifornia">Baja California</option>
            <option value="chiapas">Chiapas</option>
            <option value="nleon">Nuevo León</option>
            <option value="guanajuato">Guanajuato</option>
            <option value="hidalgo">Hidalgo</option>
            <option value="sonora">Sonora</option>
            <option value="tamaulipas">Tamaulipas</option>
            <option value="nayarit">Nayarit</option>
            <option value="tlaxcala">Tlaxcala</option>
            <option value="qroo">Quintana Roo</option>
            <option value="cohauila">Cohauila de Zaragoza</option>
            <option value="morelos">Morelos</option>
            <option value="slpotosi">San Luis Potosí</option>
            <option value="durango">Durango</option>
            <option value="tabasco">Tabasco</option>
            <option value="chihuahua">Chihuahua</option>
            <option value="sinaloa">Sinaloa</option>
            <option value="bcaliforniasur">Baja California Sur</option>
            <option value="veracruz">Veracruz</option>
            <option value="puebla">Puebla</option>
            <option value="queretano">Querétano</option>
            <option value="oaxaca">Oaxaca</option>
            <option value="zacateca">Zacatecas</option>
            <option value="acaliente">Aguascalientes</option>
            <option value="colima">Colima</option>
            <option value="campeche">Campeche</option>
        </select>
        //</ol>
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

