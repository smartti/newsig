<?php
defined('_JEXEC') or die();

class NutritionsControllerPregnant extends NutritionsController
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
        JRequest::setVar( 'view', 'pregnant' );
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
    
    public function deleteEvaluacion() {
        $personId = JRequest::getInt('personId', 0);
        $evaluacionId = JRequest::getInt('id', 0);
        $model = $this->getModel('pregnant');
        $model->removeEvaluacion($evaluacionId);
        
        $msg = JText::_( 'Evaluacion eliminada!' );
        
        $link = "index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]={$personId}";
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
