<?php require('class.php');  ?>

<?php




function insert_post(  $date, $postPerformance, $postOrder, $postClient )
{
    global $app_db;

$date           = $app_db->real_escape_string( $date );  
$postPerformance->$driver         = $app_db->real_escape_string( $driver );  
$postPerformance->$copiloto        = $app_db->real_escape_string( $copilot );  
$postPerformance->$vehicle        = $app_db->real_escape_string( $vehicle );  
$postPerformance->$kmout          = $app_db->real_escape_string( $kmout );  
$postPerformance->$kmin           = $app_db->real_escape_string( $kmin  );  
$postOrder->$ordertype      = $app_db->real_escape_string( $ordertype  );  
$postOrder->$orderorigin    = $app_db->real_escape_string( $orderorigin  );      
$postOrder->$requested      = $app_db->real_escape_string( $requested );  
$postOrder->$assortment     = $app_db->real_escape_string( $assortment );      
$postClient->$clientname     = $app_db->real_escape_string( $clientname );      
$postClient->$clientaddress  = $app_db->real_escape_string( $clientaddress);      
$postClient->$clientcity     = $app_db->real_escape_string( $clientcity );      
$postClient->$attended       = $app_db->real_escape_string( $attended);      
$postClient->$schedule       = $app_db->real_escape_string( $schedule);  
$postClient->$incidence      = $app_db->real_escape_string( $incidence);  
$postClient->$observations   = $app_db->real_escape_string( $observations);      



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