<?php
/**
 * Created by PhpStorm.
 * User: HP_Administrator
 * Date: 12/5/14
 * Time: 1:56 AM
 */

include_once("states.php");
include_once("regions.php");

$theName="";

$regionObj = new regionsClass();
$regionObj->construct();


//Show the regions and cities for the airport codes
if($_GET[cityname]==""){
    $cityName="portland";
}else{
    $cityName=$regionObj->cleanCode($_GET[cityname]);
    echo "Regions and Airport codes for {$cityName}<br>";
}

if($_GET[regionname]==""){
    //$regionName="or";
    $cityCodes = $regionObj->findAirportCodesByCityName($cityName);
}else{
    $regionName= $regionObj->cleanCode($_GET[regionname]);
    if(isUpper($regionName{0}) && isUpper($regionName{1}) ){                 // If begins with a capitalized 2 digit code.
        $stateName=$regionObj->findStateNameByXXCode($regionName);
        echo "Regions and Airport codes for {$regionName} ($stateName)<br>"; // then treat as a US state code.

        $cityCodes = $regionObj->findAirportCodesByXXRegionName($regionName);
        $moreCodes = $regionObj->findAirportCodesByRegionName($stateName{0} . $stateName{1} . $stateName{2} . $stateName{3} . $stateName{4} . 0x00);
        $cityCodes   =array_merge($moreCodes,$cityCodes);
    }else{
        $stateName = $regionObj->findStateFullNameByPartial($regionName);
        echo "Regions and Airport codes for {$regionName} [{$stateName}?]<br>";
        $cityCodes = $regionObj->findAirportCodesByRegionName($regionName);


        if(!isUpper($regionName{1})  ) {                 // If begins with lower case and 2 or more chars
            $stateCodes = $regionObj->findStateCodesByName($regionName);
            echo "stateCodes[xx] =" . $stateCodes['XX'] . "<br>";
            echo "<pre>". print_r($stateCodes,true) . "</pre><br>";
            $moreCodes  = $regionObj->findAirportCodesByXXRegionName($stateCodes['XX']);
            $cityCodes   =array_merge($moreCodes,$cityCodes);
        }
    }


}


foreach($cityCodes as $code=>$name){
    $region   =$regionObj->findRegionByAirportCode($code);
    $cityName =$regionObj->findCityByAirportCode($code);

    echo "Region [$code] = {$cityName}, " . $region . " ";
    if($region{2}==' ' || $region{2}==''){
        echo  "(". $regionObj->findStateNameByXXCode($region) . ")";
    }
    echo "<br>";
}
?>