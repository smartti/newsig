<?php
/**
 * Description of perms
 *
 * @author JuniorSRR
 */
class perms {
    //put your code here
    function checkPerms($projectId, $function) {
        $jUser = JFactory::getUser();
        $userId = $jUser->get('id');
        $result = new stdClass();
        if($userId > 0){
            $jDB = & JFactory::getDBO();
            $query = "SELECT role_id FROM #__projects_user_roles"
                   . " WHERE project_id = $projectId AND user_id = $userId";
            $jDB->setQuery($query);
            $roleId = $jDB->loadResult();
            if($roleId){
                $query2 = "SELECT function_perms FROM #__projects_functions"
                        . " WHERE function_name = '$function'";
                $jDB->setQuery($query2);
                $perms = $jDB->loadResult();
                $arrayPerms = explode(',', $perms);
                if(in_array($roleId, $arrayPerms)){
                    $result->band = true;
                }else{
                    $result->band = false;
                    $result->message = "ALERTNOTAUTH";
                }
            }else{
                $result->band = false;
                $result->message = "NOTPROJECTFORYOU";
            }
        }else{
            $result->band = false;
            $result->message = "ALERTNOTAUTH";
        }
        return $result;
    }

    function checkCreationPerms() {
        $jUser = JFactory::getUser();
        $userGid = $jUser->get('id');
        $result = new stdClass();
        if($userGid > 0){
            $result->band = true;
        }else{
            $result->band = false;
            $result->message = "ALERTNOTAUTH";
        }
        return $result;
    }
}
?>
