<?php

define('PROFILE_TIMEOUT', 5); // 5 mins

// Profiles class
class CProfiles {

    // constructor
    function CProfiles() {}

    // profile registration
    function registerProfile() {
        $sUsername = $GLOBALS['MySQL']->escape($_POST['username']);
        $sFirstname = $GLOBALS['MySQL']->escape($_POST['firstname']);
        $sLastname = $GLOBALS['MySQL']->escape($_POST['lastname']);
        $sEmail = $GLOBALS['MySQL']->escape($_POST['email']);
        $sPassword = $GLOBALS['MySQL']->escape($_POST['password']);

        if ($sUsername && $sEmail && $sPassword) {
            // check if already exist
            $aProfile = $GLOBALS['MySQL']->getRow("SELECT * FROM `cs_profiles` WHERE `email`='{$sEmail}'");
            if ($aProfile['id'] > 0) {
                $sErrors = '<h2>Another profile with same email already exist</h2>';
            } else {
                // generate Salt and Cached password
                $sSalt = $this->getRandCode();
                $sPass = sha1(md5($sPassword) . $sSalt);

                // add new member into database
                $sSQL = "
                    INSERT INTO `cs_profiles` SET 
                    `name` = '{$sUsername}',
                    `first_name` = '{$sFirstname}',
                    `last_name` = '{$sLastname}',
                    `email` = '{$sEmail}',
                    `password` = '{$sPass}',
                    `salt` = '{$sSalt}',
                    `status` = 'active',
                    `role` = '1',
                    `date_reg` = NOW();
                ";
                $GLOBALS['MySQL']->res($sSQL);

                // autologin
                $GLOBALS['CLogin']->performLogin($sUsername, $sPassword);
            }
        }
    }

    // get random code (for salt)
    function getRandCode($iLen = 8) {
        $sRes = '';

        $sChars = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ";
        for ($i = 0; $i < $iLen; $i++) {
            $z = rand(0, strlen($sChars) -1);
            $sRes .= $sChars[$z];
        }
        return $sRes;
    }

    // get profiles block
    function getProfilesBlock($iLim = 20, $bOnlineOnly = false) {
        $iPLimit = PROFILE_TIMEOUT;
        $sOnlineSQL = ($bOnlineOnly) ? 'AND (`date_nav` > SUBDATE(NOW(), INTERVAL ' . $iPLimit . ' MINUTE))' : '';
        $sSQL = "
            SELECT `cs_profiles`.*,
            if (`date_nav` > SUBDATE(NOW(), INTERVAL {$iPLimit} MINUTE ), 1, 0) AS `is_online`
            FROM `cs_profiles`
            WHERE `status` = 'active'
            {$sOnlineSQL}
            ORDER BY `date_reg` DESC
            LIMIT {$iLim} 
        ";
        $aProfiles = $GLOBALS['MySQL']->getAll($sSQL);

        // create list of messages
        $sCode = '';
        foreach ($aProfiles as $i => $aProfile) {
            $sName = $aProfile['name'];
            $iPid = $aProfile['id'];
            $sOnline = ($aProfile['is_online'] == 1) ? '<img alt="" src="images/online.png" class="status_img" />' : '';
            $sCode .= '<div id="'.$iPid.'" title="'.$sName.'"><a href="profile.php?id='.$iPid.'"><p>'.$sName.'</p>'.$sOnline.'</a></div>';
        }

        $sClass = ($bOnlineOnly) ? 'profiles online_profiles' : 'profiles';
        return '<div class="'.$sClass.'">' . $sCode . '</div>';
    }

    // get profile info
    function getProfileInfo($i) {
        $sSQL = "
            SELECT * 
            FROM `cs_profiles`
            WHERE `id` = '{$i}'
        ";
        $aInfos = $GLOBALS['MySQL']->getAll($sSQL);
        return $aInfos[0];
    }
}

$GLOBALS['CProfiles'] = new CProfiles();