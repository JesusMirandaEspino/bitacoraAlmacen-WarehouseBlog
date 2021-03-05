<?php require('headrutas.php');  ?>
<?php require('rutaconfig.php');  ?>


<?php

//Performance
$driver    =  filter_input(INPUT_POST, 'driver', FILTER_SANITIZE_STRING);
$copiloto  =  filter_input(INPUT_POST, 'copiloto', FILTER_SANITIZE_STRING);
$vehicle   =  filter_input(INPUT_POST, 'vehicle', FILTER_SANITIZE_STRING);
$kmout     =  filter_input(INPUT_POST, 'kmout', FILTER_SANITIZE_NUMBER_INT);
$kmin      =  filter_input(INPUT_POST, 'kmin', FILTER_SANITIZE_NUMBER_INT);

//Order
$ordertype       =  filter_input(INPUT_POST, 'ordertype', FILTER_SANITIZE_STRING);
$orderorigin     =  filter_input(INPUT_POST, 'orderorigin', FILTER_SANITIZE_STRING);
$requested       =  filter_input(INPUT_POST, 'requested', FILTER_SANITIZE_NUMBER_INT);
$assortment      =  filter_input(INPUT_POST, 'assortment', FILTER_SANITIZE_NUMBER_INT);


//Client
$clientname       =  filter_input(INPUT_POST, 'clientname', FILTER_SANITIZE_STRING);
$clientaddress    =  filter_input(INPUT_POST, 'clientaddress', FILTER_SANITIZE_STRING);
$clientcity       =  filter_input(INPUT_POST, 'clientcity', FILTER_SANITIZE_STRING);
$attended         =  filter_input(INPUT_POST, 'attended', FILTER_SANITIZE_STRING);
$schedule         =  filter_input(INPUT_POST, 'schedule', FILTER_SANITIZE_STRING);
$incidence        =  filter_input(INPUT_POST, 'incidence', FILTER_SANITIZE_STRING);
$observations     = strip_tags( 'observations', '<br><div><p><img><a>');


//date
$date = $today;

//FILTER_SANITIZE_NUMBER_INT

$postPerformance = new Performance($driver, $copiloto, $vehicle, $kmout, $kmin);
$postOrder = new Order($ordertype, $orderorigin, $requested, $assortment);
$postClient = new Client($clientname, $clientaddress, $clientcity, $attended, $schedule, $incidence, $observations);


insert_post($date, $postPerformance, $postOrder, $postClient);

?>


