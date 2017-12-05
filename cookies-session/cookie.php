<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


#first of all create a cookie
#use a variable for the time of a cookie, it is easier on the long run

#time done in seconds, 
$cookieTimer = time()+86400;

#now create the cookie using 'setcookie'
setcookie("ourCookie", "Jasmin", $cookieTimer);


#real time scenario, select a langauge for a website
setcookie("language", "en-us", $cookieTimer);

echo $_COOKIE["ourCookie"];


#you can also create multiple cookies, and use them whenever you like

setcookie("hisCookie", "Anders", $cookieTimer);

echo $_COOKIE["hisCookie"];


#check if cookie is set by using "if-isset"

if (isset($_COOKIE['ourCookie']))
	echo "Cookie is set";
else
	echo "Cookie NOT set";

#unset a cookie bye
#add variable that says the time is 0
/*
$timeOut = time()-86400;


setcookie("ourCookie","",$timeOut);

*/


?>


