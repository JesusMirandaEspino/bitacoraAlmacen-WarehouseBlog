<?php require('headrutas.php');  ?>

<body>

    <header>


        <?php require('../../templates/header.php');  ?>

        <?php require('navrutas.php');  ?>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                    <h1>Acumulado Semanal</h1>

                </div>


            </div>



        </section>



    </header>


    <main>

        <section class="fila">


            <div class="contenedor1">

                <div class="col-full-12">
                    <h2>Fecha semana</h2>
                    <p></p>
                </div>

            </div>

        </section>


        <!--  Primera Incidencias -->
        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">
                    <h2>Incidencias</h2>
                </div>

            </div>

            <div class="contenedor1">

                <div class="col-full-2">
                    <h3>Perfecto</h3>
                </div>

                <div class="col-full-2">
                    <h3>No entregado</h3>
                </div>

                <div class="col-full-2">
                    <h3>Tardio</h3>
                </div>

                <div class="col-full-2">
                    <h3>Incompleto</h3>
                </div>

                <div class="col-full-2">
                    <h3>Cambio de codigo</h3>
                </div>

                <div class="col-full-2">
                    <h3>Dañado</h3>
                </div>

            </div>

            <div class="contenedor1">

                <div class="col-full-2"><p>1</p></div>
                <div class="col-full-2"><p>1</p></div>
                <div class="col-full-2"><p>1</p></div>
                <div class="col-full-2"><p>1</p></div>
                <div class="col-full-2"><p>1</p></div>
                <div class="col-full-2"><p>1</p></div>

            </div>

        </section>
        <!--  *********************************** -->


        <!--  Segunda parte  Pedido -->
        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">
                    <h2>Pedidos</h2>
                </div>

            </div>

            <div class="contenedor1">

                <div class=" col-full-4">
                    <h3>Origen del pedido</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Tipo</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Monto $</h3>
                    <p></p>
                </div>

            </div>



            <div class="contenedor1">

                <div class="col-full-4"><p>1</p></div>
                <div class="col-full-4"><p>1</p></div>
                <div class="col-full-4"><p>1</p></div>

            </div>


        </section>
        <!--   ***********************************  -->


        <!--  Tercera parte Municipios -->
        <section class="contenedor1">

            <div class="contenedor1">
                <div class="col-full-12">
                    <h2>Municipios</h2>
                </div>
            </div>

            <div class="contenedor1">

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Municipio</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Cantidad</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <!--  Esta la tendra que dar en automatico -->
                    <h3>Monto $</h3>
                    <p></p>
                </div>

            </div>


            <div class="contenedor1">

                <div class="col-full-4"><p>2</p></div>
                <div class="col-full-4"><p>2</p></div>
                <div class="col-full-4"><p>2</p></div>

            </div>


        </section>
        <!--   ***********************************  -->


        <!--  Cuarta parte  Choferes -->
        <section class="fila">

            <div class="contenedor1">
                <div class="col-full-12">
                    <h2>Choferes</h2>
                </div>
            </div>


            <div class="contenedor1">
                <div class="col-full-4">
                    <h3>Nombre</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Km Recorridos</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Monto entregado $</h3>
                    <p></p>
                </div>
            </div>

            <div class="contenedor1">
                <div class="col-full-4"><p>4</p></div>
                <div class="col-full-4"><p>4</p></div>
                <div class="col-full-4"><p>4</p></div>
            </div>

        </section>
        <!--   ***********************************  -->


        <!--  Quinta parte  Unidades -->
        <section class="fila">

            <div class="contenedor1">
                <div class="col-full-12">
                    <h2>Vehiculos</h2>
                </div>
            </div>


            <div class="contenedor1">
                <div class="col-full-4">
                    <h3>Unidad</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Km Recorridos</h3>
                    <p></p>
                </div>

                <div class="col-full-4">
                    <h3>Monto entregado $</h3>
                    <p></p>
                </div>
            </div>

            <div class="contenedor1">
                <div class="col-full-4"><p>5</p></div>
                <div class="col-full-4"><p>5</p></div>
                <div class="col-full-4"><p>5</p></div>
            </div>

        </section>
        <!--   ***********************************  -->


        <section class="fila">
            <div class="contenedor1">
                <div class="col-full-12">
                    <h4>Totales</h4>
                </div>
            </div>
            <div class="contenedor1">

                <div class="col-full-3">
                    <h3>Pedidos</h3>
                </div>

                <div class="col-full-3">
                    <h3>Monto $</h3>
                </div>

                <div class="col-full-3">
                    <h3>Km Recorridos</h3>
                </div>

                <div class="col-full-3">
                    <h3>Incidencias</h3>
                </div>

            </div>

            <div class="contenedor1">
                <div class="col-full-3" ><p>6</p></div>
                <div class="col-full-3" ><p>6</p></div>
                <div class="col-full-3" ><p>6</p></div>
                <div class="col-full-3" ><p>6</p></div>
            </div>


        </section>

    </main>



    <footer>

        <?php require('../../templates/footer.php');  ?>

    </footer>

</body>


</html>