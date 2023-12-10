<x-layout>
    <form method="POST" action="/leads">
        @csrf
        <div>
            <label for="name">Primer nombre:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="second-name">Segundo nombre:</label>
            <input type="text" id="second-name" name="second-name">
        </div>
        <div>
            <label for="last-name">Primer apellido:</label>
            <input type="text" id="last-name" name="last-name" required>
        </div>
        <div>
            <label for="second-last-name">Segundo apellido</label>
            <input type="text" id="second-last-name" name="second-last-name" required>
        </div>
        <button type="submit">Registrar</button>
    </form>
</x-layout>

