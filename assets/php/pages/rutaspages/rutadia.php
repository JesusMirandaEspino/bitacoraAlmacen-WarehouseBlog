<?php require('headrutas.php');  ?>

<body>

    <header>

        <?php require('../../templates/header.php');  ?>

        <?php require('navrutas.php');  ?>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">
                    <h1>Rutas del dia</h1>
                </div>

            </div>

        </section>



    </header>


    <main>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">
                    <h2>Ingresa informacion de la ruta del dia</h2>
                </div>

            </div>

            <!--TODO Formulario entrada de informacion de la ruta del dia    -->
            <form class="fila">

                <!--  Primera parte del Formulario chofer y unidad -->
                <div class="contenedor1">

                    <div class="col-full-2">
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date">
                    </div>

                    <div class="col-full-2">
                        <label for="driver">Chofer</label>
                        <select>
                            <option value="driver1">Chofer1</option>
                            <option value="driver2">Chofer2</option>
                            <option value="driver3">Chofer3</option>
                        </select>
                    </div>

                    <div class="col-full-2">
                        <label for="copilot">Copiloto</label>
                        <select>
                            <option value="copilo1">Copiloto1</option>
                            <option value="copilo2">Copiloto2</option>
                            <option value="copilo3">Copiloto3</option>
                        </select>
                    </div>

                    <div class="col-full-2">
                        <label for="vehicle">Unidad</label>
                        <select>
                            <option value="vehicle1">Unidad1</option>
                            <option value="vehicle2">Unidad2</option>
                            <option value="vehicle3">Unidad3</option>
                        </select>
                    </div>

                    <div class="col-full-2">
                        <label for="kmentry">KM Salida</label>
                        <input type="number" name="kmentry" id="kmentry">
                    </div>

                    <div class="col-full-2">
                        <label for="kmarrival">KM Llegada</label>
                        <input type="number" name="kmarrival" id="kmarrival">
                    </div>

                </div>
                <!--  *********************************** -->


                <!--  Segunda parte del Formulario Pedido -->
                <div class="contenedor1">

                    <div class="col-full-3">
                        <label for="order">Tipo de Pedido</label>
                        <select>
                            <option value="order1">En Ruta</option>
                            <option value="order2">Cliente Recoge</option>
                        </select>
                    </div>

                    <div class="col-full-3">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="store">Tienda origen</label>
                        <select>
                            <option value="store1">Federacion</option>
                            <option value="store2">Independiente</option>
                        </select>
                    </div>

                    <div class="col-full-3">
                        <label for="requested">$ Solicitado</label>
                        <input type="number" name="requested" id="requested">
                    </div>

                    <div class="col-full-3">
                        <label for="assortment">$ Surtido</label>
                        <input type="number" name="assortment" id="assortment">
                    </div>

                </div>
                <!--   ***********************************  -->


                <!--  Tercera parte del Formulario Cliente -->
                <div class="contenedor1">

                    <div class="col-full-4">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="clientname">Nombre del cliente</label>
                        <input type="text" name="clientname" id="clientname">
                    </div>

                    <div class="col-full-4">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="clientaddres">Domicilio</label>
                        <input type="text" name="clientaddres" id="clientaddres">
                    </div>

                    <div class="col-full-4">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="clientcity">Minucipio</label>
                        <input type="text" name="clientcity" id="clientcity">
                    </div>

                </div>
                <!--   ***********************************  -->


                <!--  Cuarta parte del Formulario Informacion adicional -->
                <div class="contenedor1">

                    <div class="col-full-4">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="attended">Recibio</label>
                        <input type="text" name="attended" id="attended">
                    </div>

                    <div class="col-full-4">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="schedule">Horario</label>
                        <input type="text" name="schedule" id="schedule">
                    </div>

                    <div class="col-full-4">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="incidence">Incidencia</label>
                        <select>
                            <option value="vehicle1">Ninguna</option>
                            <option value="vehicle2">Faltante</option>
                            <option value="vehicle3">Daño</option>
                        </select>
                    </div>

                </div>
                <!--   ***********************************  -->


                <div class="contenedor1">

                    <div class="col-full-12">

                        <h4>Observaciones</h4>
                        <textarea name="" id="" cols="30" rows="10">
                        </textarea>

                    </div>

                </div>

            </form>
            <!--TODO Formulario entrada de informacion de la ruta del dia    -->



        </section>


    </main>



    <footer>

        <?php require('../../templates/footer.php');  ?>

    </footer>

</body>


</html>