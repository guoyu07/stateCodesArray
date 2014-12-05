<?php
/**
 * Created by PhpStorm.
 * User: HP_Administrator
 * Date: 12/5/14
 * Time: 1:56 AM
 */

include_once("states.php");
include_once("regions.php");

$theCityName="";

$regionObj = new regionsClass();
$regionObj->construct();


//Show the regions and cities for the airport codes
if($_GET[cityname]==""){
    $cityName="portland";
}else{
    $cityName=$regionObj->cleanCode($_GET[cityname]);
}

$cityCodes = $regionObj->findAirportCodesByCityName($cityName);

echo "Regions and Airport codes for {$cityName}<br>";

foreach($cityCodes as $code=>$name){
    $region=$regionObj->findRegionByAirportCode($code);
    echo "Region [$code] = {$cityName}, " . $region . " ";
    if($region{2}==' ' || $region{2}==''){
        echo  "(". $regionObj->findStateNameByXXCode($region) . ")";
    }
    echo "<br>";
}
?>