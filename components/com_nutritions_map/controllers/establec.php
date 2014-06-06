<?php
defined('_JEXEC') or die();

class NutritionsControllerEstablec extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }

    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'establec' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function addInfGeneral() {
        $infgeneralId = JRequest::getVar('infgeneralId', NULL);
        $link = "index.php?option=com_nutritions&controller=infgeneral&view=infgeneral&task=edit&infgeneralId={$infgeneralId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }

    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('establec');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Establecimiento Grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar establecimiento.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=establec&view=establec&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_nutritions', $msg );
    }
    
    /**
     * Add new member to the family
     * @familyId Integer, family code
     */
       
    public function getEstablec() {
        $model = $this->getModel('establec');
        $limit = 20;
        $establecName = JRequest::getVar('establecName', NULL);
        $user =& JFactory::getUser();        
        $usuario= $user->username;
        $results = $model->getEstablecimientos($establecName, $limit, $usuario);
        header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header ("Pragma: no-cache"); // HTTP/1.0
        header("Content-Type: application/json");
        echo "{\"results\": [";
        $arr = array();
        for ($i = 0; $i < count($results); $i++) {
            $arr[] = "{\"id\": \"".$results[$i]->cod_2000."\", \"value\": \"".addslashes($results[$i]->establec_name)."\", \"info\": \"\"}";
        }
        echo implode(", ", $arr);
        echo "]}";
        die();
    }

        
}
?>
