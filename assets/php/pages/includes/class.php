<?php


//TODO Class for vehicule, driver and more, this informatio will save in route db and performance db
class Performance
{
    var $driver;
    var $copiloto;
    var $vehicule;
    var $kmout;
    var $kmin;

    public function __construct($driver, $copiloto, $vehicule, $kmout, $kmin)
    {
        $this->$driver   = $driver;
        $this->$copiloto = $copiloto;
        $this->$vehicule = $vehicule;
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

}

//TODO class about client, this informatio will save in routes db and client db
class Client{

    var $clientname;
    var $clientaddress;
    var $clientcity;
    var $attended;
    var $schedule;
    var $incidence;
    var $observations;

    public function __construct( $clientname, $clientaddress, $clientcity, $attended, $schedule, $incidence, $observations  ){

    $this->$clientname      = $clientname;
    $this->$clientaddress   = $clientaddress;
    $this->$clientcity      = $clientcity;
    $this->$attended        = $attended;
    $this->$schedule        = $schedule;
    $this->$incidence       = $incidence;
    $this->$observations    = $observations;

    }

}





?>