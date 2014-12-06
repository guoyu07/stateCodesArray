State Codes By Array
====================

PHP classes to convert ascii US state codes in a string into their full text names
===============

=== USAGE
| <b>Function</b>     | <b>Descrioption</b> |
|:-------------------------------------------------------|:---------------------------------------------------------------------|
|$statesObj = new statesClass(); | |
|public function  findStateNameByCode($strCode);| returns full text of state.|
|:-------------------------------------------------------|:---------------------------------------------------------------------|
|public function  findStateNameByXXCode($strCode);|returns the full text from a 2 letter state code.|
|:-------------------------------------------------------|:---------------------------------------------------------------------|
|public function  cleanCode($strCode) |strips double spaces and []()tabs and linefeeds |
| |and sanitizes against $_GET attacks.|
|:-------------------------------------------------------|:---------------------------------------------------------------------|
|public function findStateCodesByName($stateName)|input whole name or partial name|
| |returns an array with the XX state codes that match|
| |$result['xx'] will contain the best guess 2 digit code|
| |$result['fullname'] will contain the best guess full name|
| |returns blank results in [xx] if no match|
|:-------------------------------------------------------|:---------------------------------------------------------------------|
|public function findStateCodeByName($stateName)|whole name or part thereof|
| |Returns the XX 2 digit state code if there is a match|
| |Else returns empty string|
|:-------------------------------------------------------|:---------------------------------------------------------------------|
|public function findStateFullNameByPartial($stateName)|whole name or part thereof|
| |Returns first guess at the full name of a state from partial input|
|:-------------------------------------------------------|:---------------------------------------------------------------------|

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
  $regionsObj->findRegionsByCityName($cityName);           //returns an array of airportcodes that match the city name
  $regionsObj->findAirportCodesByXXRegionName($regionName) //Returns 3 digit codes but only where named by a 2 digit code (Major state US airports)

OTHER
=========================
function testName($item)      //used to return modified and filtered arrays
function isUpper($char)       //Tests chars for upper/lower case returns true if char is UPPER