<body>

    <header>

        <?php require('../../templates/header.php');  ?>

        <?php require('navrutas.php');  ?>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">
                    <h1 class="title-pages">Rutas del dia</h1>
                </div>

            </div>

        </section>



    </header>


    <main>


        <section class="fila">

            <div class="contenedor1  form-title-container ">

                <div class="col-full-12 ">
                    <h2 class="title-form ">Ingresa informacion de la ruta del dia</h2>
                </div>

            </div>

            <!--TODO Formulario entrada de informacion de la ruta del dia    -->
            <form class="fila">

                <!--  Primera parte del Formulario chofer y unidad -->
                <div class="contenedor2 form-part-container ">

                    <div class="col-full-2 data-container">
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date" value="<?php echo $today;?>">
                    </div>
                    $vehicule, $kmout, $kmin
                    <div class="col-full-2 data-container">
                        <label for="driver">Chofer</label>
                        <select name="driver" id="driver">
                            <option value="<?php echo  htmlspecialchars($driver, ENT_QUOTES); ?>">Chofer1</option>
                            <option value="<?php echo  htmlspecialchars($driver, ENT_QUOTES); ?>">Chofer2</option>
                            <option value="<?php echo  htmlspecialchars($driver, ENT_QUOTES); ?>">Chofer3</option>
                        </select>
                    </div>

                    <div class="col-full-2 data-container">
                        <label for="copilot">Copiloto</label>
                        <select name="copiloto" id="copiloto">
                            <option value="<?php echo  htmlspecialchars($copiloto, ENT_QUOTES); ?>">Copiloto1</option>
                            <option value="<?php echo  htmlspecialchars($copiloto, ENT_QUOTES); ?>">Copiloto2</option>
                            <option value="<?php echo  htmlspecialchars($copiloto, ENT_QUOTES); ?>">Copiloto3</option>
                        </select>
                    </div>

                    <div class="col-full-2 data-container">
                        <label for="vehicle">Unidad</label>
                        <select name="vehicle" id="vehicle">
                            <option value="<?php echo  htmlspecialchars($vehicle, ENT_QUOTES); ?>">Unidad1</option>
                            <option value="<?php echo  htmlspecialchars($vehicle, ENT_QUOTES); ?>">Unidad2</option>
                            <option value="<?php echo  htmlspecialchars($vehicle, ENT_QUOTES); ?>">Unidad3</option>
                        </select>
                    </div>

                    <div class="col-full-2 data-container">
                        <label for="kmeout">KM Salida</label>
                        <input type="number" name="kmout" id="kmout" value="<?php echo  htmlspecialchars($kmout, ENT_QUOTES); ?>">
                    </div>

                    <div class="col-full-2 data-container">
                        <label for="kmin">KM Llegada</label>
                        <input type="number" name="kmin" id="kmin" value="<?php echo  htmlspecialchars($kmin, ENT_QUOTES); ?>">
                    </div>

                </div>
                <!--  *********************************** -->


                <!--  Segunda parte del Formulario Pedido -->
                <div class="contenedor2 form-part-container">

                    <div class="col-full-3 data-container">
                        <label for="ordertype">Tipo de Pedido</label>
                        <select name="ordertype" id="ordertype">
                            <option value="<?php echo  htmlspecialchars($ordertype, ENT_QUOTES); ?>">En Ruta</option>
                            <option value="<?php echo  htmlspecialchars($ordertype, ENT_QUOTES); ?>">Cliente Recoge</option>
                        </select>
                    </div>

                    <div class="col-full-3 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="orderorigin">Tienda origen</label>
                        <select name="orderorigin" id="orderorigin">
                            <option value="<?php echo  htmlspecialchars($orderorigin, ENT_QUOTES); ?>">Federacion</option>
                            <option value="<?php echo  htmlspecialchars($orderorigin, ENT_QUOTES); ?>">Independiente</option>
                        </select>
                    </div>

                    <div class="col-full-3 data-container">
                        <label for="requested">$ Solicitado</label>
                        <input type="number" name="requested" id="requested" value="<?php echo  htmlspecialchars($requested, ENT_QUOTES); ?>">
                    </div>


                    <div class="col-full-3 data-container">
                        <label for="assortment">$ Surtido</label>
                        <input type="number" name="assortment" id="assortment" value="<?php echo  htmlspecialchars($assortment, ENT_QUOTES); ?>">
                    </div>

                </div>
                <!--   ***********************************  -->


                <!--  Tercera parte del Formulario Cliente -->
                <div class=" contenedor2 form-part-container">

                    <div class="col-full-4 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="clientname">Nombre del cliente</label>
                        <input type="text" name="clientname" id="clientname" value="<?php echo  htmlspecialchars($clientname, ENT_QUOTES); ?>">
                    </div>

                    <div class="col-full-4 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="clientaddress">Domicilio</label>
                        <input type="text" name="clientaddress" id="clientaddress" value="<?php echo  htmlspecialchars($clientaddress, ENT_QUOTES); ?>">
                    </div>

                    <div class="col-full-4 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="clientcity">Minucipio</label>
                        <input type="text" name="clientcity" id="clientcity" value="<?php echo  htmlspecialchars($clientcity, ENT_QUOTES); ?>">
                    </div>

                </div>
                <!--   ***********************************  -->


                <!--  Cuarta parte del Formulario Informacion adicional -->
                <div class="contenedor2 form-part-container">

                    <div class="col-full-4 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="attended">Recibio</label>
                        <input type="text" name="attended" id="attended" value="<?php echo  htmlspecialchars($attended, ENT_QUOTES); ?>">
                    </div>

                    <div class="col-full-4 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="schedule">Horario</label>
                        <input type="text" name="schedule" id="schedule" value="<?php echo  htmlspecialchars($schedule, ENT_QUOTES); ?>">
                    </div>

                    <div class="col-full-4 data-container">
                        <!--  Esta la tendra que dar en automatico -->
                        <label for="incidence">Incidencia</label>
                        <select name="ncidence" id="ncidence">
                            <option value="<?php echo  htmlspecialchars($incidence, ENT_QUOTES); ?>">Ninguna</option>
                            <option value="<?php echo  htmlspecialchars($incidence, ENT_QUOTES); ?>">Faltante</option>
                            <option value="<?php echo  htmlspecialchars($incidence, ENT_QUOTES); ?>">Daño</option>
                        </select>
                    </div>

                </div>
                <!--   ***********************************  -->


                <div class="contenedor2 form-part-container">

                    <div class="col-full-12 data-container">

                        <h4>Observaciones</h4>
                        <textarea name="observations" id="observations" cols="30" rows="10">
                        <?php echo  htmlspecialchars($observations, ENT_QUOTES); ?>
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