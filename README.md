(PHP) US 2 Digit State Code and IATA 3-letter codes Region and City Management using Arrays
====================
PHP classes to convert ascii US state codes and international regions in a string to/from their full text names

USAGE
--------------------
```
$statesObj = new statesClass();         //assign a new state object
findStateNameByCode($strCode);          //returns full text of state.
findStateNameByXXCode($strCode);        //returns the full text from a 2 letter state code.
cleanCode($strCode);                    //strips double spaces and []()tabs and linefeeds 
                                        //and sanitizes against $_GET / injection attacks.
findStateCodesByName($stateName);       //input whole name or partial name
                                        //returns an array with the XX state codes that match
                                        //$result['xx'] will contain the best guess 2 digit code
                                        //$result['fullname'] will contain the best guess full name
                                        //returns blank results in [xx] if no match
findStateCodeByName($stateName)         //whole name or part thereof
                                        //Returns the XX 2 digit state code if there is a match|
                                        //Else returns empty string|
findStateFullNameByPartial($stateName); //whole name or part thereof
                                        //Returns first guess at  full name of state from partial input
```
Regions by Airport Code Extends the State Codes Class
-------------------------

This version uses a private array inside the class, I built this to test before I made a mysql solution.

  Regions Class extends statesClass with citys and regions of airports all over the world, and can find the 3 letter airport codes,
  or use 3 letter airport codes to gets names of citys and regions.

```
$regionsObj = new regionsClass();
$regionsObj->construct();  //you need to call the constructor to get it going.

findCityByAirportCode($strCode);            //takes IATA 3-letter codes, returns city name
findRegionByAirportCode($strCode);          //takes IATA 3-letter codes, returns region name
findRegionByCityName($cityName);            //takes full or partial city name
                                            //Returns first match as region name
findAirportCodesByRegionName($regionName);  //takes full or partial of a region name
                                            //returns array of matching airport Codes.
findAirportCodesByCityName($cityName);      //takes part of a city name
                                            //returns array of matching airport Codes.
findAirportCodesByXXRegionName($regionName) //Returns array of IATA 3-letter codes
                                            //but only where named by a 2 digit code
                                            //(Major State US airports)
```
OTHER
---------------------------
```
function testName($item)      //used to return modified and filtered arrays
function isUpper($char)       //Tests chars for upper/lower case returns true if char is UPPER
```
