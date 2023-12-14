<x-layout>
    <h3>Registro</h3>
    <form method="POST" action="/leads">
        @csrf
        <br>
        <div>
            <label for="person-type">Tipo de persona:</label>
            <input type="text" id="person-type" name="person-type" placeholder="Tipo de persona" required>
        </div>
        <br>
        <div>
            <label for="business-name">Nombre del Negocio:</label>
            <input type="text" id="business-name" name="business-name" placeholder="Nombre del Negocio" required>
        </div>
        <br>
        <div>
            <label for="business-rfc">RFC de la empresa:</label>
            <input type="text" id="business-rfc" name="business-rfc" placeholder="RFC de la empresa" required>
        </div>
        <br>
        <div>
            <label for="first-name">Nombre:</label>
            <input type="text" id="first-name" name="first-name" placeholder="Nombre" required>
        </div>
        <br>
        <div>
            <label for="second-name">Segundo nombre (opcional):</label>
            <input type="text" id="second-name" name="second-name" placeholder="Segundo nombre">
        </div>
        <br>
        <div>
            <label for="last-name">Primer apellido:</label>
            <input type="text" id="last-name" name="last-name" placeholder="Primer apellido" required>
        </div>
        <br>
        <div>
            <label for="second-last-name">Segundo apellido:</label>
            <input type="text" id="second-last-name" name="second-last-name" placeholder="Segundo apellido" required>
        </div>
        <br>
        <div>
            <label for="rfc">RFC</label>
            <input type="text" id="rfc" name="rfc" placeholder="RFC" required>
        </div>
        <br>
        <div>
            <label for="curp">CURP:</label>
            <input type="text" id="curp" name="curp" placeholder="CURP" required>
        </div>
        <br>
        <div>
            <label for="phone">Teléfono:</label>
            <input type="text" id="phone" name="phone" placeholder="Número de teléfono" required>
        </div>
        <br>
        <div>
            <label for="email">Correo:</label>
            <input type="text" id="email" name="email" placeholder="Correo electrónico" required>
        </div>
        <br>
        <button type="submit">Registrar</button>
    </form>
</x-layout>
