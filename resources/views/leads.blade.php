<x-layout>
        <h1>¡Regístrate en nuestra plataforma!</h1>
        <p>Bienvenido a Laravel Onboarding, completa el registro</p>
    <h4>Persona física con actividad empresarial</h4>

    <form method="POST" action="/leads">
        @csrf
        <section>
            <fieldset>
                <h3>Información personal</h3>
                <div>
            <input id="residence-foreign" type="radio" name="residence" checked>
            <label for="residence-foreign" class="info">Residente extranjero en México</label>
            <input id="residence-mexican" type="radio" name="residence">
            <label for="residence-mexican" class="info">Mexicano</label>
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
            <br>
            <div>
                <label class="info" for="rfc">RFC:</label>
                <input type="text" id="rfc" name="rfc" placeholder="RFC*" required>
            </div>
            <br>
            <div>
                <label class="info" for="curp">CURP:</label>
                <input type="text" id="curp" name="curp" placeholder="CURP*" required>
            </div>
            <br>
        </fieldset>
            <h3>Información de la empresa</h3>
            <fieldset>
        <br>
        <div>
            <label class="info" for="person-type">Tipo de persona:</label>
            <input type="text" id="person-type" name="person-type" placeholder="Tipo de persona*" required>
        </div>
        <br>
        <div>
            <label class="info" for="business-name">Nombre del Negocio:</label>
            <input type="text" id="business-name" name="business-name" placeholder="Nombre del Negocio*" required>
        </div>
        <br>
        <div>
            <label class="info" for="business-rfc">RFC de la empresa:</label>
            <input type="text" id="business-rfc" name="business-rfc" placeholder="RFC de la empresa*" required>
        </div>
            </fieldset>
            <h3>Información de contacto</h3>
        <br>
            <fieldset>
        <div>
            <label class="info" for="phone">Teléfono:</label>
            <input type="text" id="phone" name="phone" placeholder="Número de teléfono*" required>
        </div>
        <br>
        <div>
            <label class="info" for="email">Correo:</label>
            <input type="text" id="email" name="email" placeholder="Correo electrónico*" pattern="[a-z0-5]{8,0" required>
        </div>
                <br>
                <div>
                    <label for="products-interest">¿Qué productos te interesan?</label>
                    <select type="dropdown" id="products-interest">
                        <option value="1">Crédito PYME/FLEX</option>
                        <option value="2">Tarjeta de crédito</option>
                        <option value="3">Plataforma Empresarial</option>
                        <option value="4">Crea tu empresa</option>
                    </select>
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
