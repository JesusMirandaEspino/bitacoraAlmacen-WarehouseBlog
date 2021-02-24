<?php require('headrutas.php');  ?>

<body>

    <header>


        <?php require('../../templates/header.php');  ?>

        <?php require('navrutas.php');  ?>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                    <h1 class="title-pages">Informacion de la Ruta del dia </h1>

                </div>


            </div>



        </section>



    </header>


    <main>

        <section class="fila data-form-container">


            <!--  Primera parte Cliente -->
            <div class="contenedor2 form-part-container">

                <div class="col-full-4 data-container">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Nombre del cliente</h3>
                    <p></p>
                </div>

                <div class="col-full-4 data-container">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Domicilio</h3>
                    <p></p>
                </div>

                <div class="col-full-4 data-container">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Minucipio</h3>
                    <p></p>
                </div>

            </div>
            <!--   ***********************************  -->

            <!--  Segunda parte  chofer y unidad -->
            <div class="contenedor2 form-part-container">

                <div class="col-full-12 data-container">
                    <h3>Fecha</h3>
                </div>

                <div class="col-full-4 data-container">
                    <h3>Chofer</h3>
                </div>

                <div class="col-full-2 data-container">
                    <h3>Copiloto</h3>
                </div>

                <div class="col-full-2 data-container">
                    <h3>Unidad</h3>
                </div>

                <div class="col-full-2 data-container">
                    <h3>KM Salida</h3>
                </div>

                <div class="col-full-2 data-container">
                    <h3>KM Llegada</h3>
                </div>

            </div>



            <!--  *********************************** -->


            <!--  Tercera parte  Pedido -->
            <div class="contenedor2 form-part-container">

                <div class="col-full-3 data-container">
                    <h3>Tipo de Pedido</h3>
                    <p></p>
                </div>

                <div class="col-full-3 data-container">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Tienda origen</h3>
                    <p></p>
                </div>

                <div class="col-full-3 data-container">
                    <h3>$ Solicitado</h3>
                    <p></p>
                </div>

                <div class="col-full-3 data-container">
                    <h3>$ Surtido</h3>
                    <p></p>
                </div>

            </div>
            <!--   ***********************************  -->





            <!--  Cuarta parte  Informacion adicional -->
            <div class="contenedor2 form-part-container">

                <div class="col-full-4 data-container">
                    <h3>Recibio</h3>
                    <p></p>
                </div>

                <div class="col-full-4 data-container">
                    <h3>Horario</h3>
                    <p></p>
                </div>

                <div class="col-full-4 data-container">
                    <h3>Incidencia</h3>
                    <p></p>
                </div>

            </div>
            <!--   ***********************************  -->


            <div class="contenedor2 form-part-container">

                <div class="col-full-12 data-container">
                    <h4>Observaciones</h4>
                    <p></p>
                </div>

            </div>

        </section>

    </main>



    <footer>

        <?php require('../../templates/footer.php');  ?>

    </footer>

</body>


</html>