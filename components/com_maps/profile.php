<?php

// set error reporting level
if (version_compare(phpversion(), '5.3.0', '>=') == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);

require_once('classes/CMySQL.php'); // service class to work with database
require_once('classes/CLogin.php'); // service class to work with login processing
require_once('classes/CProfiles.php'); // service class to work with profiles

// get basic info about profile
$iPid = (int)$_GET['id'];
$aInfo = $GLOBALS['CProfiles']->getProfileInfo($iPid);
$sName = $aInfo['name'];
$sFName = $aInfo['first_name'];
$sLName = $aInfo['last_name'];
$sAbout = $aInfo['about'];
$sDate = $aInfo['date_reg'];

// get map block
$sMap = '';
$aPosInfo = $GLOBALS['MySQL']->getRow("SELECT * FROM `latlng268` WHERE `profile` = '{$iPid}'");
if ($aPosInfo['id']) {
    $aPosKeys = array(
        '{lat}' => $aPosInfo['lat'],
        '{lng}' => $aPosInfo['lng'],
        '{name}' => str_replace('"', '', $sName)
    );
    $sMap = strtr(file_get_contents('templates/profile_map.html'), $aPosKeys);
}

// get profiles listings
$sProfiles = $GLOBALS['CProfiles']->getProfilesBlock();
$sOnlineMembers = $GLOBALS['CProfiles']->getProfilesBlock(10, true);

// draw common page
$aKeys = array(
    '{id}' => $iPid,
    '{name}' => $sName,
    '{fname}' => $sFName,
    '{lname}' => $sLName,
    '{about}' => $sAbout,
    '{datereg}' => $sDate,
    '{profiles}' => $sProfiles,
    '{online_members}' => $sOnlineMembers,
    '{map}' => $sMap
);
echo strtr(file_get_contents('templates/profile_page.html'), $aKeys);