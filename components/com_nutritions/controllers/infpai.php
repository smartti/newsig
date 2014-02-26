<?php
defined('_JEXEC') or die();

class NutritionsControllerInfpai extends NutritionsController
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
        JRequest::setVar( 'view', 'infpai' );
        //JRequest::setVar( 'layout', 'form'  );
        parent::display();
    }
    
    public function newAction() {
        $this->setRedirect('index.php?option=com_nutritions&controller=infpai&view=infpai&task=edit&Itemid=3&cid[]=');
                           
    }
    

    
    function saveAction()
    {
        $data = JRequest::get('post');
        $model = $this->getModel('infpai');
        $resultStore = $model->store($data);
        if ($resultStore) {
            $msg = JText::_( 'Informe General grabado!' );
        } else {
            $msg = JText::_( 'Error al grabar informe general' );
            $msg .= " " . $model->getError();
        }
        // Check the table in so it can be edited.... we are done with it anyway
        $link = 'index.php?option=com_nutritions&controller=infpai&view=infpai&task=edit&Itemid=3&cid[]='.$resultStore;
        $this->setRedirect($link, $msg);
     }
    
}
?>
