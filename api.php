<?php
 /**
 * api.php is a sample API file to be called via AJAX to 
 * deliver the contents of 2 JSON files, one of which orders the 
 * data by Indoor/Outdoor activities, the other by location.
 *
 * The page can be called via AJAX either via GET or POST, using a variable 
 * named "cat":
 *
 * <code>
 * api.php?cat=box
 * </code>
 *
 * In the example above, the parameter cat is loaded with the string "box" 
 * which will indicate to the API to load the JSON file containing 
 * box office results.
 *
 * @package seattleactivities-web-service
 * @author Patrice Briggs
 * @version 1.01 2015/02/24
 * @link https://github.com/ 
 * @see index.htm
 * @todo none
 */

if(isset($_REQUEST['cat']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['cat'])
	{//determine contents of 'cat'
		case "indoorOutdoor":
			include('data/indoor.js'); //"indoorOutdoor" orders by Indoor/Outdoor
			break;
		default:
			include('data/downtown.js'); //default orders by Location
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
