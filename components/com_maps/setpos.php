<?php

// set error reporting level
if (version_compare(phpversion(), '5.3.0', '>=') == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);

require_once('classes/CMySQL.php'); // service class to work with database
require_once('classes/CLogin.php'); // service class to work with login processing
require_once('classes/CProfiles.php'); // service class to work with profiles

$iPid = (int)$_SESSION['member_id'];

// save coordinates
if ($_POST && $_POST['Confirm']) {
    $dLat = (double)$_POST['lat'];
    $dLng = (double)$_POST['lng'];

    if ($iPid && $dLat && $dLng) {

        $aInfo = $GLOBALS['MySQL']->getRow("SELECT * FROM `latlng268` WHERE `profile` = '{$iPid}'");
        if ($aInfo['id']) {
            $GLOBALS['MySQL']->res("UPDATE `latlng268` SET `lat` = '{$dLat}', `lng` = '{$dLng}' WHERE `profile` = '{$iPid}'");
        } else {
            $aPInfo = $GLOBALS['CProfiles']->getProfileInfo($iPid);
            $sName = $GLOBALS['MySQL']->escape($aPInfo['name']);
            $GLOBALS['MySQL']->res("INSERT INTO `latlng268` SET `lat` = '{$dLat}', `lng` = '{$dLng}', `profile` = '{$iPid}', `name` = '{$sName}'");
        }
        header('Location: profile.php?id=' . $iPid);
    }
}

// find profile coordinates
$aPosInfo = $GLOBALS['MySQL']->getRow("SELECT * FROM `latlng268` WHERE `profile` = '{$iPid}'");
$dLat = 40;
$dLng = -75;
if ($aPosInfo['id']) {
    $dLat = $aPosInfo['lat'];
    $dLng = $aPosInfo['lng'];
}

// draw page
$aKeys = array(
    '{lat}' => $dLat,
    '{lng}' => $dLng
);
echo strtr(file_get_contents('templates/setpos_page.html'), $aKeys);
