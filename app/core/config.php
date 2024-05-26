<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'epicurean');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'hDR9DLl1');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/Epicurean Affair Official/public');


}else
{
	/** database config **/
    define('DBNAME', 'epicurean');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', 'hDR9DLl1');
    define('DBDRIVER', '');

    define('ROOT', 'https://epicurean-affair.000webhostapp.com');


}

define('APP_NAME', "My Webiste");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);
