<?php
defined('_JEXEC') or die();

class NutritionsControllerPerson extends NutritionsController
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
        JRequest::setVar( 'view', 'person' );
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
        $model = $this->getModel('person');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Persona grabada!' );
        } else {
            $msg = JText::_( 'Error al grabar persona.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
    }
    
    public function getEncuestador() {
        $model = $this->getModel('person');
        $limit = 30;
        $encuestadorName = JRequest::getVar('encuestadorName', NULL);
        $results = $model->getEncuestadores($encuestadorName, $limit);
        header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
	header ("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header ("Pragma: no-cache"); // HTTP/1.0
        header("Content-Type: application/json");
        echo "{\"results\": [";
        $arr = array();
        for ($i = 0; $i < count($results); $i++) {
            $arr[] = "{\"id\": \"".$results[$i]->tx_nro_documento."\", \"value\": \"".$results[$i]->encuestador_name."\", \"info\": \"\"}";
        }
        echo implode(", ", $arr);
        echo "]}";
        die();
    }
    
    
    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_nutritions&view=persons&Itemid=3', $msg );
    }
    
    public function addDiscapacidad() {
        $personId = JRequest::getVar('personId', NULL);
        $link = "index.php?option=com_nutritions&controller=discapacidad&view=discapacidad&task=edit&personId={$personId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }
     
    public function deleteDiscapacidad() {
        $personId = JRequest::getInt('personId', NULL);
        $discapacidadId = JRequest::getInt('id', NULL);
        $model = $this->getModel('discapacidad');
        $model->removeDiscapacidad($discapacidadId);
        $msg = 'Discapacidad Removido!!!';
        $link = 'index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]='.$personId;
        $this->setRedirect($link, $msg);
    }
    
    public function addRiesgo() {
        $personId = JRequest::getVar('personId', NULL);
        $link = "index.php?option=com_nutritions&controller=riesgo&view=riesgo&task=edit&personId={$personId}&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }
     
    public function deleteRiesgo() {
        $personId = JRequest::getInt('personId', NULL);
        $riesgoId = JRequest::getInt('id', NULL);
        $model = $this->getModel('riesgo');
        $model->removeRiesgo($riesgoId);
        $msg = 'Riesgo Removido!!!';
        $link = 'index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]='.$personId;
        $this->setRedirect($link, $msg);
    }
        
}
?>
