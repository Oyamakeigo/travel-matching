<?php
require_once "../classes/Country.php";

$country = new Country;

if($_GET['action']=='add'){
    $countryname=$_POST['countryname'];
    $countrydescription=$_POST['countrydescription'];
    $result=$country->save($countryname,$countrydescription);

    if($result){
        $country->redirect_js('countries.php');
    }
}elseif($_GET['action']=='update'){
    $country_id=$_POST['country_id'];
    $countryname=$_POST['countryname'];
    $countrydescription=$_POST['countrydescription'];
    $result=$country->update($country_id,$countryname,$countrydescription);

    if($result){
        $country->redirect_js('countries.php');
    }
}elseif($_GET['action']=='delete'){
    
    $country_id=$_POST['country_id'];
    $result=$country->delete($country_id);

    if($result){
        $country->redirect_js('countries.php');
    }
}


?>