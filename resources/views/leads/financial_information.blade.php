<x-layout>
    <h1>Información financiera</h1>
    <p>Seleccione una opción para continuar:    </p>

    <style>
        .marco{
            border:1px solid black;
            padding:10px;
            margin-bottom: 10px;
        }
    </style>

    <form action="/leads/financial-information" method="get">
        @csrf
        <section>
            <fieldset>
                <div class="marco">
                        <input id="employed" type="radio" name="status" onclick="myFunction()">
                        <label for="employed" class="info">Empleado</label>
                            <div class="text-input" id="job-information" style="display:none">
                                <p>Completa la siguiente información: </p>
                                <label for="company-name" id="company-name">Nombre de la compañía:</label>
                                <br>
                                <input type="text" id="company-name" name="company-name" placeholder="Nombre de la compañía" required/>
                                <br>
                                <label for="position-in-the-company">Puesto en la compañía:</label>
                                <br>
                                <input type="text" id="position-in-the-company" name="position-in-the-company" placeholder="Puesto en la compañía" required/>
                                <br>
                                <label for="gross-monthly-salary" >Salario mensual bruto:</label>
                                <br>
                                <input type="number" id="gross-monthly-salary" name="gross-monthly-salary" placeholder="Salario mensual bruto" min="0" step="0.01" required/>
                            </div>
                        <br>
                        <input id="unemployed" type="radio" name="status" onclick="myFunction()">
                        <label for="unemployed" class="info">No empleado</label>
                        <br>
                        <input id="retired" type="radio" name="status" onclick="myFunction()">
                        <label for="retired" class="info">Retirado</label>
                        <br>
                    </div>
            </fieldset>
            <br>
            <script>
                function myFunction() {
                    let employed = document.getElementById("employed");
                    let div = document.getElementById("job-information");

                    if (employed.checked === true) {
                        div.style.display = "block";
                    } else {
                        div.style.display = "none";
                    }
                }
            </script>
            <button type="submit" onclick="return confirm('Se ha adicionado su información financiera')">Siguiente</button>

        </section>
    </form>

</x-layout>
