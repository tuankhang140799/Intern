<?php

define("WEBSITE_TITLE", 'MY SHOP');

//database name
define('DB_NAME', "bookstore_db");
define('DB_USER', "root");
define('DB_PASS', "");
define('DB_TYPE', "mysql");
define('DB_HOST', "localhost"); 

define('THEME','bookstore/');

define('DEBUG', true);

if(DEBUG){

	ini_set('display_error', 1);
}else{
	ini_set('display_error', 0);
}
