<?php
require_once("Model\Bus\BusDao.php");

class ControllerBus{
    function getbus(){
        $CityDao = new CityDao();
        $Bus = $CityDao->get_bus();

      
        include "View\AddBus.php";
    }
}

?>