<?php
require_once("Model\city\CityDao.php");

class ControllerCity{
    function getcity(){
        $CityDao = new CityDao();
        $citys = $CityDao->get_cities();

      
        include "View\home.php";
    }
}

?>