<?php
    use Models\Pais;
    $objCountry = new Country();
    $_DATA=json_encode($objCountry->loadAllData());
?>