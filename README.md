State Codes By Array
====================

PHP classes to convert ascii US state codes in a string into their full text names
===============

=== USAGE
  $statesObj = new statesClass();

  $statesObj->findStateNameByCode($strCode);   //returns full text of state.
  
  $statesObj->findStateNameByXXCode($strCode); //returns the full text from a 2 letter state code.

  $strCode = $statesObj->cleanCode($strCode){  //strips double spaces and []()tabs and linefeeds


Regions by Airport Code
=======================

This version uses a private array inside the class, I built this to test before I made a mysql solution.

  Regions Class extends statesClass with citys and regions of airports all over the world, and can find the 3 letter airport codes,
  or use 3 letter airport codes to gets names of citys and regions.

  $regionsObj = new regionsClass();

  $regionsObj->findCityByAirportCode($strCode);            //takes 3 digit airport codes, returns city name
  $regionsObj->findRegionByAirportCode($strCode);          //takes 3 digit airport codes, returns region name
  $regionsObj->findRegionByCityName($cityName);            //takes part of a city name to return the first match as region name.
  $regionsObj->findAirportCodesByRegionName($regionName);  //takes part of a region name and returns first match airport Code.
  $regionsObj->findAirportCodesByCityName($cityName);      //takes part of a city name and returns first match airport Code.