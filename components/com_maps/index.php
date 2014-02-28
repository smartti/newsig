<?php

// set error reporting level
if (version_compare(phpversion(), '5.3.0', '>=') == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);

require_once('classes/CMySQL.php'); // service class to work with database
require_once('classes/CLogin.php'); // service class to work with login processing
require_once('classes/CProfiles.php'); // service class to work with profiles

// join processing
if (! isset($_SESSION['member_id']) && $_POST['Join'] == 'Join') {
    $GLOBALS['CProfiles']->registerProfile();
}

// login system init and generation code
$sLoginForm = $GLOBALS['CLogin']->getLoginBox();

if ($_SESSION['member_id'] && $_SESSION['member_status'] == 'active') {
    if ($_GET['action'] == 'update_last_nav') { // update last navigate time
        $iPid = (int)$_SESSION['member_id'];
        if ($iPid) {
            $GLOBALS['MySQL']->res("UPDATE `cs_profiles` SET `date_nav` = NOW() WHERE `id` = '{$iPid}'");
        }
        exit;
    }
}

// get profiles lists
$sProfiles = $GLOBALS['CProfiles']->getProfilesBlock();
$sOnlineMembers = $GLOBALS['CProfiles']->getProfilesBlock(10, true);

// prepare set of markers for global map
$sMarkers = '';
$aRecentMarkers = $GLOBALS['MySQL']->getAll("SELECT * FROM `latlng268` ORDER BY `id` DESC LIMIT 20");
foreach ($aRecentMarkers as $i => $sMInfo) {
    if ($sMInfo['lat'] != 0 && $sMInfo['lng'] != 0) {
        $sUnitLocation = str_replace('"', '', $sMInfo['name']);

        $sMarkers .= <<<EOF
aMarkerInfos[{$sMInfo['id']}] = new google.maps.InfoWindow({content: "{$sUnitLocation}"});
aMarkers[{$sMInfo['id']}] = new google.maps.Marker({position: new google.maps.LatLng({$sMInfo['lat']}, {$sMInfo['lng']}), map: map, title: "{$sUnitLocation}"});

google.maps.event.addListener(aMarkers[{$sMInfo['id']}], 'click', function() {
    aMarkerInfos[{$sMInfo['id']}].open(map,aMarkers[{$sMInfo['id']}]);
});

EOF;
    }
}

// draw common page
$aKeys = array(
    '{form}' => $sLoginForm,
    '{profiles}' => $sProfiles,
    '{online_members}' => $sOnlineMembers,
    '{add_markers}' => $sMarkers
);
echo strtr(file_get_contents('templates/main_page.html'), $aKeys);