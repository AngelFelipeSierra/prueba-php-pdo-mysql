<?php 
    include_once '../../app.php';
    use Models\Pais;  
    $objCountry =new Pais();
    echo json_encode($objCountry->loadAllData()); 
?>