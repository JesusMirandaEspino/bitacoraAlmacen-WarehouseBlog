<?php require('headrutas.php');  ?>

<body>

    <header>


        <?php require('../../templates/header.php');  ?>

        <?php require('navrutas.php');  ?>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                    <h1>Informacion de la Ruta del dia </h1>

                </div>


            </div>



        </section>



    </header>


    <main>

        <section class="fila">


            <!--  Primera parte Cliente -->
            <div class="contenedor1">

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Nombre del cliente</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Domicilio</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Minucipio</h3>
                    <p></p>
                </div>

            </div>
            <!--   ***********************************  -->

            <!--  Segunda parte  chofer y unidad -->
            <div class="contenedor1">

                <div class="col-full-12">
                    <h3>Fecha</h3>
                </div>

                <div class="col-full-4">
                    <h3>Chofer</h3>
                </div>

                <div class="col-full-2">
                    <h3>Copiloto</h3>
                </div>

                <div class="col-full-2">
                    <h3>Unidad</h3>
                </div>

                <div class="col-full-2">
                    <h3>KM Salida</h3>
                </div>

                <div class="col-full-2">
                    <h3>KM Llegada</h3>
                </div>

            </div>



            <!--  *********************************** -->


            <!--  Tercera parte  Pedido -->
            <div class="contenedor1">

                <div class="col-full-3">
                    <h3>Tipo de Pedido</h3>
                    <p></p>
                </div>

                <div class="col-full-3">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Tienda origen</h3>
                    <p></p>
                </div>

                <div class="col-full-3">
                    <h3>$ Solicitado</h3>
                    <p></p>
                </div>

                <div class="col-full-3">
                    <h3>$ Surtido</h3>
                    <p></p>
                </div>

            </div>
            <!--   ***********************************  -->





            <!--  Cuarta parte  Informacion adicional -->
            <div class="contenedor1">

                <div class="col-full-4">
                    <h3>Recibio</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Horario</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Incidencia</h3>
                    <p></p>
                </div>

            </div>
            <!--   ***********************************  -->


            <div class="contenedor1">

                <div class="col-full-12">
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