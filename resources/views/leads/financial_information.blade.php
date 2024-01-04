<x-layout>
    <h1>Selecciona lo que necesitas</h1>
    <p>Elige una o varias de las soluciones que tenemos para hacer crecer tu empresa y comenzar a ganar.</p>
    <style>
        .marco{
            border:1px solid black;
            padding:10px;
            margin-bottom: 10px;
        }
    </style>

    <form action="" method="post">
        @csrf
        <section>
            <fieldset>
                <legend>
                    <h2>Información financiera</h2><!-- Título campo -->
                </legend>
                <form>

                </form>
                <div class="marco">
                        <input id="employed" type="radio" name="status" onclick="myFunction()">
                        <label for="employed" class="info">Empleado</label>
                            <div id="job-information" style="display:none">
                                <br>
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
                                <input type="text" id="gross-monthly-salary" name="gross-monthly-salary" placeholder="Salario mensual bruto" required/>
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
            <button type="submit">Siguiente</button>
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
        </section>
    </form>

</x-layout>
