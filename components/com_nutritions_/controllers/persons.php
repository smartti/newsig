<?php
defined('_JEXEC') or die();

class NutritionsControllerPersons extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('persons');
        $view = $this->getView('persons', 'html');
        $view->setModel($model, true);
        $personas = $model->getSearchResults();
        $view->assignRef('results', $personas);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=person&view=person&task=edit&Itemid=3&cid[]=');
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
