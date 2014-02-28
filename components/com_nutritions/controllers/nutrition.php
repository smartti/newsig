<?php
defined('_JEXEC') or die();

class NutritionsControllerNutrition extends NutritionsController
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
        JRequest::setVar( 'view', 'nutrition' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }

    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('nutrition');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Familia grabada!' );
        } else {
            $msg = JText::_( 'Error al grabar familia.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=nutrition&view=nutrition&task=edit&Itemid=3&cid[]='.$resultStore;
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
    public function addMember() {
        $familyId = JRequest::getVar('familyId', NULL);
        $link = "index.php?option=com_nutritions&controller=person&view=person&task=edit&familyId={$familyId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }  
   
    
    public function deleteMember() {
        $familyId = JRequest::getInt('familyId', NULL);
        $memberId = JRequest::getInt('id', NULL);
        $model = $this->getModel('person');
        $model->removeMember($memberId);
        $msg = 'Integrante Removido!!!';
        $link = 'index.php?option=com_nutritions&controller=nutrition&view=nutrition&task=edit&Itemid=3&cid[]='.$familyId;
        $this->setRedirect($link, $msg);
    }
    
     public function getUbigeo() {
        $model = $this->getModel('nutrition');
        $limit = 10;
        $ubigeoName = JRequest::getVar('ubigeoName', NULL);
        $results = $model->getUbigeos($ubigeoName, $limit);
        header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header ("Pragma: no-cache"); // HTTP/1.0
        header("Content-Type: application/json");
        echo "{\"results\": [";
        $arr = array();
        for ($i = 0; $i < count($results); $i++) {
            $arr[] = "{\"id\": \"".$results[$i]->id_ubigeo."\", \"value\": \"".$results[$i]->ubigeo_name."\", \"info\": \"\"}";
        }
        echo implode(", ", $arr);
        echo "]}";
        die();
    }
        
}
?>
