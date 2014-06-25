<?php
defined('_JEXEC') or die();

class NutritionsControllerPregnantgraph extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit');
    }

    /**
     * display the edit form
     * @return void
     */
    function edit()
    {
        JRequest::setVar( 'view', 'pregnantgraph' );
        parent::display();
    }
    
    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function saveAction()
    {
        $data = JRequest::get('post');
        $personId = JRequest::getInt('id_entidad', 0);
        $model = $this->getModel('pregnant');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Actividad Gestante Grabada!' );
        } else {
            $msg = JText::_( 'Error al grabar actividad.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        //$link = 'index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]='.$resultStore;
        $link = "index.php?option=com_nutritions&controller=pregnant&view=pregnant&personId={$personId}&task=edit&Itemid=3&cid[]=".$resultStore;
        $this->setRedirect($link, $msg);
    }
    
    public function addPregnantControl() {
        $personId = JRequest::getVar('personId', NULL);
        $evaluacionId = JRequest::getVar('evaluacionId', NULL);
        $link = "index.php?option=com_nutritions&controller=pregnantcontrol&view=pregnantcontrol&evaluacionId={$evaluacionId}&personId={$personId}&task=edit&Itemid=3&cid[]=";
        $this->setRedirect($link);
    }  
   
    
    public function deleteEvaluacionControl() {
        $personId = JRequest::getInt('personId', 0);
        $evaluacionId = JRequest::getInt('evaluacionId', 0);
        $evaluacioncontrolId = JRequest::getInt('id', NULL);
        $model = $this->getModel('pregnantcontrol');
        $model->removeEvaluacionControl($evaluacioncontrolId);        
        $msg = JText::_( 'Control de evaluacion eliminada!' );        
        $link = "index.php?option=com_nutritions&controller=pregnant&view=pregnant&task=edit&personId={$personId}&evaluacionId={$evaluacionId}&Itemid=3&cid[]=".$evaluacionId;
        $this->setRedirect($link, $msg);
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $personId = JRequest::getInt('id_entidad', 0);
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( "index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]={$personId}", $msg );
    }
        
}
?>
