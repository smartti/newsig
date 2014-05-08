<?php
defined('_JEXEC') or die();

class NutritionsControllerInftbcs extends NutritionsController
{

    function __construct()
    {
        parent::__construct();
        // Register Extra tasks 
        
        $this->registerTask( 'add' , 'edit' );  
    }



    public function searchAction() {
        $model = $this->getModel('inftbcs');
        $view = $this->getView('inftbcs', 'html');
        $view->setModel($model, true);
        $inftbcs = $model->getSearchResults();
        $view->assignRef('results', $inftbcs);
        $view->display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=inftbc&view=inftbc&task=edit&Itemid=3&cid[]=');
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
