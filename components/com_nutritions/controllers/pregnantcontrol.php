<?php
defined('_JEXEC') or die();

class NutritionsControllerPregnantcontrol extends NutritionsController
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
        JRequest::setVar( 'view', 'pregnantcontrol' );
        parent::display();
    }

    /**
     * save a record (and redirect to main page)
     * @return void
     */
    function saveAction()
    {
        $data = JRequest::get('post');
        $evaluacionId = JRequest::getInt('id_evaluacion_gestante', 0);
        $personId = JRequest::getInt('id_entidad', 0);
        $model = $this->getModel('pregnantcontrol');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Control de Gestante Grabada!' );
        } else {
            $msg = JText::_( 'Error al grabar Control de Gestante.' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        //$link = 'index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]='.$resultStore;
        $link = "index.php?option=com_nutritions&controller=pregnantcontrol&view=pregnantcontrol&evaluacionId={$evaluacionId}&personId={$personId}&task=edit&Itemid=3&cid[]=".$resultStore;
        $this->setRedirect($link, $msg);
    }
    
    public function deleteEvaluacioncontrol() {
        $evaluacionId = JRequest::getInt('evaluacionId', 0);
        $evaluacioncontrolId = JRequest::getInt('id', 0);
        $model = $this->getModel('pregnantcontrol');
        $model->removeEvaluacioncontrol($evaluacioncontrolId);
        
        $msg = JText::_( 'Control de Evaluacion eliminada!' );
        
        $link = "index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]={$evaluacionId}";
        $this->setRedirect($link, $msg);
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancelAction()
    {
        $evaluacionId = JRequest::getInt('id_evaluacion_gestante', 0);
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( "index.php?option=com_nutritions&controller=pregnant&view=pregnant&task=edit&Itemid=3&cid[]={$evaluacionId}", $msg );
    }
        
}
?>
