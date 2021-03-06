<?php require('class.php');  ?>

<?php




function insert_post(  $date, $driver, $copiloto, $vehicle, $kmout, $kmin, $ordertype, $orderorigin, $requested, $assortment, $clientname, $clientaddress, $clientcity, $attended, $schedule, $incidence, $observations )
{
    global $app_db;

$date           = $app_db->real_escape_string($date );  
$driver         = $app_db->real_escape_string($driver );  
$copiloto       = $app_db->real_escape_string($copiloto );  
$vehicle        = $app_db->real_escape_string($vehicle );  
$kmout          = $app_db->real_escape_string($kmout );  
$kmin           = $app_db->real_escape_string($kmin  );  
$ordertype      = $app_db->real_escape_string($ordertype  );  
$orderorigin    = $app_db->real_escape_string($orderorigin  );      
$requested      = $app_db->real_escape_string($requested );  
$assortment     = $app_db->real_escape_string($assortment );      
$clientname     = $app_db->real_escape_string($clientname );      
$clientaddress  = $app_db->real_escape_string($clientaddress);      
$clientcity     = $app_db->real_escape_string($clientcity );      
$attended       = $app_db->real_escape_string($attended);      
$schedule       = $app_db->real_escape_string($schedule);  
$incidence      = $app_db->real_escape_string($incidence);  
$observations   = $app_db->real_escape_string($observations);      



    //$query = "INSERT INTO routeday( title, excerpt, content, published_on)

    // VALUES ( '$title', '$excerpt', '$content', '$published_on' )";

    // $result = $app_db->query( $query );


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