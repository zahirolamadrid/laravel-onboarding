<x-layout>
    <form method="POST" action="/leads">
        @csrf
        <br>
        <div>
            <label for="person-type">Tipo de persona:</label>
            <input type="text" id="person-type" name="person-type" required>
        </div>
        <br>
        <div>
            <label for="business-name">Nombre del Negocio:</label>
            <input type="text" id="business-name" name="business-name" required>
        </div>
        <br>
        <div>
            <label for="business-rfc">RFC:</label>
            <input type="text" id="business-rfc" name="business-rfc" required>
        </div>
        <br>
        <div>
            <label for="first-name">Primer nombre:</label>
            <input type="text" id="first-name" name="first-name" required>
        </div>
        <br>
        <div>
            <label for="second-name">Segundo nombre</label>
            <input type="text" id="second-name" name="second-name" required>
        </div>
        <br>
        <div>
            <label for="last-name">Primer apellido</label>
            <input type="text" id="last-name" name="last-name" required>
        </div>
        <br>
        <div>
            <label for="second-last-name">Segundo apellido</label>
            <input type="text" id="second-last-name" name="second-last-name" required>
        </div>
        <br>
        <div>
            <label for="rfc">RFC</label>
            <input type="text" id="rfc" name="rfc" required>
        </div>
        <br>
        <div>
            <label for="curp">CURP</label>
            <input type="text" id="curp" name="curp" required>
        </div>
        <br>
        <div>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <br>
        <div>
            <label for="email">Correo</label>
            <input type="text" id="email" name="email" required>
        </div>
        <br>
        <button type="submit">Registrar</button>
    </form>
</x-layout>

