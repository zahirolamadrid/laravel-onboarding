<x-layout>
    <h1>Crea tu perfil</h1>
    <hr>
    <p>Escribe los siguientes datos
        <br>
        <br>
        Son necesarios para continuar</p>
    <form method="POST" action="/leads">
        @csrf
        <section>
            <fieldset>
                <br>
                <div>
                    <label class="info" for="email">Correo electrónico:</label>
                    <input type="text" id="email" name="email" placeholder="Correo electrónico*" pattern="[a-z0-5]{8,0" required>
                </div>
                <br>
                <div>
                    <label class="info" for="confirm-email">Confirma correo electrónico:</label>
                    <input type="text" id="confirm-email" name="confirm-email" placeholder="Confirma correo electrónico*" pattern="[a-z0-5]{8,0" required>
                </div>
                <br>
                <div>
                    <label class="info" for="first-name">Nombre:</label>
                    <input type="text" id="first-name" name="first-name" placeholder="Primer Nombre*" required>
                </div>
                <br>
                <div>
                    <label class="info" for="second-name">Segundo nombre (opcional):</label>
                    <input type="text" id="second-name" name="second-name" placeholder="Segundo Nombre">
                </div>
                <br>
                <div>
                    <label class="info" for="last-name">Primer apellido:</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Primer apellido*" required>
                </div>
                <br>
                <div>
                    <label class="info" for="second-last-name">Segundo apellido:</label>
                    <input type="text" id="second-last-name" name="second-last-name" placeholder="Segundo apellido*" required>
                </div>
                <div>
                    <label class="info" for="phone">Teléfono:</label>
                    <input type="text" id="phone" name="phone" placeholder="Número de teléfono*" required>
                </div>

            </fieldset>
        </section>
        <br>
        <div>
            <input id="privacy" type="checkbox" name="privacy" checked>
            <label for="privacy" class="terms">He leído y acepto el <a href=""><strong>Aviso de Privacidad</strong></a></label>
        </div>
        <br>
        <button type="submit">Siguiente</button>
    </form>
</x-layout>
