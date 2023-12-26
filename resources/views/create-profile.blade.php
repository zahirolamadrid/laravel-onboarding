<x-layout>
    <h1>Crea tu perfil</h1>
    <hr>
    <p>Escribe los siguientes datos
        <br>
        <br>
        Son necesarios para continuar</p>
    <form method="POST" action={{route('create-profile.store')}}>
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
                    <label class="info" for="confirm_email">Confirma correo electrónico:</label>
                    <input type="text" id="confirm_email" name="confirm_email" placeholder="Confirma correo electrónico*" pattern="[a-z0-5]{8,0" >
                </div>
                <br>
                <div>
                    <label class="info" for="name">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Nombre*" required>
                </div>
                <br>
                <div>
                    <label class="info" for="second_name">Segundo nombre (opcional):</label>
                    <input type="text" id="second_name" name="second_name" placeholder="Segundo Nombre">
                </div>
                <br>
                <div>
                    <label class="info" for="lastname">Primer apellido:</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Primer apellido*" required>
                </div>
                <br>
                <div>
                    <label class="info" for="second_lastname">Segundo apellido:</label>
                    <input type="text" id="second_lastname" name="second_lastname" placeholder="Segundo apellido*" required>
                </div>
                <div>
                    <label class="info" for="phone">Teléfono:</label>
                    <input type="text" id="phone" name="phone" placeholder="Número de teléfono*" required>
                </div>
                <div>
                    <label class="info" for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña*" required>
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
