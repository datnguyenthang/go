<?php
    /* Last updated with phpFlickr 1.4
     *
     * If you need your app to always login with the same user (to see your private
     * photos or photosets, for example), you can use this file to login and get a
     * token assigned so that you can hard code the token to be used.  To use this
     * use the phpFlickr::setToken() function whenever you create an instance of 
     * the class.
     */
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once('../vendor/phpflickr/phpFlickr.php');
    $f = new phpFlickr("36e4647e1a37f3f883c5a83011002893", "52c8ae427ffe86c1", true);
    $perms = "write";
    /*
    //change this to the permissions you will need
    //$f->auth("read");
    $f->auth("write");
    
    echo "Copy this token into your code: " . $_SESSION['phpFlickr_auth_token'];
    */
    //Redirect to flickr for authorization
     if(!$_GET['frob']){
         $f->auth($perms);
     }else {
         //If authorized, print the token
         $tokenArgs = $f->auth_getToken($_GET['frob']);
         echo "<pre>"; var_dump($tokenArgs); echo "</pre>";
     }
// TEST
    //$token = '72157677408229584-f33aeb0b301ad5c7';
    //$f->setToken($token);
    //$f->auth("write");
    //$photoid = $f->sync_upload('/var/www/goolutu.com/public_html/webroot/uploads/shops/37/assets12.png' ,'test');
    //var_dump($f->replace('/var/www/goolutu.com/public_html/webroot/uploads/shops/22/assets2.png', 32599900073, 0));
?>