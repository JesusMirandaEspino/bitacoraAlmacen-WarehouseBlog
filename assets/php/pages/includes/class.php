<?php


//TODO Class for vehicule, driver and more, this informatio will save in route db and performance db
class Performance
{
    public  $driver;
    public  $copiloto;
    public  $vehicle;
    public  $kmout;
    public  $kmin;

    public function __construct($driver, $copiloto, $vehicle, $kmout, $kmin)
    {
        $this->$driver   = $driver;
        $this->$copiloto = $copiloto;
        $this->$vehicle = $vehicle;
        $this->$kmout    = $kmout;
        $this->$kmin     = $kmin;
    }
}

//TODO class about order type, this informatio will save in order db and router db
class Order{

    var $ordertype;
    var $orderorigin;
    var $requested;
    var $assortment;

    public function __construct( $ordertype, $orderorigin, $requested, $assortment ){

    $this->$ordertype   = $ordertype;
    $this->$orderorigin = $orderorigin;
    $this->$requested   = $requested;
    $this->$assortment  = $assortment;


        }

    public function postOrder($ordertype, $orderorigin, $requested, $assortment ){

    global $app_db;

    $query = "INSERT INTO dayorder(  ordertype, orderorigin, requested, assortment );

    VALUES (' $ordertype', '$orderorigin', '$requested', '$assortment' )";

        $result = $app_db->query($query);
    }   

}

//TODO class about client, this informatio will save in routes db and client db
class Client{

    var $clientname;
    var $clientaddress;
    var $clientcity;
    var $attended;
    var $scheduleorder;
    var $incidence;
    var $observations;

    public function __construct( $clientname, $clientaddress, $clientcity, $attended, $scheduleorder, $incidence, $observations  ){

    $this->$clientname      = $clientname;
    $this->$clientaddress   = $clientaddress;
    $this->$clientcity      = $clientcity;
    $this->$attended        = $attended;
    $this->$scheduleorder   = $scheduleorder;
    $this->$incidence       = $incidence;
    $this->$observations    = $observations;

    }

}





?>