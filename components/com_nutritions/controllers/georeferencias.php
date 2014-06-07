<?php
defined('_JEXEC') or die();

class NutritionsControllerGeoreferencias extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks
        $this->registerTask( 'add' , 'edit' );
    }
    
    public function searchAction() {
        $model = $this->getModel('georeferencias');
        $view = $this->getView('georeferencias', 'html');
        $view->setModel($model, true);
        $familias = $model->getSearchResults();
        $view->assignRef('results', $familias);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=nutrition&view=georeferencias&task=edit&Itemid=3&cid[]=');
    }

    /**
     * cancel editing a record
     * @return void
     */
    function cancel()
    {
        $msg = JText::_( 'Operation Cancelled' );
        $this->setRedirect( 'index.php?option=com_projects&controller=project&view=projects', $msg );
    }
    
        
}
?>
