<?php
defined('_JEXEC') or die();

class NutritionsControllerActivities extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('activities');
        $view = $this->getView('activities', 'html');
        $view->setModel($model, true);
        $personas = $model->getSearchResults();
        $view->assignRef('results', $personas);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=activity&view=activity&task=edit&Itemid=3&cid[]=');
    }
    
    public function addChildActivity() {
        $personId = JRequest::getInt('personId', 0);
        $this->setRedirect("index.php?option=com_nutritions&controller=child&view=child&personId={$personId}&task=edit&Itemid=3&cid[]=");
    }
    
    public function addPregnantActivity() {
        $personId = JRequest::getInt('personId', 0);
        $this->setRedirect("index.php?option=com_nutritions&controller=pregnant&view=pregnant&personId={$personId}&task=edit&Itemid=3&cid[]=");
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancel()
    {
        $msg = JText::_( 'Operacion cancelada' );
        $this->setRedirect( 'index.php?option=com_nutritions&controller=person&view=persons&Itemid=3', $msg );
    }
        
}
?>
