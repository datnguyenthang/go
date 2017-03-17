<?php
/* Last updated with phpFlickr 1.3.2
 *
 * This example file shows you how to call the 100 most recent public
 * photos.  It parses through them and prints out a link to each of them
 * along with the owner's name.
 *
 * Most of the processing time in this file comes from the 100 calls to
 * flickr.people.getInfo.  Enabling caching will help a whole lot with
 * this as there are many people who post multiple photos at once.
 *
 * Obviously, you'll want to replace the "<api key>" with one provided 
 * by Flickr: http://www.flickr.com/services/api/key.gne
 */

require_once("phpFlickr.php");

function geturlphoto($photoid, $size="Original") {

}

function upload_flickr($path, $namefile) {
    //UPLOAD TO FLICK
    $f = new phpFlickr('36e4647e1a37f3f883c5a83011002893', '52c8ae427ffe86c1',true);
    $token = '72157677408229584-f33aeb0b301ad5c7';
    $f->setToken($token);
    $f->auth("write");
    
    $arr_return = [];
    //UPLOAD
    //$photoid = $f->sync_upload($path, $namefile, null, null, null, 1, 1, 1);
    $arr_return['photoid'] = $f->sync_upload($path, $namefile);

    //GET DIRECT URL PHOTO
    $photosize = $f->photos_getSizes($arr_return['photoid']);
    $key = array_search('Original', array_column($photosize, 'label'));
    $arr_return['img'] = $photosize[$key]['source'];
    
    return $arr_return;
}

function replace_flickr($photoid, $path, $namefile) {
    //UPLOAD TO FLICK
    $f = new phpFlickr('36e4647e1a37f3f883c5a83011002893', '52c8ae427ffe86c1', true);
    $token = '72157679689707870-8a7f15a64014c13f';
    $f->setToken($token);
    $f->auth("delete");
    if ($f->photos_delete($photoid)) {
        unset($f);
        return upload_flickr($path, $namefile);
    } return false;
}


function delete_flickr($photoid) {
    //UPLOAD TO FLICK
    $idFlickr = '148101851@N02';
    $f = new phpFlickr('36e4647e1a37f3f883c5a83011002893', '52c8ae427ffe86c1');
    $token = '72157677408229584-f33aeb0b301ad5c7';
    $f->setToken($token);
    $f->auth("delete");
    return $f->photos_delete($photoid);
}