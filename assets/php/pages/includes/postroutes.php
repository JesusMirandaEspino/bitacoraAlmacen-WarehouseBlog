<?php require('class.php');  ?>

<?php


$driver         = '';
$copiloto       = '';
$vehicle        = '';
$kmout          = 0;
$kmin           = 0;
$ordertype      = '';
$orderorigin    = '';
$requested      = 0;
$assortment     = 0;
$clientname     = '';
$clientaddress  = '';
$clientcity     = '';
$attended       = '';
$schedule       = '';
$incidence      = '';
$observations   = '';



function insert_route($dateroute, $driver, $copiloto, $vehicle, $kmout, $kmin, $ordertype, $orderorigin, $requested, $assortment, $clientname, $clientaddress, $clientcity, $attended, $scheduleorder, $incidence, $observations)
{
    global $app_db;

    $driver         = $app_db->real_escape_string($driver);
    $copiloto       = $app_db->real_escape_string($copiloto);
    $vehicle        = $app_db->real_escape_string($vehicle);
    $kmout          = $app_db($kmout);
    $kmin           = $app_db($kmin);
    $ordertype      = $app_db->real_escape_string($ordertype);
    $orderorigin    = $app_db->real_escape_string($orderorigin);
    $requested      = $app_db($requested);
    $assortment     = $app_db($assortment);
    $clientname     = $app_db->real_escape_string($clientname);
    $clientaddress  = $app_db->real_escape_string($clientaddress);
    $clientcity     = $app_db->real_escape_string($clientcity);
    $attended       = $app_db->real_escape_string($attended);
    $scheduleorder  = $app_db->real_escape_string($scheduleorder);
    $incidence      = $app_db->real_escape_string($incidence);
    $observations   = $app_db->real_escape_string($observations);



    $query = "INSERT INTO dayroute(  driver, copiloto, vehicle, kmout, kmin, ordertype, orderorigin, requested, assortment, clientname, clientaddress, clientcity, attended,  scheduleorder,  incidence,  observations, dateroute);

    VALUES ( $driver', '$copiloto', '$vehicle', '$kmout', '$kmin', '$ordertype', '$orderorigin', '$requested', '$assortment', '$clientname', '$clientaddress', '$clientcity', '$attended', '$scheduleorder', '$incidence', '$observations', '$dateroute' )";

    $result = $app_db->query($query);
}


/*TODO VALUES

date            DATE            NOT NULL,
driver          VARCHAR(255)    NOT NULl,
copilot         VARCHAR(255)    NOT NULL ,
vehicle         VARCHAR(255)    NOT NULL ,
kmout           INT             NOT NULL ,
kmin            INT             NOT NULL ,
ordertype       VARCHAR(255)    NOT NULL ,
orderorigin     VARCHAR(255)    NOT NULL ,
requested       INT             NOT NULL ,
assortment      INT             NOT NULL ,
clientname      VARCHAR(255)    NOT NULL ,
clientaddress   VARCHAR(255)    NOT NULL ,
clientcity      VARCHAR(255)    NOT NULL ,
attended        VARCHAR(255)    NOT NULL ,
schedule        VARCHAR(255)    NOT NULL ,
incidence       VARCHAR(255)    NOT NULL ,
observations    TEXT            NOT NULL


$date,
$driver,
$copilot,
$vehicle,
$kmout,
$kmin,
$ordertype,
$orderorigin,
$requested,
$assortment,
$clientname,
$clientaddress,
$clientcity,
$attended,
$schedule,
$incidence,
$observations  


*/


?>