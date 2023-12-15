<?php
$host =  $_SERVER['SERVER_ADDR'];
// var_dump($host);
// die;
// define("BASEURL", "http://localhost/phpmvc/public/");
// define("BASEURL", "http://192.168.0.168/phpmvc/public/");
define("BASEURL", "http://" . $host . ":82/");
// define("BASEURL", "http://192.168.1.5:82/");
define("DB_HOST", "172.17.1.107");
// define("DB_USER", "rizki");
// define("DB_PASS", "R!zk1723");
// define("DB_NAME", "websms360");
define("DB_USER", "rizki");
define("DB_PASS", "cliopash4");
define("DB_NAME", "config");
